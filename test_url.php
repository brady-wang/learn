<?php 
$url = 'http://10.1.1.122:8888/title/grade';
$opt_data = "{'userId':'2342342'}";

$curl = curl_init();  //初始化
curl_setopt($curl,CURLOPT_URL,$url);  //设置url
curl_setopt($curl,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);  //设置http验证方法

curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);  //设置curl_exec获取的信息的返回方式
curl_setopt($curl,CURLOPT_POST,1);  //设置发送方式为post请求
curl_setopt($curl,CURLOPT_POSTFIELDS,$opt_data);  //设置post的数据

curl_setopt($curl, CURLOPT_HTTPHEADER, array(                   
    'Content-Type: application/json',  
    'Content-Length: ' . strlen($opt_data))           
);  

$result = curl_exec($curl);
if($result === false){
    echo curl_errno($curl);
    exit();
}
print_r($result);
curl_close($curl);
?>