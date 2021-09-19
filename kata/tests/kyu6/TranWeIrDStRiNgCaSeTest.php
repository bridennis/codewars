<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu6;

use Codewars\Kata\kyu6\TranWeIrDStRiNgCaSe;
use PHPUnit\Framework\TestCase;

class TranWeIrDStRiNgCaSeTest extends TestCase
{
    public function testWeirdCaseConverter() {
        $sut = new TranWeIrDStRiNgCaSe();
        $this->assertEquals('HeLlO WoRlD FoO BaR BaZ', $sut->toWeirdCase('Hello world foo bar baz'));
        $this->assertEquals('WeLl I GuEsS YoU PaSsEd', $sut->toWeirdCase('wEll i GuesS you passed'));
    }
}
