<?php
// +----------------------------------------------------------------------
// | 子线程阻塞的消息队列 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------

namespace App\Tasks\Test;

use App\Utils\Log;
use limx\phalcon\Redis;
use limx\phalcon\Cli\Color;
use Phalcon\Exception;

class QueueTask extends \App\Tasks\System\QueueTask
{
    // 最大进程数
    protected $maxProcesses = 2;
    // 当前进程数
    protected $process = 0;
    // 消息队列Redis键值
    protected $queueKey = 'phalcon:test:queue';
    // 延时消息队列的Redis键值 zset
    protected $delayKey = 'phalcon:test:queue:delay';
    // 等待时间
    protected $waittime = 1;

    protected $processHandleMaxNumber = 10;

    protected function redisClient()
    {
        return Redis::getInstance(env('REDIS_HOST'), env('REDIS_AUTH'));
    }

    protected function redisChildClient()
    {
        return Redis::getInstance(env('REDIS_HOST'), env('REDIS_AUTH'), 0, 6379, uniqid());
    }

    /**
     * @desc   消息队列处理逻辑
     * @author limx
     * @param $data
     */
    protected function handle($data)
    {
        echo Color::success($data);
        // if (rand(1, 100) < 10) {
        //     throw new Exception("BUG");
        // }
        Log::info($data);
    }

    public function testAction()
    {
        $redis = $this->redisChildClient();
        for ($i = 0; $i < 5000; $i++) {
            $data = [
                'id' => $i,
                'timestamp' => time(),
                'data' => 'queue',
            ];
            $redis->lpush($this->queueKey, json_encode($data));
        }
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'id' => $i,
                'timestamp' => time(),
                'data' => 'delay queue',
            ];
            $redis->zadd($this->delayKey, time() + 10, json_encode($data));
        }
    }

    protected function quit()
    {
        echo Color::colorize('子进程退出！', Color::FG_LIGHT_CYAN) . PHP_EOL;
    }

}