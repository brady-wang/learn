<?php
header("content-type:text/html;charset=utf-8");
	$url = "http://www.gushiwen.org/";

	$content = ' <div class="content">若把《这些.......》换成   几经年华   会不会    </div>
';
	$content = file_get_contents($url);
	$res = preg_match('/<div class="contson" id="contson73295">(.*)/',$content,$matches);
	echo "<pre>";
	var_dump($matches);
	echo "</pre>";