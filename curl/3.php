<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/11
 * Time: 10:43
 */

$ch = curl_init();

$data = array('username'=>'brady','password'=>'2435345');

curl_setopt($ch,CURLOPT_URL,'wang.com/curl/api.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_POST,1);

curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
$output = curl_exec($ch);
//var_dump(curl_error($ch));
curl_close($ch);

print_r($output);

/*
一、get请求

curl "http://www.baidu.com"  如果这里的URL指向的是一个文件或者一幅图都可以直接下载到本地
curl -i "http://www.baidu.com"  显示全部信息
curl -l "http://www.baidu.com" 只显示头部信息
curl -v "http://www.baidu.com" 显示get请求全过程解析

wget "http://www.baidu.com"也可以

二、post请求
curl -d "param1=value1&param2=value2" "http://www.baidu.com"*/




