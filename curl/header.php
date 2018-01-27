
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43

<?php
function FormatHeader($url, $myIp = null,$xml = null)
{
    // 解悉url
    $temp = parse_url($url);
    $query = isset($temp['query']) ? $temp['query'] : '';
    $path = isset($temp['path']) ? $temp['path'] : '/';
    $header = array (
        "POST {$path}?{$query} HTTP/1.1",
        "Host: {$temp['host']}",
        "Content-Type: text/xml; charset=utf-8",
        'Accept: */*',
        "Referer: http://{$temp['host']}/",
        'User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1)',
        "X-Forwarded-For: {$myIp}",
        "Content-length: " . strlen($xml) ."\r\n\r\n" .$xml, //修改1
        "Connection: Close"
    );
    return $header;
}
$xml = '<?xml version="1.0" encoding="utf-8"?> //修改2
 <profile>
 <sha1>adsfadsf</sha1>
 <user_id>asdfasdf</user_id>
 <album_id>asdf</album_id>
 <album_name>asdf</album_name>
 <tags>asdfasd</tags>
 <title>asdfasdf</title>
 <content>ddddddddddddd</content>
 <type>asdfasdf</type>
 <copyright>asdfasdf</copyright>
 </profile>';
$interface = 'http://wang.com/curl/header2.php';
$header = FormatHeader($interface,'10.1.11.1',$xml); //修改3
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $interface);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header); //设置头信息的地方
curl_setopt($ch, CURLOPT_HEADER, 1); //不取得返回头信息
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
var_dump($result);
?>
 