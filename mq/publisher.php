<?php
/**
 * Created by PhpStorm.
 * User: brady.wang
 * Date: 2017/12/6
 * Time: 11:09
 */

//生产者

$conn_config  = array(
    'host'=>'192.168.33.30',
    'port'=>5672,
    'login'=>'title',
    'password'=>'title',
    'vhost'=>'/'
);
$config = [
    'exchange_name'=>'test1',
    'queue_key'=>"queue1",
];

//创建链接和channel
$conn = new AMQPConnection($conn_config);

try{
    if ($conn->connect()) {
        echo "Established a connection to the broker \n";
    }
    else {
        echo "Cannot connect to the broker \n ";
    }
//你的消息
    $message = json_encode(array('Hello World3!','php3','c++3:'));
//创建channel
    $channel = new AMQPChannel($conn);
//创建exchange
    $ex = new AMQPExchange($channel);
    $ex->setName('exchange');//创建名字
    $ex->setType(AMQP_EX_TYPE_DIRECT);
    $ex->setFlags(AMQP_DURABLE);
//$ex->setFlags(AMQP_AUTODELETE);
//echo "exchange status:".$ex->declare();
    echo "exchange status:".$ex->declareExchange();
    echo "\n";
    $routingkey = 'key1';
//    for($i=0;$i<100;$i++){
//        if($routingkey=='key2'){
//            $routingkey='key';
//        }else{
//            $routingkey='key2';
//        }
//        $ex->publish($message,$routingkey);
//    }

  //  $ex->publish($message,$routingkey);
   // 创建队列
    $q = new AMQPQueue($channel);
   // 设置队列名字 如果不存在则添加
    $q->setName('queue3');
    $q->setFlags(AMQP_DURABLE | AMQP_AUTODELETE);
    echo "queue status: ".$q->declare();
    echo "\n";
    echo 'queue bind: '.$q->bind('exchange',$routingkey);
   // 将你的队列绑定到routingKey
    echo "\n";

    for($i=0;$i<10000;$i++){
        $channel->startTransaction();//事务开始
        echo "send: ".$ex->publish($i, $routingkey); //将你的消息通过制定routingKey发送
        $channel->commitTransaction();//事务结束
       //
    }
    $conn->disconnect();




} catch(Exception $e){
    var_dump($e->getMessage());
}

