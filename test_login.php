login
<?php
    $type = $_GET['type'];
    if(empty($type)) {
        $url = "http://www.tps138.brady1/login/loginTpsNews?uid=HVhl4pun7z62UB61tCQ9pw%3D%3D&passwd=8FDVh7D9MunCoFCqoWZAzw%3D%3D";

    }else {
        if($type == 'logout') {
            $url = "http://www.tps138.brady1/login/logoutTpsNews";
        } else{
            $url = "http://www.tps138.brady1/login/loginTpsNews?uid=HVhl4pun7z62UB61tCQ9pw%3D%3D&passwd=8FDVh7D9MunCoFCqoWZAzw%3D%3D";
        }
    }
?>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $.ajax({
            type: "get",
            url: "<?php echo $url;?>",
            xhrFields: {
                withCredentials: true
            },
            crossDomain: true,
            dataType: "jsonp",
            jsonp:"jsoncallback",
            success: function (res) {
                alert(res.msg)
            }
        });
    })
</script>