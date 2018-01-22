<?php

function solution($S)
{
    $strArray = str_split($S);
    $c = count($strArray);
    $temp = [];
    for ($i = 0; $i < $c; $i++) {
        switch ($strArray[$i]) {
            case '(':
                $temp[] = $strArray[$i];
                break;
            case ')':
                $x = array_pop($temp);
                if ($x === null) {
                    return 0;
                }
                break;
        }
    }
    return count($temp) === 0 ? 1 : 0;
}

var_dump(solution('(()(())())'));
var_dump(solution('())'));