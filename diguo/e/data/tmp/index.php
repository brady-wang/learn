<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帝国网站管理系统</title>
<meta name="Keywords" content="帝国网站管理系统,EmpireCMS" />
<meta name="description" content="　　帝国软件是一家专注于网络软件开发的科技公司，其主营产品“帝国网站管理系统(EmpireCMS)”是目前国内应用最广泛的CMS程序。通过十多年的不断创新与完善，使系统集安全、稳定、强大、灵活于一身。目前EmpireCMS程序已经广泛应用在国内上百万家网站，覆盖国内上千万上网人群，并经过上千家知名网站的严格检测，被称为国内最安全、最稳定的开源CMS系统。" />
<link href="/style/reset_css.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="top">
		<ul>
			<li><a href="#">豆瓣社区</a></li>
			<li><a href="#">豆瓣社区</a></li>
			<li><a href="#">豆瓣社区</a></li>
			<li><a href="#">豆瓣社区</a></li>
			<li><a href="#">豆瓣社区</a></li>
		</ul>
		<div class="login">
		<a href="/diguo/e/member/login/">登陆</a>
		<a href="/diguo/e/member/register/">注册</a>
		</div>
	</div>
	<!-- top结束 -->

	<div id="header">
		<div id="logo">
			<strong>语文教师网</strong>
		</div>
		<!-- logo结束 -->

		<div id="search">
			<form name="searchform" action="/e/search/index.php" method="post">
            <input type="hidden" name="show" value="title,softsay">
            <input type="hidden" name="tbname" value="download">
            <input type="hidden" name="tempid" value="1">
			<input name="keyboard" type="text" class="input"/><input name="submit" type="image" src="/images/btn_search.gif" alt="搜索" />
			</form>
			<p>热门关键词：<a href="#">分类浏览</a><a href="#">阅读</a><a href="#">作者</a><a href="#">书评</a></p>
		</div>
		<!-- search结束 -->

		<span class="clear"></span>
		<!-- 清除浮动 -->
	</div>
	<!-- header结束 -->

	<div id="Brand_index">
		<h3><span><a href="#">分享</a></span>品牌索引</h3>
		<dl>
			<dt>按字母</dt>
			<dd>
			<a href="#" class="change">全部</a><a href="#">A-G</a><a href="#">H-N</a><a href="#">O-T</a><a href="#">U-Z</a>
            <span class="clear"></span>
			</dd>
		</dl>

		<dl>
			<dt>按字母</dt>
			<dd>
			<a href="#" class="change">全部</a><a href="#">A-G</a><a href="#">H-N</a><a href="#">O-T</a><a href="#">U-Z</a>
            <span class="clear"></span>
			</dd>
		</dl>

		
        <span class="yuan1"></span>
        <span class="yuan2"></span>
        <span class="yuan3"></span>
        <span class="yuan4"></span>
	</div>
	<!-- Brand_index结束 -->
    
    

	<div id="content">
		<div id="index">
           <div class="box1">
               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,2,12,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><dl>
                <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="175" height="120" alt="<?=$bqr['title']?>" /></a></dt>
                <dd class="tit"><a href="<?=$bqsr['titleurl']?>"><?=esub($bqr['title'],40)?></a></dd>
                <dd>时间：<?=date('Y-m-d',$bqr[newstime])?> 点击<?=$bqr['onclick']?>次</dd>
                <dd class="hui2"><?=esub($bqr['softsay'],160)?>...<a href="<?=$bqsr['titleurl']?>">全文&gt;&gt;</a></dd>
             </dl><?php
}
}
?>
           </div>
           <div class="box2 mgt15">
               <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('6,22,46,65,3,1,30,34,38',10,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><dl>
                <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="100" height="75" alt="<?=$bqr['title']?>" /></a></dt>
                <dd><a href="<?=$bqsr['titleurl']?>"><?=esub($bqr['title'],60)?></a></dd>
                <dd class="hui"><?=esub($bqr['softsay'],108)?>...<a href="<?=$bqsr['titleurl']?>">全文&gt;&gt;</a></dd>
             </dl><?php
}
}
?>
           </div>

		</div>
		<!-- left结束 -->

		<div id="right">
        <div id="send_pinlun" style="padding-left:30px;">
				<h3 class="title">会员登录</h3>
		  <script src="/e/member/login/loginjs.php"></script>
			</div>
            <div id="news">
				<h3 class="title">最新消息</h3>
				<ul class="list">
					<li><a href="#">徐锡伟说，尽管国际原子能组织对核电站有严格的选址标</a></li>
					<li><a href="#">回乌后像两会期间这样集中时间关注这里不易做到，所以</a></li>
					<li><a href="#">中新社南京3月19日电 记者 唐娟 20日凌晨2点</a></li>
					<li><a href="#">徐锡伟说，尽管国际原子能组织对核电站有严格的选址标</a></li>
					<li><a href="#">中新社南京3月19日电 记者 唐娟 20日凌晨2点</a></li>
				</ul>

			</div>
        	<div class="box">
				<div class="fklist">
					<a href="#">徐锡伟</a> <a href="#">徐锡伟锡伟</a> <a href="#">徐锡伟</a><a href="#">徐锡伟</a> <a href="#">徐锡伟</a> <a href="#">徐锡伟</a><a href="#">徐锡伟</a> <a href="#">徐锡伟</a> <a href="#">徐锡伟</a>
				</div>
            </div>
        
        
			<div id="news">
				<h3 class="title">最新文章</h3>
				<ul class="list">
					<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,5,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><li><a href="<?=$bqsr['titleurl']?>"><?=esub($bqr['title'],42)?></a></li><?php
}
}
?>
				</ul>

			</div>
			<!-- news结束 -->


		</div>
		<!-- right结束 -->

		<span class="clear"></span>
		<!-- 清除浮动 -->
	</div>
	<!-- content结束 -->

	<div id="copyright">
		<p>中央人民广播电台 版权所有(C) 京ICP备05065762号</p>
		<ul>
			<li><a href="#">关于豆瓣</a></li>
			<li><a href="#">在豆瓣工作</a></li>
			<li><a href="#">联系我们</a></li>
			<li><a href="#">免责声明</a></li>
			<li><a href="#">帮助中心</a></li>
			<li><a href="#">API</a></li>
			<li><a href="#">图片馆合作</a></li>
			<li><a href="#">手机读书</a></li>
			<li><a href="#">豆瓣广告</a></li>
		</ul>
	</div>
	<!-- copyright结束 -->
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;uid=21818" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
</body>
</html>
