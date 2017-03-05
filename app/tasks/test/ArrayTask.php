<?php

namespace MyApp\Tasks\Test;

use Phalcon\Cli\Task;
use limx\phalcon\Cli\Color;

class ArrayTask extends Task
{
    public function mainAction()
    {
        echo Color::head('Help:') . PHP_EOL;
        echo Color::colorize('  Array函数测试') . PHP_EOL . PHP_EOL;

        echo Color::head('Usage:') . PHP_EOL;
        echo Color::colorize('  php run Test\\\\Array [action]', Color::FG_GREEN) . PHP_EOL . PHP_EOL;

        echo Color::head('Actions:') . PHP_EOL;
        echo Color::colorize('  chunk                   数组重新分组', Color::FG_GREEN) . PHP_EOL;
        echo Color::colorize('  case    [upper|lower]   修改键名为全大写或小写', Color::FG_GREEN) . PHP_EOL;
        echo Color::colorize('  combine                 拼接key数组和val数组', Color::FG_GREEN) . PHP_EOL;
        echo Color::colorize('  count                   统计数组中所有的值出现的次数', Color::FG_GREEN) . PHP_EOL;
        echo Color::colorize('  diff                    计算数组差集', Color::FG_GREEN) . PHP_EOL;

    }

    public function diffAction()
    {
        $arr1 = [1, 2, 3, '4' => 4, '5' => 5];
        $arr2 = [2, 3, '5' => 5, '6' => 5];
        echo Color::head("原数组：") . PHP_EOL;
        echo Color::colorize(json_encode($arr1), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize(json_encode($arr2), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::head("结果：") . PHP_EOL;
        echo Color::colorize(json_encode(array_diff($arr1, $arr2)), Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function countAction()
    {
        $data = [1, 2, 'hello', 1, 'hello', 'hello', '1'];
        echo Color::head("原数组：") . PHP_EOL;
        echo Color::colorize(json_encode($data), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize(json_encode(array_count_values($data)), Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function combineAction()
    {
        $key = ['key1', 'key2', 'key3'];
        $val = ['val1', 'val2', 'val3'];
        echo Color::head("原数组：") . PHP_EOL;
        echo Color::colorize(json_encode($key), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize(json_encode($val), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::head("结果：") . PHP_EOL;
        echo Color::colorize(json_encode(array_combine($key, $val)), Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function caseAction($params)
    {
        if (count($params) == 0) {
            echo Color::error("请输入参数！upper|lower");
            return;
        }
        $type = $params[0] == 'upper' ? CASE_UPPER : CASE_LOWER;
        $data = ['test' => 'tt', 'Tes' => 123, 'AA' => 'sdf'];
        echo Color::head("原数组：") . PHP_EOL;
        echo Color::colorize("  " . json_encode($data), Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::head("array_change_key_case(data,type)") . PHP_EOL;
        echo Color::colorize("  " . json_encode(array_change_key_case($data, $type)), Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function chunkAction()
    {
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
        echo Color::head("原数组：") . PHP_EOL;
        echo Color::colorize("  " . json_encode($arr), Color::FG_LIGHT_GREEN) . PHP_EOL;
        $res = array_chunk($arr, 3);
        echo Color::head("3个一组分组：") . PHP_EOL;
        echo Color::colorize("  " . json_encode($res), Color::FG_LIGHT_GREEN) . PHP_EOL;
        $res = array_chunk($arr, 20);
        echo Color::head("20个一组分组：") . PHP_EOL;
        echo Color::colorize("  " . json_encode($res), Color::FG_LIGHT_GREEN) . PHP_EOL;
    }


}