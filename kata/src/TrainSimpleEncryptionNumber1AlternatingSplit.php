<?php

/*
 * @url https://www.codewars.com/kata/simple-encryption-number-1-alternating-split/train/php
 */

namespace Codewars\Kata;

class TrainSimpleEncryptionNumber1AlternatingSplit
{
    public static function encrypt($text, $n)
    {
        if ($n > 0 && $text != null && !empty($text)) {
            $max = strlen($text);
            while ($n--) {
                $bStr = '';
                $eStr = '';
                for ($i = 0; $i < $max; $i++) {
                    if (($i + 1) % 2 == 0) {
                        $bStr .= $text[$i];
                    } else {
                        $eStr .= $text[$i];
                    }
                }
                $text = $bStr . $eStr;
            }
        }
        return $text;
    }

    public static function decrypt($text, $n)
    {
        if ($n > 0 && $text != null && !empty($text)) {
            $max = strlen($text) / 2;
            while ($n--) {
                $bStr = substr($text, $max);
                $eStr = substr($text, 0, $max);
                $text = '';
                for ($i = 0; $i < $max; $i++) {
                    $text .= $bStr[$i];
                    if ($i < strlen($eStr)) {
                        $text .= $eStr[$i];
                    }
                }
            }
        }
        return $text;
    }

    // --- Below are the Best Code Practices ---

    public static function bestPracticesEncrypt($text, $n)
    {
        if ($n <= 0) {
            return $text;
        }

        $result = $text;

        for ($i = 0; $i < $n; $i++) {
            $map  = str_split($result, 1);
            $even = array_filter(
                $map,
                function ($k) {
                    return ($k % 2 === 0);
                },
                ARRAY_FILTER_USE_KEY
            );
            $odd  = array_filter(
                $map,
                function ($k) {
                    return ($k % 2 !== 0);
                },
                ARRAY_FILTER_USE_KEY
            );

            $result = implode('', $odd) . implode('', $even);
        }

        return $result;
    }

    public static function bestPracticesDecrypt($text, $n)
    {
        if ($n <= 0) {
            return $text;
        }

        $result = $text;

        for ($i = 0; $i < $n; $i++) {
            $map  = str_split($result, 1);
            $even = array_slice($map, 0, floor(count($map) / 2));
            $odd  = array_slice($map, floor(count($map) / 2));

            $result = '';
            for ($x = 0; $x < count($map); $x++) {
                $result .= ($x % 2 === 0) ? array_shift($odd) : array_shift($even);
            }
        }

        return $result;
    }
}
