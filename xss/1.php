<?php
header("X-XSS-Protection: 0; mode=block");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>XSS利用输出的环境来构造代码</title>
</head>
<body>
<center>
    <h6>把我们输入的字符串 输出到input里的value属性里</h6>
    <form action="" method="get">
        <h6>请输入你想显现的字符串</h6>
        <input type="text" name="xss_input_value" value=""><br>
        <input type="submit">

<!--        输入  1231"><script scr=1.js"></script>-->
    </form>
    <hr>
    <?php
    $xss = $_GET['xss_input_value'];
    if(isset($xss)){
        echo '<input type="text" value="'.$xss.'">';
    }else{
        echo '<input type="type" value="test" >';
    }
    ?>
</center>
</body>
</html>