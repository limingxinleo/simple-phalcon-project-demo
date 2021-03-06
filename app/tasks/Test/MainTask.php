<?php
// +----------------------------------------------------------------------
// | 测试脚本 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Tasks\Test;

use Phalcon\Cli\Task;
use Xin\Cli\Color;

class MainTask extends Task
{
    public function mainAction()
    {
        echo Color::head('Help:'), PHP_EOL;
        echo Color::colorize('  测试脚本列表'), PHP_EOL, PHP_EOL;

        echo Color::head('Usage:'), PHP_EOL;
        echo Color::colorize('  php run Test\\\\[task]', Color::FG_GREEN), PHP_EOL, PHP_EOL;
        echo Color::head('Tasks:'), PHP_EOL;
        echo Color::colorize('  Arg                     php函数参数相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Array                   array函数相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Bitwise                 位运算相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Builder                 模板文件创建测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Cache                   缓存相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Compare                 比较测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Curl                    Curl函数相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Db                      DB相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Encrypt                 加密测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  File                    文件相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Laravel                 Laravel\\Support 扩展测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Ldap                    Ldap 扩展测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Match                   正则表达式测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Math                    数学方法测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  MongoDB                 MongoDB测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Mysql                   Mysql测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Number                  Number测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  OAuth                   OAuth函数相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Password                密码函数测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Pcre                    正则相关函数测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Phalcon                 Phalcon框架功能测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Php7                    php7函数测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Queue                   消息队列测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Redis                   Redis测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Reflection              反射类测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Rpc                     Rpc测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  SearchEngine            开源搜索引擎测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Rsa                     Rsa加密测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Shell                   php运行shell脚本测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Signal                  php信号脚本测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Sms                     短信测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Sort                    排序算法测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Sphinx                  Sphinx全文检索引擎', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Ymal                    Ymal函数相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Str                     字符串相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Swoole                  Swoole测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Test                    其他测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  WeChat                  微信开发测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Yaml                    Yaml扩展测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Yar                     Yar相关测试', Color::FG_GREEN), PHP_EOL;
        echo Color::colorize('  Zip                     Zip相关测试', Color::FG_GREEN), PHP_EOL;
    }

}