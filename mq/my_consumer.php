<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/6
 * Time: 19:41
 */
require_once "MQ.php";
set_time_limit(0);
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

//用类的方式
/*class A{
    function processMessage($envelope, $queue) {
        $msg = $envelope->getBody();
        $envelopeID = $envelope->getDeliveryTag();
        $pid = posix_getpid();
        file_put_contents("log{$pid}.log", $msg.'|'.$envelopeID.''."\r\n",FILE_APPEND);
        $queue->ack($envelopeID);
    }
}
$a = new A();*/

class B{
    protected $_envelope;
    protected $_queue;
    public function __construct($envelope,$queue)
    {
        $this->_queue = $queue;
        $this->_envelope = $envelope;

    }

    public function test()
    {
        $msg = $this->_envelope->getBody();
        $envelopeID = $this->_envelope->getDeliveryTag();
        $pid = posix_getpid();
        file_put_contents("log{$pid}.log", $msg.'|'.$envelopeID.''."\r\n",FILE_APPEND);
        $this->_queue->ack($envelopeID);

    }
}

//用函数的方式 直接在回调里面处理，也可以在回调里面，再load新的model  事务在model里面处理
function processMessage($envelope, $queue) {

   /* $msg = $envelope->getBody();
    $envelopeID = $envelope->getDeliveryTag();
    $pid = posix_getpid();
    file_put_contents("log{$pid}.log", $msg.'|'.$envelopeID.''."\r\n",FILE_APPEND);
    $queue->ack($envelopeID); //如果设置为AMQP_AUTOACK 那么不需要该行也可以自动应答*/

    $b = new B($envelope,$queue);
    $b->test();
}

//$s = $mq->run(array($a,'processMessage'),false);
//$s = $mq->run_auto("processMessage",false);
$res = $mq->run_manual(); //没有拿到数据返回的是false

if($res){
    $content_obj = $res['content_boj'];
    $queue_obj = $res['queue_obj'];

    $content = $res['content_boj']->getBody();
    //进行应答
    //$obj->ack($res['message']->getDeliveryTag());
    $queue_obj->ack($content_obj->getDeliveryTag());
    var_dump($content);
} else {
    var_dump("队列为空");
}