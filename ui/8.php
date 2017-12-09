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
<table id="demo"  lay-filter="test">

</table>
<script>
    layui.use('table', function(){
        var table = layui.table;
        //执行渲染
        table.render({
            elem: '#demo' //指定原始表格元素选择器（推荐id选择器）
            ,height: 315 //容器高度
            ,url:"data.php"
            ,page:true
            ,cols: [[ //表头
                {field: 'id', title: 'ID', width:80, fixed: 'left'}
                ,{field: 'username', title: '用户名', width:80}
                ,{field: 'sex', title: '性别', width:80, }
                ,{field: 'city', title: '城市', width:80}
                ,{field: 'sign', title: '签名', width: 177}
                ,{field: 'experience', title: '积分', width: 80, }
                ,{field: 'score', title: '评分', width: 80,}
                ,{field: 'classify', title: '职业', width: 80}
                ,{field: 'wealth', title: '财富', width: 135, }
            ]] //设置表头

            //,…… //更多参数参考右侧目录：基本参数选项
        });

    });
</script>
</body>
</html>