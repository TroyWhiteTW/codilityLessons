<?php

function solution($A)
{
    $C = count($A);
    $max = null;
    $temp = null;
    $max = $A[0];
    $temp = $A[0];
    for ($i = 1; $i < $C; $i++) {
        $temp += $A[$i];
        $temp = $A[$i] > $temp ? $A[$i] : $temp;
        $max = $temp > $max ? $temp : $max;
    }
    return $max;
}

var_dump(solution([1, 3, -5, 3, 7, 14, 29]));