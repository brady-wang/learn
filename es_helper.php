<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/4/8
 * Time: 10:31
 * esticsearch helper
 */

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;



class es_helper
{
    protected $db_name;
    protected $tb_name;
    protected $client;

    //初始化
    public function __construct($db_name,$tb_name)
    {

        try{
            $this->db_name = $db_name;
            $this->tb_name = $tb_name;
            $this->client =  ClientBuilder::create()->build();
        } catch(Exception $e){
            $msg = $e->getMessage();
            echo json_encode(['success'=>false,'msg'=>$msg]);exit;
        }
    }

    public function init_params()
    {
        return [
            'index'=>$this->db_name, //索引：数据库
            'type'=>$this->tb_name ,// 类型：数据表
        ];

    }



}