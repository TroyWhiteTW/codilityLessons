<?php

function solution($N, $M)
{
    error_reporting(0);

    $max = $N * $M;
    for ($i = 1; $i <= $max; $i++) {
        if (($N * $i) % $M == 0) {
            return ($N * $i) / $M;
        }
        if (($M * $i) % $N == 0) {
            return $i;
        }
    }
    return $max;

    // Ted 版本
//    function getFactor($num)
//    {
//        $factorArray = [];
//        for ($i = 2; $i <= $num; $i++) {
//            if ($num % $i == 0) {
//                $factorArray[] = $i;
//                $num /= $i;
//                $i = 1;
//            }
//        }
//        return $factorArray;
//    }
//
//    $factorM = getFactor($M);
//    foreach ($factorM as $k => $v) {
//        if ($N % $v == 0) {
//            $N /= $v;
//        }
//    }
//    return $N;
}

var_dump(solution(10, 4));
//var_dump(solution(12, 21));
//var_dump(solution(2, 1));
