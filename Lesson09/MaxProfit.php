<?php

function solution($A)
{
    $C = count($A);
    $min = $A[0];
    $profit = 0;
    for ($i = 1; $i < $C; $i++) {
        $min = $A[$i] < $min ? $A[$i] : $min;
        $temp = $A[$i] - $min;
        $profit = $temp > $profit ? $temp : $profit;
    }
    return $profit;
}

var_dump(solution([23171, 21011, 21123, 21366, 21013, 21367]));