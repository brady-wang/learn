<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2017/12/11
 * Time: 10:44
 */


$data = $_POST;
file_put_contents('a.txt',json_encode($data),FILE_APPEND);
echo json_encode($data);