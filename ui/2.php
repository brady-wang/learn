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
        $(function(){
            $(document).keydown(function(event){
                if(event.keyCode == 13){
                    $("#bt1").trigger('click');
                }
            })

            $("#bt1").click(function(){
                layer.msg(444444);
            })
        })
    </script>
</body>
</html>