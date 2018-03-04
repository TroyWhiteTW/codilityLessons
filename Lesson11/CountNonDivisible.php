<?php

function solution($A)
{
    error_reporting(0);
    $acvA = array_count_values($A);
    $cA = count($A);
    $temp = [];
    foreach ($acvA as $k => $v) {
        $temp[$k] = $cA - $acvA[1];
        if ($k == 1) continue;
        $temp[$k] -= $acvA[$k];
        $sqrtK = sqrt($k);
        for ($i = 2; $i <= $sqrtK; $i++) {
            if ($temp[$k] <= 0) {
                $temp[$k] = 0;
                break;
            }
            if ($k % $i == 0) {
                $temp[$k] -= $acvA[$i];
                $f = $k / $i;
                $temp[$k] -= $acvA[$f];
                if ($i == $f) {
                    $temp[$k] += $acvA[$f];
                }
            }
        }
    }
//    var_dump($acvA);
//    var_dump($temp);
    $res = [];
    foreach ($A as $k => $v) {
        $res[$k] = $temp[$v];
    }

    return $res;
}

var_dump(solution([3, 1, 2, 3, 6]));