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

<style>

</style>
<button id="button1" class="layui-button layui-button-normal ">
    点击提交
</button>
<script>
    !function(){
        var a = 123;
    }();
</script>
</pre>
<script>
    layui.code({
        elem:"pre",
        title:'php代码',
        skin:"notepad",
        encode:true,
        about:false
    })
    layui.use(['layer'],function(){
        var layer = layui.layer;
        $("#button1").click(function(){

            layer.ready(function(){
                layer.open({
                    type:1,
                    content: $("#content"),
                    success:function(layero,index){

                    }
                    ,btn: ['确定', '取消']
                    ,yes: function(index, layero){
                        layer.msg("确定")
                        layer.close(index);
                    }
                    ,btn2: function(index, layero){
                        //按钮【按钮二】的回调
                        layer.msg("取消");
                        layer.close(index);
                    }
                });
            })
        })

    })

    parent.document.onkeydown = function(e){
        var ev =parent. document.all ? window.event : e;
        if(ev.keyCode==13) {
            $('#loginBtn').trigger("click");
            return false
        }
    }
    document.onkeydown = function(e){
        var ev =document.all ? window.event : e;
        if(ev.keyCode==13) {
            $('#loginBtn').trigger("click");
            return false
        }
    }
</script>
</body>
</html>

<div id="content" style="display:none;">

</div>