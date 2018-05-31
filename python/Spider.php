<?php

/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/4/17
 * Time: 14:49
 */
class Spider
{
    public function __construct()
    {

    }

    //url管理器
    public function urls()
    {

    }

    //内容下载器
    public function downloader($url)
    {
        $data = $this->curl_get($url);
        return $data;
    }

    //内容解析器
    public function parser($data)
    {
        $author  = $this->get_author($data);
        $out_data = [];
        $out_data['author'] = !$this->get_author($data)?:$this->get_author($data);
        $out_data['content'] = !$this->get_content($data)?:$this->get_content($data);
        return $out_data;
    }

    public function get_author($data)
    {
        preg_match('/touch-user-name-a">(.*)<\/span>/',$data,$matches);
        if(!empty($matches)){
            return ($matches[1]);
        }else {
            return '';
        }
    }

    public function get_content($data)
    {
        $data = '<div class="content-text">
发小说夏天快到了，她要减肥，要穿的清凉，要吸引到一个男朋友，为此还特意办了卡去健身！！！<br>经过一段时间努力，她终于由假C罩成功瘦成B罩！

</div>';
        preg_match('/content-text">(.*)<\/div>/',$data,$matches);
        print_r($matches);
        if(!empty($matches)){
            return ($matches[1]);
        }else {
            return '';
        }
    }

    //保存输出器
    public function outputer($url, $path='images/')
    {
        $file = $this->curl_get($url);
        $filename = pathinfo($url, PATHINFO_BASENAME);
        $resource = fopen($path . $filename, 'a');
        fwrite($resource, $file);
        fclose($resource);
    }

    public  function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }


}