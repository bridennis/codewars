<?php

/*
 * @url https://www.codewars.com/kata/5544c7a5cb454edb3c000047/train/php
 */

namespace Codewars\Kata\kyu6;

class TrainBouncingBalls
{
    function bouncingBall($h, $bounce, $window) {
        if ($h <= 0 || $bounce <= 0.0 || $bounce >= 1 || $window >= $h) return -1;

        $bouncing = 1;
        while (($h *= $bounce) > $window) $bouncing += 2;

        return $bouncing;
    }
}
