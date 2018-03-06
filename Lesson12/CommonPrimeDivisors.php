<?php

function solution($A, $B)
{
    function findPrimeDivisors($x)
    {
        $primeDivisors = [];
        if ($x % 2 == 0) {
            $primeDivisors[] = 2;
        }
        while ($x % 2 == 0) {
            $x = $x / 2;
        }

        for ($i = 3; $i <= $x; $i += 2) {
            if ($x % $i == 0) {
                $primeDivisors[] = $i;
            }
            while ($x % $i == 0) {
                $x = $x / $i;
            }
        }
//        var_dump($primeDivisors);
        return $primeDivisors;
    }

    $matchArray = $A;
    foreach ($B as $item) {
        $matchArray[] = $item;
    }
//    var_dump($matchArray);
    $matchArray = array_unique($matchArray);
//    var_dump($matchArray);
    $table = [];
    foreach ($matchArray as $item) {
        $table[$item] = findPrimeDivisors($item);
    }

    $answer = 0;
    foreach ($A as $k => $v) {
        if ($v == $B[$k]) {
            $answer++;
            continue;
        }
        if ($table[$v] == $table[$B[$k]]) {
            $answer++;
        }
//        if (findPrimeDivisors($v) == findPrimeDivisors($B[$k])) {
//            $answer++;
//        }
    }

    return $answer;
}

//var_dump(solution([15, 10, 3], [75, 30, 5]));
var_dump(solution([15, 10, 9], [75, 30, 5]));
//var_dump(solution([6059, 551], [442307, 303601]));