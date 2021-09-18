<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests;

use Codewars\Kata\TrainBouncingBalls;
use PHPUnit\Framework\TestCase;

final class TrainBouncingBallsTest extends TestCase
{
    private function sut(): TrainBouncingBalls
    {
        return new TrainBouncingBalls();
    }
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics() {
        $sut = $this->sut();
        $this->revTest($sut->bouncingBall(30.0, 0.66, 1.5), 15);
        $this->revTest($sut->bouncingBall(3.0, 0.66, 1.5) , 3);
        $this->revTest($sut->bouncingBall(10, 0.6, 10), -1);
    }
}
