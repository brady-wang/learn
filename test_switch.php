<?php
/**
 * Created by PhpStorm.
 * User: brady.wang
 * Date: 2017/11/19
 * Time: 10:12
 */

$str  = 'd';

switch($str){
    case 'a':
    case "b":
    {
        echo 4444444;
    }
    break;
    case 'c':
    {
        echo "555555";
    }
    break;

    default :
    {
        echo "66666";
    }
    break;

}