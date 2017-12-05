<?php
/**
 * Created by PhpStorm.
 * User: brady.wang
 * Date: 2017/11/10
 * Time: 17:31
 */



$a = 0;
function handle($errno,$errstr,$errfile,$errline){
    echo $errstr;
}
set_error_handler('handle');

echo 4/$a;
echo PHP_EOL;
echo 'hehe';
?>


