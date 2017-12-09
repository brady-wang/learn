<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="../html/jquery-3.2.1.min.js"></script>
    <script src="./layui/layui.all.js"></script>
</head>
<body>
    <button id="bt1" class="layui-btn layui-btn-normal">
        点击提交
    </button>

    <script>
        layui.use('util', function(){
            var util = layui.util;

            //执行
            util.fixbar({
                bar1: true
                ,click: function(type){
                    console.log(type);
                    if(type === 'bar1'){
                        alert('点击了bar1')
                    }
                }
            });
        });
    </script>
</body>
</html>