<?php
declare(strict_types=1);

/*
 * @url https://www.codewars.com/kata/54c9fcad28ec4c6e680011aa
 */

namespace Codewars\Kata\kyu5;

use function strlen;
use function substr;

final class TrainMergedStringChecker
{
    function isMerge($s, $part1, $part2): bool {
        if (strlen($s) !== strlen($part1) + strlen($part2)) {
            return false;
        }

        $pointer1 = $pointer2 = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $pointer1IsValid = $pointer1 < strlen($part1);
            $pointer2IsValid = $pointer2 < strlen($part2);

            if (
                $pointer1IsValid && $pointer2IsValid
                && $part1[ $pointer1 ] === $part2[ $pointer2 ]
                && $s[ $i ] === $part1[ $pointer1 ]
                && $s[ $i ] === $part2[ $pointer2 ]
            ) {
                $s = substr($s, $i + 1);

                $newPart1 = substr($part1, $pointer1 + 1);
                $newPart2 = substr($part2, $pointer2);
                if ($this->isMerge($s, $newPart1, $newPart2)) {
                    return true;
                }

                $newPart1 = substr($part1, $pointer1);
                $newPart2 = substr($part2, $pointer2 + 1);
                return $this->isMerge($s, $newPart1, $newPart2);
            }

            if ($pointer1IsValid && $s[ $i ] === $part1[ $pointer1 ]) {
                $pointer1++;
                continue;
            }

            if ($pointer2IsValid && $s[ $i ] === $part2[ $pointer2 ]) {
                $pointer2++;
                continue;
            }

            return false;
        }

        return true;
    }
}
