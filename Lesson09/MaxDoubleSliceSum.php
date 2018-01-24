<?php

function solution($A)
{
    $res = 0;
    $left = [];
    $right = [];
    $C = count($A);

    $left[0] = 0;
    $right[$C - 1] = 0;

    for ($i = 1; $i < $C - 1; $i++) {
        $left[$i] = $left[$i - 1] + $A[$i] < 0 ? 0 : $left[$i - 1] + $A[$i];
    }

    for ($i = $C - 2; $i > 0; $i--) {
        $right[$i] = $right[$i + 1] + $A[$i] < 0 ? 0 : $right[$i + 1] + $A[$i];
    }

    for ($i = 1; $i < $C - 1; $i++) {
        $res = $left[$i - 1] + $right[$i + 1] > $res ? $left[$i - 1] + $right[$i + 1] : $res;
    }

    return $res;
}

var_dump(solution([3, 2, 6, -1, 4, 5, -1, 2]));