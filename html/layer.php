<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="./jquery-3.2.1.min.js">    </script>
    <script src="layer/layer.js"></script>
    <style>
        #container{
            width:200px;
            height:100px;
            background:#666666;
            border:1px dashed red;
            margin:0 auto;
        }
        #container2{
            border:solid 1px red;
            margin : 100px   auto;
            width:200px;
            height:100px;
        }
        #button1{
            display:inline-block;
            margin-top:76px;
            margin-left:155px;
        }
    </style>
</head>
<body>
    <div id="container">
        <input type="text" name="">
    </div>
    <div id="container2">
        <span button1><button id="button1">点击</button></span>
    </div>

    <script>
        $(function(){
            $("#button1").on('click',function(){
                //layer.msg("提交成功")

//                layer.open({
//                    type:2, //layer提供了5种层类型。可传入的值有：0（信息框，默认）1（页面层）2（iframe层）3（加载层）4（tips层）
//                    area:['600px','360px'],//在默认状态下，layer是宽高都自适应的，但当你只想定义宽度时，你可以area: '500px'，高度仍然是自适应的。当你宽高都要定义时，你可以area: ['500px', '300px']
//                    shadeClose:true,
//                    title:['标题','font-size:30px;color:red;'],//类型：String/Array/Boolean，默认：'信息'
//                   // title支持三种类型的值，若你传入的是普通的字符串，如title :'我是标题'，那么只会改变标题文本；若你还需要自定义标题区域样式，那么你可以title: ['文本', 'font-size:18px;']，数组第二项可以写任意css样式；如果你不想显示标题栏，你可以title: false
//                    fix:true,
//                   // offset:'t',
//                    shade:0.7,
//                    content:'http://wang.com/html/1.php',//content可传入的值是灵活多变的，不仅可以传入普通的html内容，还可以指定DOM，更可以随着type的不同而不同
//                    end: function () {
//                        //window.location.reload();
//                    }
//                })

                /*var ii = layer.load();
                setTimeout(function(){
                    layer.close(ii);
                },3000)*/

//                layer.tips("hello tips!",'#container2',{
//                    tips:[2,'#3595cc'], //位置 颜色
//                    time:4000 //时间
//                });

//                layer.open({
//                    type: 4,
//                    content: ['内容', '#id'] //数组第二项即吸附元素选择器或者DOM
//                });

                //layer.alert("test",{icon:3});
                //layer.load(2)

//                layer.open({
//                    type:0,
//                    content:"test",
//                    closeBtn:1,
//                    btnAlign: 'r',
//                    shade:0.5,
//                    btn:"确定",
//                    //time:2000,
//                    anim:5,
//                    shadeClose:true,
//                    success:function(layero, index){
//                        console.log(layero, index);
//                    },
//                    yes: function(index, layero){
//                        layer.msg(44444)
//                    },
//                    cancel:function(){
//                        layer.msg("取消");
//                    }
//                })

//                layer.open({
//                    content: '测试回调',
//                    yes: function(index, layero){
//                        //do something
//
//                        layer.close(index); //如果设定了yes回调，需进行手工关闭
//                    }
//                });

                layer.tab({
                    area: ['600px', '300px'],
                    shadeClose:true,
                    tab: [{
                        title: 'TAB1',
                        content: '内容1'
                    }, {
                        title: 'TAB2',
                        content: '内容2'
                    }, {
                        title: 'TAB3',
                        content: '内容3'
                    }]
                });

            })
        })
    </script>
</body>
</html>

