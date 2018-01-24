<?php

function solution($N)
{
    $binary = preg_split('//', base_convert($N, 10, 2), -1, PREG_SPLIT_NO_EMPTY);
    $c = count($binary);
    $binaryGap = 0;
    $maxGap = 0;
    for ($i = 0; $i < $c; $i++) {
        switch ($binary[$i]) {
            case '0':
                $binaryGap++;
                break;
            case '1':
                if ($binaryGap > $maxGap) {
                    $maxGap = $binaryGap;
                }
                $binaryGap = 0;
                break;
        }
    }

    return $maxGap;
}

var_dump(solution(1041));