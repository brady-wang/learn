<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/1/31
 * Time: 16:19
 */
$db = new Swoole\MySQL;
$server = array(
    'host' => '192.168.33.30',
    'user' => 'root',
    'password' => 'root',
    'database' => 'test',
);

$db->connect($server, function ($db, $result) {
    $db->query("show tables", function (Swoole\MySQL $db, $result) {
        var_dump($result);
        $db->close();
    });
});