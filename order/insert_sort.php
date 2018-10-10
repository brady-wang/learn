<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/10/10
 * Time: 9:26
 */

/**
 * @author brady
 * @desc 快速插入排序
 * @param $arr 待排序的数组
 * @param string $sort asc升序 desc降序
 * @time  2018/10/10
 * 就是从第二个元素开始，到最后一个元素都是这个需要排序的元素
 */
function insert_sort($arr,$sort='asc')
{
   $len = count($arr);
    for($i=1;$i<$len;$i++){ //外层循环 从第二个元素开始,到最后,是待插入的数组
        //如果是第二个元素 需要与$arr[0]比较 如果是第三个元素需要与$arr[0] $arr[1]比较  内层循环次数为$i-1次
        //从后往前找,如果发现循环的元素比待插入的元素大 那么往后移动一个位置 如果循环的元素比待插入的值小 交换位置
        $tmp = $arr[$i];
        for($j=$i-1;$j>=0;$j--){
            echo "排序前".json_encode($arr);
            echo "第".$i."次循环 插入数字".$tmp." 依次和有序的".$arr[$j].'对比';
            if($sort == 'asc'){
                if($arr[$j] > $tmp){
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                    echo "排序后".json_encode($arr)."<br>";
                } else {
                    break;
                }
            } else {
                if($arr[$j] < $tmp){
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $tmp;
                    echo "排序后".json_encode($arr)."<br>";
                } else {
                    break;
                }
            }

        }
        echo "<hr>";
    }
    return $arr;

}
$arr = [8,7,4,5,6,3,2,1];
$res = insert_sort($arr,'desc');
echo "<pre>";
print_r($res);
echo "</pre>";