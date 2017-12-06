<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/6
 * Time: 14:35
 */

require_once "MQ.php";

$configs  = array(
    'host'=>'192.168.33.30',
    'port'=>5672,
    'username'=>'title',
    'password'=>'title',
    'vhost'=>'/'
);
$number = 2;
$config = [
    'exchange_name'=>'brady',
    'queue_name'=>"queue_".$number,
    'route_key'=>"route_".$number
];


$mq = new MQ($configs,$config['exchange_name'],$config['queue_name'],$config['route_key']);

for($i=0;$i<10000;$i++){
    $res = $mq->send(date("Y-m-d H:i:s"));
}
