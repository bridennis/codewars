<?php

/*
 * @url https://www.codewars.com/kata/count-the-smiley-faces/train/php
 */

class TrainCountTheSmileyFaces
{
    public static function count_smileys($arr): int {
        $count = 0;
        foreach ($arr as $item) {
            if (preg_match('/^[:;][-~]?[\)D]$/', $item)) {
                $count++;
            }
        }
        return $count;
    }
}