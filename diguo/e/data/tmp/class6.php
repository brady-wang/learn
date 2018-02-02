<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FLASH频道</title>
<meta name="Keywords" content="" />
<meta name="description" content="" />
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
		<a href="#">登陆</a>
		<a href="#">注册</a>
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
    
    

	<div id="content" class="liebiao">
		<div id="left">
<div style="margin-bottom:15px;">您的位置：<a href="/diguo/">首页</a>&nbsp;>&nbsp;<a href="/diguo/flash/">FLASH频道</a></div>
			<div class="news_list2">
<? @sys_ForSonclassData('selfinfo',5,38,0,0,15,0,0);?>
               <div style="height:20px; clear:both"></div>


             </div>

			<div id="about_Software">
				<h3 class="title">相关软件 . . . . . </h3>
				<ul>
				        <? @sys_GetOtherLinkInfo(13,'download',4,16,0,1,0);?>
				      
				 </ul>
			<span class="clear"></span>
			</div>
			<!-- about_Software结束 -->


		</div>
		<!-- left结束 -->

		<div id="right">
        	<div class="box">
				<ul class="list">
					<li><a href="#">徐锡伟说，尽管严格的选址标</a></li>
				</ul>
            </div>
        
        
			<div id="news">
				<h3 class="title">最新消息</h3>
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
          <div class="downdig">
            <h3 class="title">下载排行榜</h3>
             <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,3,15,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?><dl>
                <dt><a href="<?=$bqsr['titleurl']?>"><img src="<?=$bqr['titlepic']?>" width="100" height="75" alt="8" /></a></dt>
                <dd><a href="<?=$bqsr['titleurl']?>"><?=esub($bqr['title'],26)?></a></dd>
                <dd>下载：<?=$bqr['totaldown']?>次</dd>
                <dd class="hui"><?=esub($bqr['softsay'],42)?>
                </dd>
             </dl><?php
}
}
?>
            
            </div>

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