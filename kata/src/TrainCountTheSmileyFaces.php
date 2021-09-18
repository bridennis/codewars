<?php

/*
 * @url https://www.codewars.com/kata/count-the-smiley-faces/train/php
 */

namespace Codewars\Kata;

class TrainCountTheSmileyFaces
{
    public static function countSmileys($arr) : int
    {
        $count = 0;
        foreach ($arr as $item) {
            if (preg_match('/^[:;][-~]?[\)D]$/', $item)) {
                $count++;
            }
        }
        return $count;
    }

    // --- Below are the Best Code Practices ---

    public static function bestPracticesCountSmileys($arr): int
    {
        return preg_match_all("/[:;][-~]?[\)D]/", implode(",", $arr));
    }
}
