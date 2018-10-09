<?php
error_reporting(0);
function getHeader()
{
    $headers = array();
    foreach ($_SERVER as $key => $value) {
        if ('HTTP_' == substr($key, 0, 5)) {
            $headers[str_replace('_', '-', substr($key, 5))] = $value;
        }
        if (isset($_SERVER['PHP_AUTH_DIGEST'])) {
            $headers['AUTHORIZATION'] = $_SERVER['PHP_AUTH_DIGEST'];
        } elseif (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
            $headers['AUTHORIZATION'] = base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $_SERVER['PHP_AUTH_PW']);
        }
        if (isset($_SERVER['CONTENT_LENGTH'])) {
            $headers['CONTENT-LENGTH'] = $_SERVER['CONTENT_LENGTH'];
        }
        if (isset($_SERVER['CONTENT_TYPE'])) {
            $headers['CONTENT-TYPE'] = $_SERVER['CONTENT_TYPE'];
        }
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $headers['ip'] = $_SERVER['REMOTE_ADDR'];
        }

    }
    return $headers;
}
$get = $_GET;
$post = $_POST;
$data = array_merge($get,$post);
$res = getHeader();
$res['data'] = $data;
echo json_encode($res);

text-decoration:none;cursor: pointer;color: #00a8ff;font-family: "微软雅黑","宋体";text-shadow: -1px 1px 1px rgb(63, 255, 0); transition: 0.3s;
