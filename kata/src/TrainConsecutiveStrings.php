<?php

/*
 * @url https://www.codewars.com/kata/consecutive-strings/train/php
 */

namespace codewars\kata;

class TrainConsecutiveStrings
{
    public static function longestConsec($strarr, $k)
    {
        $n = count($strarr);
        if ($n == 0 || $k > $n || $k <= 0) {
            return '';
        }

        $firstLongestIdx = 0;
        foreach ($strarr as $key => $item) {
            if (strlen($item) > strlen($strarr[$firstLongestIdx])) {
                $firstLongestIdx = $key;
            }
        }

        $lStr = implode(
            '',
            array_slice($strarr, $firstLongestIdx - $k + 1 <= 0 ? 0 : $firstLongestIdx - $k + 1, $k)
        );
        $rStr = implode('', array_slice($strarr, $firstLongestIdx, $k));

        return strlen($lStr) >= strlen($rStr) ? $lStr : $rStr;
    }
}
