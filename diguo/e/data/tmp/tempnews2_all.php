<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$grpagetitle?></title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link href="/style/reset_css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/diguo/e/data/js/ajax.js"></script>
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
		<div id="left">
			<div id="book">
				<h1><?=$ecms_gr[title]?></h1>
				<div class="img">
				  <img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" alt="<?=$ecms_gr[title]?>" />
				</div>
                
                <div class="pinfen">
               <strong>评分：<span id="showpf"><script type="text/javascript" src="/diguo/e/public/ViewClick?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=3"></script></span>.0<span style="font-size:12px;"> &nbsp;(共<script type="text/javascript" src="/diguo/e/extend/infocomment/ajaxpf.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=8"></script>人评分)</span></strong>
                <ul class="star-rating">
<script type="text/javascript" src="/diguo/e/extend/infocomment/ajaxpf.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=7"></script>
<li><a href="JavaScript:makeRequest('/e/enews/?enews=AddInfoPfen&classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&doajax=1&ajaxarea=showpf&fen=1','EchoReturnedText','GET','');" class="one-star">1</a></li>
<li><a href="JavaScript:makeRequest('/e/enews/?enews=AddInfoPfen&classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&doajax=1&ajaxarea=showpf&fen=2','EchoReturnedText','GET','');" class="two-stars">2</a></li>
<li><a href="JavaScript:makeRequest('/e/enews/?enews=AddInfoPfen&classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&doajax=1&ajaxarea=showpf&fen=3','EchoReturnedText','GET','');" class="three-stars">3</a></li>
<li><a href="JavaScript:makeRequest('/e/enews/?enews=AddInfoPfen&classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&doajax=1&ajaxarea=showpf&fen=4','EchoReturnedText','GET','');" class="four-stars">4</a></li>
<li><a href="JavaScript:makeRequest('/e/enews/?enews=AddInfoPfen&classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&doajax=1&ajaxarea=showpf&fen=5','EchoReturnedText','GET','');" class="five-stars">5</a></li>
</ul>

    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <span class="bds_more">分享到：</span>
        <a class="bds_qzone"></a>
        <a class="bds_tsina"></a>
        <a class="bds_tqq"></a>
        <a class="bds_renren"></a>
        <a class="bds_baidu"></a>
    </div>

                </div>
				<span  class="down"><?=ReturnDownSoftHtml($ecms_gr)?></span>
				<p class="dh">位置：<?=$grurl?></p>

			</div>
			<!-- book结束 -->

			<div id="jieshao">
				<h3 class="title">内容简介 . . . . . </h3>
                
				<div class="content">
                <!-- 段落文字开始 -->
                    <?=nl2br($ecms_gr[softsay])?>
				<!-- 段落文字结束 -->
                </div>
                
                
			</div>
			<!-- jieshao结束 -->

			<div id="about_Software">
				<h3 class="title">相关软件 . . . . . </h3>
				<ul>
                <? @sys_GetOtherLinkInfo(13,'download',8,16,0,1,0);?>
				        
				 </ul>
			<span class="clear"></span>
			</div>
			<!-- about_Software结束 -->

			<div id="about_Article">
				<h3 class="title">相关文章 . . . . . </h3>
				<ul class="list">
                <? @sys_GetOtherLinkInfo(14,'',5,60,0,0,0);?>
				</ul>
				<span class="more"><a href="#">&gt;&gt;浏览更多</a></span>
			</div>
			<!-- about_Article结束 -->

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

			<div id="send_pinlun">
				<h3 class="title">发表评论</h3>
          <script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script>
				<form action="/diguo/e/enews/index.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
				<p>用户名：<input name="username" type="text" class="input" /> &nbsp; 密码：<input name="password" type="password" class="input"/></p>
				<p>验证码：<input name="key" type="text" class="input"/> &nbsp; <img src="/diguo/e/ShowKey/?v=pl" align="absmiddle" /><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</p>
				<textarea name="saytext" cols="" rows=""></textarea>
                <input class="mgt5" name="imageField" type="image" src="/diguo/images/pl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>">
				</form>
			</div>
			<!-- send_pinlun结束 -->

			<div id="say">
				<h3>最新评论<a href="/diguo/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">（全部<span id="infocommentnumarea"></span>条）</a></h3>
				<div id="infocommentarea"></div>
			</div>
			<!-- say结束 -->

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
<script src="/diguo/e/extend/infocomment/commentajax.php?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>"></script>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=21818" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
</body>
</html>
