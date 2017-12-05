<?php

	$url = 'https://www.qiushibaike.com/article/118914171';
$ch = curl_init();
curl_setopt($ch, CURLOPT_FILE, fopen('php://stdout', 'w'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
$html = curl_exec($ch); 
curl_close($ch);

// create document object model
$dom = new DOMDocument();
// load html into document object model
@$dom->loadHTML($html);
// create domxpath instance
$xPath = new DOMXPath($dom);

// get all elements with a particular id and then loop through and print the href attribute
$elements = $xPath->query('//*[@id="single-next-link"]/div[2]/img');
foreach ($elements as $e) {
  echo ($e->nodeValue);
}


function dump($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}