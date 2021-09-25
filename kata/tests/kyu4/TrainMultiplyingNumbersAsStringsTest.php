<?php

namespace Codewars\Kata\Tests\kyu4;

use Codewars\Kata\kyu4\TrainMultiplyingNumbersAsStrings;
use PHPUnit\Framework\TestCase;

class TrainMultiplyingNumbersAsStringsTest extends TestCase
{
    public function testSimpleExamples() {
        $sut = new TrainMultiplyingNumbersAsStrings();
        $this->assertEquals("6", $sut->multiply("2", "3"));
        $this->assertEquals("2070", $sut->multiply("30", "69"));
        $this->assertEquals("935", $sut->multiply("11", "85"));
    }

    public function testCornerExamples() {
        $sut = new TrainMultiplyingNumbersAsStrings();
        $this->assertEquals("0", $sut->multiply("2", "0"));
        $this->assertEquals("0", $sut->multiply("0", "30"));
        $this->assertEquals("3", $sut->multiply("0000001", "3"));
        $this->assertEquals("3027", $sut->multiply("1009", "03"));
    }

    public function testBigExamples() {
        $sut = new TrainMultiplyingNumbersAsStrings();
        $this->assertEquals("5619135910", $sut->multiply("98765", "56894"));
        $this->assertEquals("2830869077153280552556547081187254342445169156730", $sut->multiply("1020303004875647366210", "2774537626200857473632627613"));
        $this->assertEquals("444625839871840560024489175424316205566214109298", $sut->multiply("58608473622772837728372827", "7586374672263726736374"));
        $this->assertEquals("81129638414606663681390495662081", $sut->multiply("9007199254740991", "9007199254740991"));
    }
}
