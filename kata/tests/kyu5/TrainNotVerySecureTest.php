<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu5;

use Codewars\Kata\kyu5\TrainNotVerySecure;
use PHPUnit\Framework\TestCase;

final class TrainNotVerySecureTest extends TestCase
{
    public function testExamples() {
        $sut = new TrainNotVerySecure();
        $this->assertTrue($sut->alphanumeric('Mazinkaiser'));
        $this->assertFalse($sut->alphanumeric('hello world_'));
        $this->assertTrue($sut->alphanumeric('PassW0rd'));
        $this->assertFalse($sut->alphanumeric('     '));
        $this->assertFalse($sut->alphanumeric(''));
    }
}
