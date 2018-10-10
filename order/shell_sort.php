<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2018/10/10
 * Time: 12:06
 */


/**
 * 希尔排序
 */
function shell_sort(array $arr){
    // 将$arr按升序排列
    echo $len = count($arr);
    $f = 3;// 定义因子
    $h = 1;// 最小为1
    while ($h < $len/$f){
        $h = $f*$h + 1; // 1, 4, 13, 40, 121, 364, 1093, ...
    }

    while ($h >= 1){  // 将数组变为h有序
        for ($i = $h; $i < $len; $i++){  // 将a[i]插入到a[i-h], a[i-2*h], a[i-3*h]... 之中 （算法的关键
            for ($j = $i; $j >= $h;  $j -= $h){
                if ($arr[$j] < $arr[$j-$h]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j-$h];
                    $arr[$j-$h] = $temp;
                }
                //echo json_encode($arr);echo '<br/>'; // 打开这行注释，可以看到每一步被替换的情形
            }
        }
        $h = intval($h/$f);
    }
    return $arr;
}

$arr = array(8, 9, 1, 4, 6, );
echo "排序前".json_encode($arr)."<hr>";

$shell = shell_sort($arr);

echo "排序后".json_encode($shell);

