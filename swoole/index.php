<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/31
 * Time: 14:54
 */
$http = new swoole_http_server("192.168.33.30", 9501);

$http->on('request', function ($request, $response) {
    $response->header('Content-Type', 'text/html; charset=utf-8');
    $response->end('<h1>Hello Swoole. #' . rand(1000, 9999) . '</h1>');
});

$http->start();