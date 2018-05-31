<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/4/17
 * Time: 14:40
 */

require_once "Spider.php";
$spider = new Spider();

$content = $spider->downloader('https://baike.baidu.com/item/PHP/9337?fr=aladdin');

$parse = $spider->parser($content);
var_dump($parse);
