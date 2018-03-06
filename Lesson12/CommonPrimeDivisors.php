<?php

function solution($A, $B)
{
    function findPrimeDivisors($x)
    {
        $r = 1;
        if ($x % 2 == 0) {
            $r *= 2;
        }
        while ($x % 2 == 0) {
            $x = $x / 2;
        }

        for ($i = 3; $i <= $x; $i += 2) {
            if ($x % $i == 0) {
                $r *= $i;
            }
            while ($x % $i == 0) {
                $x = $x / $i;
            }
        }

        return $r;
    }

    $table = [];
    foreach ($A as $k => $v) {
        if ($v == $B[$k]) {
            continue;
        }

        if ($v > $B[$k]) {
            $x = $v;
            $y = $B[$k];
        } else {
            $x = $B[$k];
            $y = $v;
        }

        if ($x % $y == 0) {
            $z = $x / $y;
        } else {
            $z = $x * $y;
        }

        if ($table[$z] == null) {
            $table[$z] = findPrimeDivisors($z);
        }

    }

    $answer = 0;
    foreach ($A as $k => $v) {
        if ($v == $B[$k]) {
            $answer++;
            continue;
        }

        if ($v > $B[$k]) {
            $x = $v;
            $y = $B[$k];
        } else {
            $x = $B[$k];
            $y = $v;
        }

        if ($x % $y == 0) {
            $z = $x / $y;
        } else {
            $z = $x * $y;
        }

//        $t = findPrimeDivisors($z);
        $t = $table[$z];

        if ($x % $t == 0 && $y % $t == 0) {
            $answer++;
        }

    }

    return $answer;
}

//var_dump(solution([15, 10, 3], [75, 30, 5]));
var_dump(solution([15, 10, 9], [75, 30, 5]));
//var_dump(solution([6059, 551], [442307, 303601]));