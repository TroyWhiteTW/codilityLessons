<?php

function solution($N)
{
    $perimeter = 0;
    $c = sqrt($N);//開根號
    for ($i = 1; $i <= $c; $i++) {
        if ($N % $i == 0) {
            $perimeter = $i * 2 + ($N / $i) * 2;
        }
    }

    return $perimeter;
}

var_dump(solution(30));