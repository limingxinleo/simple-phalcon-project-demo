<?php
// +----------------------------------------------------------------------
// | demo.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
$router->add('/test/:controller/:action/:params', [
    'namespace' => 'App\Controllers\Test',
    'controller' => 1,
    'action' => 2,
    'params' => 3,
]);

$router->add('/test/:controller', [
    'namespace' => 'App\Controllers\Test',
    'controller' => 1
]);

$router->add('/admin/:controller/:action/:params', [
    'namespace' => 'App\Controllers\Admin',
    'controller' => 1,
    'action' => 2,
    'params' => 3,
]);

$router->add('/admin/:controller', [
    'namespace' => 'App\Controllers\Admin',
    'controller' => 1
]);

$router->add('/myrouter/:int/:controller/:action/:params', [
    'namespace' => 'App\Controllers\Test',
    'controller' => 2,
    'action' => 3,
    'params' => 4,
    'version' => 1,
]);

$router->add('/myrouter/:int/:controller', [
    'namespace' => 'App\Controllers\Test',
    'controller' => 2,
    'version' => 1,
]);

// 显性路由测试
$router->add('/route/index/index', 'App\\Controllers\\Route\\Index::index');

// 路由分组测试
$test = new \Phalcon\Mvc\Router\Group();
$test->setPrefix('/route');
$test->add('/index/group', 'App\\Controllers\\Route\\Index::group');
$router->mount($test);

// 路由命名测试
$router->add('/route/index/name', 'App\\Controllers\\Route\\Index::name');
$router->add('/route/index/target', 'App\\Controllers\\Route\\Index::target')->setName('route.index.target');
$router->add('/test/index/debug/{token}', 'App\\Controllers\\Test\\Index::debug');