<?php

function solution($A, $B)
{
    $c = count($A);
    $temp = [];
    $res = 0;
    for ($i = 0; $i < $c; $i++) {
        switch ($B[$i]) {
            case 0:
                $eat = true;
                do {
                    $x = array_pop($temp);
                    if ($x == null) {
                        $res++;
                        $eat = false;
                        break;
                    }
                } while ($x < $A[$i]);
                if ($eat === true) {
                    array_push($temp, $x);
                }
                break;
            case 1:
                $temp[] = $A[$i];
                break;
        }
    }
    return $res + count($temp);
}

var_dump(solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0]));