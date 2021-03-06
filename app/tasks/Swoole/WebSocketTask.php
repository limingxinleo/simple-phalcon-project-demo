<?php
// +----------------------------------------------------------------------
// | Demo [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2017/2/25 Time: 上午10:03
// +----------------------------------------------------------------------
namespace App\Tasks\Swoole;

use Xin\Cli\Color;
use App\Tasks\System\WebSocket;
use swoole_websocket_frame;
use swoole_websocket_server;
use App\Logics\Test;

class WebSocketTask extends WebSocket
{
    protected $port = 11521;

    protected function connect(swoole_websocket_server $server, $request)
    {
        echo "server: handshake success with fd{$request->fd}\n";
        $test = new Test();
        $test->index();
    }

    protected function message(swoole_websocket_server $server, swoole_websocket_frame $frame)
    {
        echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
        $server->push($frame->fd, "this is server");
    }

    protected function close($ser, $fd)
    {
        // TODO: Implement close() method.
        echo "client {$fd} closed\n";
    }


}