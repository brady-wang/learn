<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/11
 * Time: 19:50
 */

//print_r($_SERVER); //头信息里面有内容绝大部分是放在系统变量里面的
$raw_post_data = file_get_contents('php://input', 'r');
var_dump($raw_post_data);
