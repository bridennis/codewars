<?php
declare(strict_types=1);

/*
 * @url https://www.codewars.com/kata/55911ef14065454c75000062
 */

namespace Codewars\Kata\kyu4;

use function array_reduce;
use function ltrim;
use function str_pad;
use function strlen;
use const STR_PAD_LEFT;

final class TrainMultiplyingNumbersAsStrings
{
    function multiply(string $a, string $b): string {
        $sum = function (string $carry, string $number): string {
            if (strlen($number) < strlen($carry)) {
                $number = str_pad($number, strlen($carry), '0', STR_PAD_LEFT);
            } else {
                $carry = str_pad($carry, strlen($number), '0', STR_PAD_LEFT);
            }

            $result = '';
            $quotient = 0;
            for ($i = strlen($carry) - 1; $i >= 0; $i--) {
                $sum = $carry[ $i ] + $number[ $i ] + $quotient;
                $quotient = (int) ($sum / 10);
                $result = $sum % 10 . $result;
            }

            if ($quotient) {
                $result = $quotient . $result;
            }

            return $result;
        };

        $multiply = function (string $carry, string $number): string {
            $result = '';
            $quotient = 0;
            for ($i = strlen($carry) - 1; $i >= 0; $i--) {
                $product = $carry[ $i ] * $number + $quotient;
                $quotient = (int) ($product / 10);
                $result = $product % 10 . $result;
            }

            if ($quotient) {
                $result = $quotient . $result;
            }

            return $result;
        };

        $a = ltrim($a, '0');
        $b = ltrim($b, '0');

        $result = '0';
        $iteration = 0;
        for ($i = strlen($b) - 1; $i >= 0; $i--) {
            $product = array_reduce([ $b[ $i ] ], $multiply, $a);
            $product = str_pad($product, strlen($product) + $iteration, '0');

            $result = array_reduce([ $result ], $sum, $product);
            $iteration++;
        }

        return $result;
    }
}
