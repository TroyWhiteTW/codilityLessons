<?php

function solution($A)
{
    $C = count($A);
    $min = null;
    $profit = 0;
    for ($i = 0; $i < $C; $i++) {
        if ($min === null) {
            $min = $A[$i];
        continue;
    }
        $min = $A[$i] < $min ? $A[$i] : $min;
        $temp = $A[$i] - $min;
        $profit = $temp > $profit ? $temp : $profit;
    }
    return $profit;
}

var_dump(solution([23171, 21011, 21123, 21366, 21013, 21367]));