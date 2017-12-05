<?php
/*************************************
 * PHP amqp(RabbitMQ) Demo - publisher
 * Author: Linvo
 * Date: 2012/7/30
 *************************************/
//配置信息
$conn_args = array(
    'host' => '192.168.33.30',
    'port' => '5672',
    'login' => 'title',
    'password' => 'title',
    'vhost'=>'/'
);
$e_name = 'e_linvo'; //交换机名
$q_name = 'q_linvo'; //无需队列名
$k_route = 'key_1'; //路由key

//创建连接和channel
$conn = new AMQPConnection($conn_args);
if (!$conn->connect()) {
    die("Cannot connect to the broker!\n");
}
$channel = new AMQPChannel($conn);
##3，exchange 与  routingkey ： 交换机 与 路由键##
//消息内容
$message = date("Y-m-d H:i:s");

//创建交换机对象
$ex = new AMQPExchange($channel);
$ex->setName($e_name);

//发送消息
//$channel->startTransaction(); //开始事务
for($i=0; $i<100; $i++){
    echo "Send Message:".$ex->publish($i, $k_route)."\n";
}
//$channel->commitTransaction(); //提交事务

$conn->disconnect();