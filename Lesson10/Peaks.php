<?php

function solution($A)
{
    error_reporting(0);
    $c = count($A);
    $squrtC = sqrt($c);
    $peaks = [];
    $countPeaks = 0;
    $peaks[-1] = $countPeaks;
    $peaks[0] = $countPeaks;
    for ($i = 1; $i < $c - 1; $i++) {
        if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
            $countPeaks++;
            $peaks[$i] = $countPeaks;
        } else {
            $peaks[$i] = $countPeaks;
        }
    }
    $peaks[] = $countPeaks;
    $divs = [1];
    for ($i = 2; $i <= $squrtC; $i++) {
        if ($c % $i == 0) {
            $divs[] = $i;
            $divs[] = $c / $i;
        }
    }
    sort($divs);

    $answer = 0;
    $countDivs = count($divs);
    $flag = true;
    for ($i = 0; $i < $countDivs; $i++) {
        $interval = $c / $divs[$i];
        for ($j = 1; $j <= $divs[$i]; $j++) {
            if ($peaks[$j * $interval - 1] - $peaks[(($j - 1) * $interval) - 1] == 0) {
                $flag = false;
            }
        }
        if ($flag) {
            $answer = $divs[$i];
        }
        $flag = true;
    }

    return $answer;
}

var_dump(solution([1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2]));