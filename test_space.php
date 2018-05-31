<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/5/16
 * Time: 14:04
 */
//测试命名空间
namespace kj1{
    function get_msg()
    {
        echo "111111";
    }
    const MN='eee';
}


namespace kj2{
    function get_msg()
    {
        echo "22222";
    }
    const MN='ddd';
    \kj1\get_msg();
}

//命名空间三种访问方式 
// 非限定名称访问
// 限定名称访问
// 完全限定名称访问

get_msg() ;//非限定 访问当前命名空间的

\kj1\get_msg();//完全限定访问方式

use kj1
get_msg()
