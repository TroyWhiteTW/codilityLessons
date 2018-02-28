<?php

function solution($A)
{
    $c = count($A);
    $peaks = [];
    $peaks[] = false;
    for ($i = 1; $i < $c - 1; $i++) {
        if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
            $peaks[] = true;
        } else {
            $peaks[] = false;
        }
    }
    $peaks[] = false;

    $temp = [];

    return $temp;
}

var_dump(solution([1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2]));