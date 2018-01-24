<?php

function solution($N)
{
    $factors = 0;
    $c = sqrt($N);//開根號
    for ($i = 1; $i <= $c; $i++) {
        if ($N % $i === 0) {
            if ($N / $i === $i) {
                $factors++;
            } else {
                $factors += 2;
            }
        }
    }

    return $factors;
}

var_dump(solution(30));