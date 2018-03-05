<?php

function solution($A, $B)
{
    function isPrime($x)
    {
        $sqrtX = sqrt($x);
        $t = 0;
        for ($i = 1; $i <= $sqrtX; $i++) {
            if ($x % $i == 0) {
                $t += 2;
                if ($t > 2) {
                    return false;
                }
            }
        }
        if ($t == 2) {
            return true;
        }
        return false;
    }

    function findPrimeDivisors($x)
    {
        $sqrtX = sqrt($x);
        $temp = [];
        for ($i = 1; $i <= $sqrtX; $i++) {
            if ($x % $i == 0) {
                $temp[] = $i;
                $temp[] = $x / $i;
            }
        }
        array_unique($temp);
        $temp2 = [];
        foreach ($temp as $item) {
            if (isPrime($item) == true) {
                $temp2[] = $item;
            }
        }
//        if ($x == 5) {
//            var_dump($temp2);
//        }
        return $temp2;
    }

    $matchArray = $A;
    foreach ($B as $item) {
        $matchArray[] = $item;
    }
    array_unique($matchArray);

    $table = [];
    foreach ($matchArray as $item) {
        $table[$item] = findPrimeDivisors($item);
    }
//    var_dump($table);
    $answer = 0;
    foreach ($A as $k => $v) {
//        if ($k == 0) {
//            var_dump($table[$v]);
//            var_dump($table[$B[$k]]);
//        }
//        var_dump(empty($table[$v]));
        if ($table[$v] == $table[$B[$k]]) {
            $answer++;

//            var_dump($v);
//            var_dump($B[$k]);
        }
    }

    return $answer;
}

//var_dump(solution([15, 10, 3], [75, 30, 5]));
var_dump(solution([15, 10, 9], [75, 30, 5]));