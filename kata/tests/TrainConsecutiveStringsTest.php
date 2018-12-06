<?php

namespace codewars\kata\test;

use codewars\kata\TrainConsecutiveStrings;
use PHPUnit\Framework\TestCase;

class TrainConsecutiveStringsTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testLongestConsec()
    {
        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["zone", "abigail", "theta", "form", "libe", "zas"],
            2
        ), "abigailtheta");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"],
            1
        ), "oocccffuucccjjjkkkjyyyeehh");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["aaa", "bbbb", "cccc", "ddddd"],
            3
        ), "dddddbbbbcccc");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["wlwsasphmxxowiaxujylentrklctozmymu"],
            1
        ), "wlwsasphmxxowiaxujylentrklctozmymu");

        $this->revTest(TrainConsecutiveStrings::longestConsec([], 3), "");
    }
}
