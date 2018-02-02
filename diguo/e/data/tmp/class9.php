<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>分类信息 - Powered by EmpireCMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/diguo/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/diguo/skin/default/js/tabs.js"></script>
</head>
<body class="channle">
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
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：<a href="/diguo/">首页</a>&nbsp;>&nbsp;<a href="/diguo/info/">分类信息</a></td>
</tr>
</table>
<? @sys_ForSonclassData('selfinfo',5,38,0,0,7,0,0);?></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>分类信息搜索</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><form action="/diguo/e/search/index.php" method="post" name="searchform" id="searchform">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="6">
<input type="hidden" name="tbname" value="info">
<input type="hidden" name="tempid" value="1">
<tr>
<td><input name="keyboard" type="text" class="inputText" id="keyboard" size="18" />
<select name="show">
<option value="title,smalltext,myarea" selected="selected">不限</option>
<option value="title">信息标题</option>
<option value="smalltext">信息内容</option>
<option value="myarea">所在地</option>
</select></td>
</tr>
<tr>
<td><select name="classid">
<option value='9'>所有分类</option>
<option value='10'>|-房屋信息</option>
<option value='11' >&nbsp;&nbsp;|-房屋求租</option>
<option value='12' >&nbsp;&nbsp;|-房屋出租</option>
<option value='13' >&nbsp;&nbsp;|-房屋求购</option>
<option value='14' >&nbsp;&nbsp;|-房屋出售</option>
<option value='15' >&nbsp;&nbsp;|-办公用房</option>
<option value='16' >&nbsp;&nbsp;|-旺铺门面</option>
<option value='17'>|-跳蚤市场</option>
<option value='18' >&nbsp;&nbsp;|-电脑配件</option>
<option value='19' >&nbsp;&nbsp;|-电器数码</option>
<option value='20' >&nbsp;&nbsp;|-通讯产品</option>
<option value='21' >&nbsp;&nbsp;|-居家用品</option>
<option value='22'>|-同城生活</option>
<option value='23' >&nbsp;&nbsp;|-本地新闻</option>
<option value='24' >&nbsp;&nbsp;|-购物打折</option>
<option value='25' >&nbsp;&nbsp;|-旅游活动</option>
<option value='26' >&nbsp;&nbsp;|-便民告示</option>
<option value='27'>|-求职招聘</option>
<option value='28' >&nbsp;&nbsp;|-工程技术</option>
<option value='29' >&nbsp;&nbsp;|-财务会计</option>
<option value='30' >&nbsp;&nbsp;|-餐饮行业</option>
<option value='31' >&nbsp;&nbsp;|-经营管理</option>
</select>
<input name="Submit2" type="image" value="搜索" src="/diguo/skin/default/images/search.gif" />　
[<a href="/diguo/e/DoInfo/ChangeClass.php?mid=8" target="_blank">发布信息</a>]</td>
</tr>
</table>
</form></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>地区导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	<tr>
		<td width="33%"><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=东城区">东城区</a></td>
		<td width="33%"><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=西城区">西城区</a></td>
		<td width="33%"><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=通州区">通州区</a></td>
	</tr>
	<tr>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=崇文区">崇文区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=宣武区">宣武区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=大兴区">大兴区</a></td>
	</tr>
	<tr>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" /><a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=朝阳区">&nbsp;朝阳区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=海淀区">海淀区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=昌平区">昌平区</a></td>
	</tr>
	<tr>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=丰台区">丰台区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=石景山区">石景山区</a></td>
		<td><img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo.php?classid=9&ph=1&myarea=其它">其它</a></td>
	</tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>分类导航</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="4" cellspacing="0">
  <tr>
    <td bgcolor="#EEF1F4">&nbsp;<img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo/?classid=10"><strong>房屋信息</strong></a></td>
  </tr> 
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=11">房屋求租</a></td>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=12">房屋出租</a></td>
  		<td width="33%"><a href="/diguo/e/action/ListInfo/?classid=15">办公用房</a></td>
  </tr>
  <tr>
    <td><a href="/diguo/e/action/ListInfo/?classid=13">房屋求购</a></td>
    <td><a href="/diguo/e/action/ListInfo/?classid=14">房屋出售</a></td>
  		<td><a href="/diguo/e/action/ListInfo/?classid=16">旺铺门面</a></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo/?classid=17"><strong>跳蚤市场</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=18">电脑配件</a></td>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=19">电器数码</a></td>
  		<td width="33%"><a href="/diguo/e/action/ListInfo/?classid=21">居家用品</a></td>
  </tr>
  <tr>
    <td><a href="/diguo/e/action/ListInfo/?classid=20">通讯产品</a></td>
    <td><a href="/diguo/e/action/ListInfo/?classid=21"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo/?classid=22"><strong>同城生活</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=23">本地新闻</a></td>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=24">购物打折</a></td>
  		<td width="33%"><a href="/diguo/e/action/ListInfo/?classid=26">便民告示</a></td>
  </tr>
  <tr>
    <td><a href="/diguo/e/action/ListInfo/?classid=25">旅游活动</a></td>
    <td>&nbsp;</td>
  		<td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#EEF1F4">
  <tr>
    <td>&nbsp;<img src="/diguo/e/data/images/msgnav.gif" width="5" height="5" />&nbsp;<a href="/diguo/e/action/ListInfo/?classid=27"><strong>求职招聘</strong></a></td>
  </tr>
</table>
<table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=28">工程技术</a></td>
    <td width="33%"><a href="/diguo/e/action/ListInfo/?classid=29">财务会计</a></td>
  		<td width="33%"><a href="/diguo/e/action/ListInfo/?classid=31">经营管理</a></td>
  </tr>
  <tr>
    <td><a href="/diguo/e/action/ListInfo/?classid=30">餐饮行业</a></td>
    <td><a href="/diguo/e/action/ListInfo/?classid=31"></a></td>
  		<td>&nbsp;</td>
  </tr>
</table></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
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
</body>
</html>