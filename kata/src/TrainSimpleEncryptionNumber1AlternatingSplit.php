<?php

/*
 * @url https://www.codewars.com/kata/simple-encryption-number-1-alternating-split/train/php
 */

class TrainSimpleEncryptionNumber1AlternatingSplit
{
    public static function encrypt($text, $n) {
        if ($n > 0 && $text != null && !empty($text)) {
            $max = strlen($text);
            while ($n--) {
                $bStr = '';
                $eStr = '';
                for ($i = 0; $i < $max; $i++) {
                    if (($i + 1) % 2 == 0) {
                        $bStr .= $text{$i};
                    } else {
                        $eStr .= $text{$i};
                    }
                }
                $text = $bStr . $eStr;
            }
        }
        return $text;
    }

    public static function decrypt($text, $n) {
        if ($n > 0 && $text != null && !empty($text)) {
            $max = strlen($text) / 2;
            while ($n--) {
                $bStr = substr($text, $max);
                $eStr = substr($text, 0, $max);
                $text = '';
                for ($i = 0; $i < $max; $i++) {
                    $text .= $bStr{$i};
                    if ($i < strlen($eStr)) {
                        $text .= $eStr{$i};
                    }
                }
            }
        }
        return $text;
    }
}