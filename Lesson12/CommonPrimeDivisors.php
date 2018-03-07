<?php

function solution($A, $B)
{
    $answer = 0;

    foreach ($A as $k => $v) {

        // 這項判斷可有可無，對結果影響不大
        if ($v == $B[$k]) {
            $answer++;
            continue;
        }

        if (hasSamePrimeDivisors($v, $B[$k]) == true) {
            $answer++;
        }

    }

    return $answer;
}

// 找到任兩個數字的最大公因數
function findGreatestCommonDivisor($x, $y)
{
    if ($x % $y == 0) {
        return $y;
    }

    return findGreatestCommonDivisor($y, ($x % $y));
}

// 找出任兩個數字的所有質因數是否相同
function hasSamePrimeDivisors($x, $y)
{
    $gcd = findGreatestCommonDivisor($x, $y);// 兩數的最大公因數

    while ($x != 1) {
        $gcdX = findGreatestCommonDivisor($x, $gcd);// 找出 x 跟 gcd 的最大公因數
        if ($gcdX == 1) {
            break;
        }
        $x /= $gcdX;// 把 x 跟 gcd 的最大公因數從 x 中除掉(去除)後繼續找下去
    }

    if ($x != 1) {// 如果 x 不等於 1 代表這個數字不在兩數的最大公因數裡面，所以兩數的所有質因數必不相同
        return false;
    }

    while ($y != 1) {
        $gcdY = findGreatestCommonDivisor($y, $gcd);
        if ($gcdY == 1) {
            break;
        }
        $y /= $gcdY;
    }

//    if($y!=1){
//        return false;
//    }
//
//    return true;
    return $y == 1;// 前段註解的簡寫表達
}

//var_dump(solution([15, 10, 3], [75, 30, 5]));
var_dump(solution([15, 10, 9], [75, 30, 5]));
//var_dump(solution([6059, 551], [442307, 303601]));