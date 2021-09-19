<?php
declare(strict_types=1);

namespace Codewars\Kata\kyu6;

use function implode;
use function mb_strtolower;
use function mb_strtoupper;
use function str_split;

final class TranWeIrDStRiNgCaSe
{
    function toWeirdCase(string $string): string {
        $weirdCase = [];

        $even = false;
        foreach (str_split($string, 1) as $char) {
            $weirdCase[] = $even ? mb_strtolower($char) : mb_strtoupper($char);
            $even = !($char === ' ') && !$even;
        }

        return implode('', $weirdCase);
    }
}
