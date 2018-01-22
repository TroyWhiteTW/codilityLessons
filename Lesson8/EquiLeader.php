<?php

function solution($A)
{
    $C = count($A);
    $countArrElem = array_count_values($A);
    arsort($countArrElem);
    reset($countArrElem);
    $most = key($countArrElem);//最多重複的值
    $num = current($countArrElem);//最多重複數量
    $temp = 0;//現在 有幾個 最多重複的數字
    $res = 0;
    for ($i = 0; $i < $C; $i++) {
        if ($A[$i] == $most) {
            $temp++;
        }
        if ($temp > ($i + 1) / 2 && ($num - $temp) > ($C - $i - 1) / 2) {
            $res++;
        }
    }
    return $res;
}

var_dump(solution([4, 3, 4, 4, 4, 2]));