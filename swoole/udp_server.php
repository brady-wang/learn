<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/31
 * Time: 15:29
 */
$server = new swoole_server('192.168.33.30',9502,SWOOLE_PROCESS,SWOOLE_SOCK_UDP);

$server->on('Packet',function($server,$data,$clientInfo){
    $server->sendto($clientInfo['address'], $clientInfo['port'], "Server ".json_encode($clientInfo));
    var_dump($clientInfo);
});

    //启动服务器
$server->start();