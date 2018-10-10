<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/10/10
 * Time: 11:33
 */


/**
 * @author brady
 * @desc 快速插入排序
 * @param $arr 待排序的数组
 * @param string $sort asc升序 desc降序
 * @time  2018/10/10
 */
function quick_sort($arr,$sort='asc')
{
    echo json_encode($arr);
    echo "<hr>";
    //递归出口:数组长度为1，直接返回数组
    $length=count($arr);
    if($length<=1) return $arr;
    //数组元素有多个,则定义两个空数组
    $left=$right=array();
    //使用for循环进行遍历，把第一个元素当做比较的对象
    for($i=1;$i<$length;$i++)
    {
        //判断当前元素的大小
        if($sort == 'asc'){
            if($arr[$i]<$arr[0]){
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        } else {
            if($arr[$i] > $arr[0]){
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        }

    }
    //递归调用

    $left=quick_sort($left,$sort);
    $right=quick_sort($right,$sort);

    //将所有的结果合并
    return array_merge($left,array($arr[0]),$right);
}

/**
 * @author brady
 * @desc 快速插入排序
 * @param $arr 待排序的数组
 * @param string $sort asc升序 desc降序
 * @time  2018/10/10
 */
function quick_sort2($arr,$sort='asc')
{
    $a = $arr;
    // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
    if (count($a) <= 1) {
        return $a;
    }

    $middle = $a[0]; // 中间值

    $left = array(); // 接收小于中间值
    $right = array();// 接收大于中间值

    // 循环比较
    for ($i=1; $i < count($a); $i++) {

        if ($middle < $a[$i]) {

            // 大于中间值
            $right[] = $a[$i];
        } else {

            // 小于中间值
            $left[] = $a[$i];
        }
    }

    // 递归排序划分好的2边
    $left = quick_sort($left);
    $right = quick_sort($right);

    // 合并排序后的数据，别忘了合并中间值
    return array_merge($left, array($middle), $right);
}

$arr=array(6,3,8,6,4,2,9,5,1);
//调用
echo "<pre>";
print_r($arr);
print_r(quick_sort2($arr,'desc'));