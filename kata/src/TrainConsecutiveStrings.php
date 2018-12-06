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

        $lengthArr = [];
        foreach ($strarr as $key => $item) {
            $lengthArr[$item] = strlen($item);
        }

        $tmp = [];
        $i = 0;
        foreach ($lengthArr as $key => $value) {
            $tmp[] = [$i++, $key, $value];
        }
        uasort($tmp, function ($a, $b) {
            return $a[2] == $b[2] ? ($a[0] - $b[0]) : ($a[2] < $b[2] ? 1 : -1);
        });
        $lengthArr = [];
        foreach ($tmp as $val) {
            $lengthArr[$val[1]] = $val[2];
        }

        return implode('', array_slice(array_keys($lengthArr), 0, $k));
    }
}
