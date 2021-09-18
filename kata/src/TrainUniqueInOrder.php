<?php

/*
 * @url https://www.codewars.com/kata/unique-in-order/train/php
 */

namespace Codewars\Kata;

class TrainUniqueInOrder
{
    public static function uniqueInOrder($iterable)
    {
        $ret = [];
        if (is_string($iterable)) {
            $iterable = empty($iterable) ? [] : str_split($iterable);
        }
        foreach ($iterable as $value) {
            if ($value !== end($ret)) {
                $ret[] = $value;
            }
        }
        return $ret;
    }

    // --- Below are the Best Code Practices ---

    public static function bestPracticesUniqueInOrder($iterable)
    {
        $arr = is_string($iterable) ? str_split($iterable) : $iterable;
        $ret = array_reduce(
            $arr,
            function ($carry, $item) {
                if ($item != end($carry)) {
                    $carry[] = $item;
                }
                return $carry;
            },
            []
        );

        return $ret;
    }
}
