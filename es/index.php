<?php

use Elasticsearch\ClientBuilder;
require 'vendor/autoload.php';

ini_set('display_errors',1);            //错误信息
ini_set('display_startup_errors',1);    //php启动错误信息
error_reporting(-1);                    //打印出所有的 错误信息

include_once "DB.class.php";

$db = DB::getIntance();
$client = ClientBuilder::create()->build();

/*$res = $db->getAll("select * from articles");


foreach($res as $v)
{
    $params = [
        'index' => 'test',
        'type' => 'articles',
        'id' => $v['id'],
        'body' => $v
    ];
    $response = $client->index($params);
    $db->dump($response);
}*/
//$params = [
//    'index' => 'test',
//    'type' => 'articles',
//    'id' => '26'
//];
//
//$response = $client->getSource($params);
//print_r($response);

$json = '{
    "query" : {
        "match" : { "title": "hexo" }
    }
}';
$params = [
    'index' => 'test',
    'type' => 'articles',
    'body' => $json
];

$response = $client->search($params);
$db->dump($response);