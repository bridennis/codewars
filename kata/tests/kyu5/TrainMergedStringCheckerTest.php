<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu5;

use Codewars\Kata\kyu5\TrainMergedStringChecker;
use PHPUnit\Framework\TestCase;

class TrainMergedStringCheckerTest extends TestCase
{
    public function testSampleTestCase() {
        $sut = new TrainMergedStringChecker();
        $this->assertEquals(true, $sut->isMerge('codewars', 'code', 'wars'));
        $this->assertEquals(true, $sut->isMerge('codewars', 'cdw', 'oears'));
        $this->assertEquals(false, $sut->isMerge('codewars', 'cod', 'wars'));
        $this->assertEquals(false, $sut->isMerge('codewars', 'code', 'warss'));
        $this->assertEquals(true, $sut->isMerge('Bananas from Bahamas', 'Bahas', 'Bananas from am'));
        $this->assertEquals(true, $sut->isMerge("double letters", "dbletrs", "oue lte"));
        $this->assertEquals(true, $sut->isMerge("aabbbbccccccdd", "abbcccd", "abbcccd"));
    }
}
