<?php

function solution($A)
{
    $c = count($A);
    $peaks = [];
    for ($i = 1; $i < $c - 1; $i++) {
        if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
            $peaks[$i] = true;
        }
    }
    $countPeaks = count($peaks);
    $max = 0;

    for ($flags = 1; $flags <= $countPeaks; $flags++) {
        $can = $flags - 1;
        $res = 1;
        reset($peaks);
        $last = key($peaks);
        foreach ($peaks as $k => $v) {
            if ($can != 0) {
                if ($k - $last >= $flags) {
                    $can--;
                    $last = $k;
                    $res++;
                }
            } else {
                break;
            }
        }
        if ($max >= $res) {
            break;
        } else {
            $max = $res;
        }
    }

    return $max;
}

var_dump(solution([1, 5, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2]));