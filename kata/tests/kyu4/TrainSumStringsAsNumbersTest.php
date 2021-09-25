<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu4;

use Codewars\Kata\kyu4\TrainSumStringsAsNumbers;
use PHPUnit\Framework\TestCase;

class TrainSumStringsAsNumbersTest extends TestCase
{
    public function testExamples() {
        $sut = new TrainSumStringsAsNumbers();
        $this->assertSame('579', $sut->sum_strings('123', '456'));
        $this->assertSame('80', $sut->sum_strings('024', '056'));
    }
}
