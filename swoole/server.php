<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/31
 * Time: 15:10
 */
$serv = new swoole_server("192.168.33.30",9501);
//创建Server对象，监听 192.168.33.30:9501端口
//监听连接进入事件
$serv->on('connect', function ($serv, $fd) {
    echo "Client: Connected.{$fd} \n";
});

//监听数据接收事件
$serv->on('receive', function ($serv, $fd, $from_id, $data) {
    echo "接收到客户端{$fd}的信息:".$data;
    $serv->send($fd, "Server返回信息: ".$data);
});

//监听连接关闭事件
$serv->on('close', function ($serv, $fd) {
    echo "Client{$fd}: Close.\n";
});

//启动服务器
$serv->start();