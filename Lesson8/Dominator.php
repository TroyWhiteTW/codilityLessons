<?php

function solution($A)
{
    $C = count($A);
    $temp = array_count_values($A);
    arsort($temp);
    $c = array_slice(array_values($temp), 0, 1, true)[0];
    if ($c > $C / 2) {
        return array_keys($A, array_slice(array_keys($temp), 0, 1, true)[0])[0];
    } else {
        return -1;
    }

}

var_dump(solution([3, 4, 3, 2, 3, -1, 3, 3]));