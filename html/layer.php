<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="./jquery-3.2.1.min.js">    </script>
    <script src="layer/layer.js"></script>
</head>
<body>
    <button id="button1">点击</button>
    <script>
        $(function(){
            $("#button1").on('click',function(){
                layer.msg("提交成功")
            })
        })
    </script>
</body>
</html>

