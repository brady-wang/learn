<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/31
 * Time: 16:46
 */
use Workerman\Worker;
require_once __DIR__ . '/Autoloader.php';
// 创建一个Worker监听2345端口，使用http协议通讯
$http_worker = new Worker("http://192.168.33.30:2345");

// 启动4个进程对外提供服务
$http_worker->count = 4;

// 接收到浏览器发送的数据时回复hello world给浏览器
$http_worker->onMessage = function($connection, $data)
{
    // 向浏览器发送hello world
    $connection->send('server:'.json_encode($data['get']));
};

// 运行worker
Worker::runAll();
