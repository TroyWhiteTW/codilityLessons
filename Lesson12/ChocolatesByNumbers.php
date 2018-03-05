<?php

function solution($N, $M)
{
    error_reporting(0);

//    if ($M == 1) {
//        return $N;
//    }
//    $answer = 0;
//    do {
//        $answer++;
//    } while (($M * $answer) % $N != 0);

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
}

var_dump(solution(10, 4));
//var_dump(solution(12, 21));
//var_dump(solution(2, 1));
