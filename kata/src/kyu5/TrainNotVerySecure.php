<?php
declare(strict_types=1);

/*
 * @url https://www.codewars.com/kata/526dbd6c8c0eb53254000110
 */

namespace Codewars\Kata\kyu5;

use function preg_match;

final class TrainNotVerySecure
{
    public function alphanumeric(string $s): bool {
        return (bool) preg_match('/^[\w\d]+$/', $s);
    }
}
