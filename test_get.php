<?php
header("content-type:text/html;charset=utf-8");
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

$conn = new AMQPConnection($conn_args);
if (!$conn->connect()) {
    die("Cannot connect to the broker!\n");
}
$channel = new AMQPChannel($conn);

//创建交换机
$ex = new AMQPExchange($channel);
$ex->setName($e_name);
$ex->setType(AMQP_EX_TYPE_DIRECT); //direct类型
$ex->setFlags(AMQP_DURABLE); //持久化
echo "Exchange Status:".$ex->declareExchange()."\n";

//创建队列
$q = new AMQPQueue($channel);
$q->setName($q_name);
$q->setFlags(AMQP_DURABLE); //持久化
echo "Message Total:".$q->declareQueue()."\n";

//绑定交换机与队列，并指定路由键
echo 'Queue Bind: '.$q->bind($e_name, $k_route)."\n";

//阻塞模式接收消息
//echo "Message:\n";
//$q->consume('processMessage', AMQP_AUTOACK); //自动ACK应答
//消息获取
$messages = $q->get(AMQP_AUTOACK) ;
if($messages){
    var_dump($messages->getBody());
}



function processMessage($envelope, $queue) {
    $msg = $envelope->getBody();
    echo $msg."\n"; //处理消息
    file_put_contents("a.txt",$msg."\r\n",FILE_APPEND);
    $queue->ack($envelope->getDeliveryTag()); //手动发送ACK应答
}