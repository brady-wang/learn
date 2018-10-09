<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/10/9
 * Time: 18:02
 */

/**
 * @author brady
 * @desc 冒泡排序法
 * 对于一个长度为N的数组，我们需要排序 N-1 轮，每 i 轮 要比较 N-i 次
 * @param $arr 排序数组
 * @param $sort 升序 asc 降序 desc
 */
function bubble_sort($arr,$sort='asc')
{
    $count = count($arr);

    //控制外层循环
    for($i = 0; $i<$count - 1 ; $i++){
        for($j = 0;$j<$count-1-$i;$j++){
            if($sort == 'asc'){
                if($arr[$j] > $arr[$j+1]){
                    //交换两个的值
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            } else {
                if($arr[$j] < $arr[$j+1]){
                    //交换两个的值
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }

            echo "第".$i."轮排序的 第".$j.'次排序后'.json_encode($arr);
            echo '<br>';
        }
        echo '<hr>';
    }

    return $arr;
}
$arr = [1,9,3,2,4,6];
$res = bubble_sort($arr,'asc');
echo "<pre>";
print_r($res);
echo "</pre>";