<?php
declare(strict_types=1);

/*
 * @url https://www.codewars.com/kata/5279f6fe5ab7f447890006a7/train/php
 */

namespace Codewars\Kata\kyu5;

use function sizeof;

final class TrainPickPeaks
{
    function pickPeaks(array $arr): array {
        $res = ['pos' => [], 'peaks' => []];
        if (sizeof($arr) < 2) {
            return $res;
        }

        $prev = $arr[0];
        $upPos = 0;
        for ($i = 1; $i < sizeof($arr); $i++) {
            if ($prev < $arr[$i]) {
                $upPos = $i;
            } else if ($upPos && $prev > $arr[$i]) {
                $res['pos'][] = $upPos;
                $res['peaks'][] = $arr[$upPos];
                $upPos = 0;
            }

            $prev = $arr[$i];
        }

        return $res;
    }
}
