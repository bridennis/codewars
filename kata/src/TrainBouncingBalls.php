<?php
namespace Codewars\Kata;

class TrainBouncingBalls
{
    function bouncingBall($h, $bounce, $window) {
        if ($h <= 0 || $bounce <= 0.0 || $bounce >= 1 || $window >= $h) return -1;

        $bouncing = 1;
        while (($h *= $bounce) > $window) $bouncing += 2;

        return $bouncing;
    }
}
