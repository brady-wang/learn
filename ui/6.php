<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layPage快速使用</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="../html/jquery-3.2.1.min.js"></script>
    <script src="./layui/layui.all.js"></script>
</head>
<body>

<div id="test1"></div>


<script>
    layer.ready(function(){
        var laypage = layui.laypage;

        //执行一个laypage实例
        laypage.render({
            elem: 'test1' //注意，这里的 test1 是 ID，不用加 # 号
            ,count: 1000 //数据总数，从服务端得到
            ,limit:20,
            limits:[10, 20, 30, 40, 50]
            ,groups:5,
            hash:true,
            theme: '#c00',
            layout:['prev', 'page', 'next','count','limit','skip']
            ,jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                console.log(obj.limit); //得到每页显示的条数
                layer.msg(obj.curr);
            }
        });
    })


</script>
</body>
</html>