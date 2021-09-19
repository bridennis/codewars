<?php
declare(strict_types=1);

namespace Codewars\Kata\kyu6;

final class TrainBuildTower
{
    function tower_builder(int $n): array {
        $tower = [];

        $length = $n * 2 - 1;
        for ($i = 1; $i <= $n; $i++) {
            $tower[] = str_pad(str_repeat('*', $i * 2 - 1), $length, ' ', STR_PAD_BOTH);
        }

        return $tower;
    }
}
