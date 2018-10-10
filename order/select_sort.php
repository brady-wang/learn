<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/10/10
 * Time: 10:22
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * @author brady
 * @param $arr 待排序的数组
 * @param string $sort 排序顺序 asc升序 desc降序
 * @time  2018/10/10
 * 每一轮比较都可以确定一个位置，对于N个数，比较N-1轮可以确定N个位置上的数，因为确定了N-1个位置，最后一个位置也就确定了
 */
function select_sort($arr,$sort='asc')
{
    $len = count($arr);
    for($i=0;$i<$len-1;$i++){ // 外层循环 循环n-1次
        $min_position = $i; //定义最小位置为当前外层循环的最后一个
        for($j=$i+1;$j<$len;$j++){ //内层循环每次从外层要比较的下一个元素开始 找到最小的一个元素的位置,

            if($sort == 'asc'){
                if($arr[$j] < $arr[$min_position]){
                    $min_position = $j;
                }

            } else {
                if($arr[$j] > $arr[$min_position]){
                    $min_position = $j;
                }
            }

        }


        //循环结束 交换$arr[$i]和最小位置的值 如果两者位置不相等
        echo "第".($i+1)."轮循环找到最小的值".$arr[$min_position]."和位置".$i."的".$arr[$i]."进行交换 交换前".json_encode($arr);
        if($i != $min_position){

            $temp = $arr[$i];
            $arr[$i] = $arr[$min_position];
            $arr[$min_position] = $temp;

        }
        echo json_encode($arr).    "<hr>";


    }
    return $arr;
}

$arr = [8,7,4,5,6,3,2,1];
echo "排序前".json_encode($arr)."<hr>";
$res = select_sort($arr,'desc');
echo "排序后".json_encode($res);