<?php
declare(strict_types=1);

/*
 * @url https://www.codewars.com/kata/5324945e2ece5e1f32000370
 */

namespace Codewars\Kata\kyu4;

use function array_reduce;
use function ltrim;
use function str_pad;
use function strlen;
use const STR_PAD_LEFT;

final class TrainSumStringsAsNumbers
{
    function sum_strings(string $a, string $b): string {
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

            return ltrim($result, '0');
        };

        return array_reduce([ $a ], $sum, $b);
    }
}
