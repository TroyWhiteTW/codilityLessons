<?php

function solution($N, $P, $Q)
{
    error_reporting(0);
    function isPrime($n)
    {
        $sqrtN = sqrt($n);
        $factor = 0;
        for ($i = 1; $i <= $sqrtN; $i++) {
            if ($n % $i == 0) {
                $factor += 2;
                if ($factor > 2) return false;
            }
        }
        if ($factor == 2) return true;
        return false;
    }

//    function findPrime($n)
//    {
//        $factor = [];
//        for ($i = 2; $i <= $n; $i++) {
//            if (isPrime($i) == true) {
//                $factor[] = $i;
//            }
//        }
//        return $factor;
//    }

    function isSemiprime($n)
    {
        //4, 6, 9, 10, 14, 15, 21, 22, 25, 26
        $sqrtN = sqrt($n);
        $k = 0;
        for ($i = 2; $i <= $sqrtN; $i++) {
            if ($n % $i == 0) {
                if (isPrime($i) == true && isPrime(($n / $i)) == true) $k += 2;
                if ($k > 2) return false;
            }
        }
        if ($k == 2) return true;
        return false;
    }

//    function countSemiprime($x, $y)
//    {
//        $k = 0;
//        for ($i = $x; $i <= $y; $i++) {
//            if (isSemiprime($i) == true) $k++;
//        }
//        return $k;
//    }

    $temp = [];
    $a = 0;
    for ($i = 1; $i <= $N; $i++) {
        if (isSemiprime($i) == true) {
            $a++;
        }
        $temp[$i] = $a;
    }

    $res = [];
    foreach ($P as $k => $v) {
        $res[$k] = $temp[$Q[$k]] - $temp[$v - 1];
    }

    return $res;
}

var_dump(solution(26, [1, 4, 16], [26, 10, 20]));