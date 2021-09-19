<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu6;

use Codewars\Kata\kyu6\TrainBuildTower;
use PHPUnit\Framework\TestCase;

class TrainBuildTowerTest extends TestCase
{
    public function testBaseCase() {
        $sut = new TrainBuildTower();
        $this->assertEquals(['*'], $sut->tower_builder(1));
    }

    public function testDescriptionExamples() {
        $sut = new TrainBuildTower();
        $this->assertEquals([
            '  *  ',
            ' *** ',
            '*****'
        ], $sut->tower_builder(3));

        $this->assertEquals([
            '     *     ',
            '    ***    ',
            '   *****   ',
            '  *******  ',
            ' ********* ',
            '***********'
        ], $sut->tower_builder(6));
    }
}
