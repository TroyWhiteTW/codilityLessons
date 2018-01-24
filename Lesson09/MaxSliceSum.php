<?php

function solution($A)
{
    $C = count($A);
    $max = null;
    $temp = null;
    for ($i = 0; $i < $C; $i++) {
        if ($i == 0) {
            $max = $A[$i];
            $temp = $A[$i];
            continue;
        }
        $temp += $A[$i];
        $temp = $A[$i] > $temp ? $A[$i] : $temp;
        $max = $temp > $max ? $temp : $max;
    }
    return $max;
}

var_dump(solution([1, 3, -5, 3, 7, 14, 29]));