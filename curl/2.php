<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/11
 * Time: 10:38
 */

//初始化
$ch = curl_init();

//设置选项，包括URL
curl_setopt($ch,CURLOPT_URL,"wang.com/curl/api.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,0); //不直接输出，返回到变量
curl_setopt($ch,CURLOPT_HEADER,0);

//执行并获取HTML文档内容
$output  = curl_exec($ch);

curl_close($ch);

//var_dump($output);