<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu5;

use Codewars\Kata\kyu5\TrainPickPeaks;
use PHPUnit\Framework\TestCase;

class TrainPickPeaksTest extends TestCase
{
    public function testItFindsPeaks(): void
    {
        $sut = new TrainPickPeaks();

        $this->assertEquals(['pos' => [3], 'peaks' => [5]],
            $sut->pickPeaks([0, 1, 2, 5, 1, 0]));
        $this->assertEquals(['pos' => [1], 'peaks' => [2]],
            $sut->pickPeaks([1, 2, 2, 2, 1]));
        $this->assertEquals(['pos' => [3, 7], 'peaks' => [6, 3]],
            $sut->pickPeaks([3, 2, 3, 6, 4, 1, 2, 3, 2, 1, 2, 3]));
    }
}