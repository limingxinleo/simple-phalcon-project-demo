<?php

namespace App\Controllers;
/**
 * Class TestController
 * 因为有Test文件夹的原因，导致此控制器失效
 * @package App\Controllers
 */
class TestController extends Controller
{

    public function indexAction()
    {
        echo "TestController@index";
    }

    public function testAction()
    {
        echo "TestController@test";
    }

}

