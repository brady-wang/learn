<?php
/**
 * Created by PhpStorm.
 * User: brady.wang
 * Date: 2017/11/10
 * Time: 18:18
 */
$mysqli = new mysqli();
$mysqli->connect("192.168.33.30",'root','root','test');
$mysqli->select_db("user");

$sql = "select * from user where 1 ";

$res = $mysqli->query($sql);

$mysqli->close();

/**
 * Created by PhpStorm.
 * User: brady.wang
 * Date: 2017/11/10
 * Time: 18:04
 */



//使用DB类的对象来访问数据库
//先加载类文件
//include_once 'DB.class.php';
//如果想使用其他类，又需要加载（所以使用魔术函数__autoload来实现类的自动加载）
//显示的写出魔术函数__autoload
//参数：需要加载的类的名字
function __autoload($a){
    //将对应的类文件加载进来
    if(is_file("$a.class.php")){
        include_once "$a.class.php";
    }
}
//实例化
$db = DBI::getInstance(array('host' => '192.168.33.30'));


echo $sql = "select * from user where id = 1";
$res = $db->getRow($sql);
function dump($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
dump($res);