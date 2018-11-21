<?php

/*
 * @url https://www.codewars.com/kata/unique-in-order/train/php
 */

class TrainUniqueInOrder
{
    public static function uniqueInOrder($iterable){
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
}