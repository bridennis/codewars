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

        $res = '';
        for ($i = 0, $max = count($strarr); $i < $max; $i++) {
            $curStr = implode('', array_slice($strarr, $i, $k));
            if (strlen($curStr) > strlen($res)) {
                $res = $curStr;
            }
        }

        return $res;
    }

    // --- Below are the Best Code Practices ---

    function bestPracticesLongestConsec($strarr, $k) {
        $longest = '';
        if ($k > 0) {
            for ($i = 0; $i < count($strarr) - $k + 1; $i++) {
                $consecutive = implode('', array_slice($strarr, $i, $k));
                $longest = strlen($consecutive) > strlen($longest) ? $consecutive : $longest;
            }
        }
        return $longest;
    }
}
