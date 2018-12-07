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
            ["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"],
            2
        ), "abigailtheta");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"],
            1
        ), "oocccffuucccjjjkkkjyyyeehh");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["aaa", "bbbb", "cccc", "ddddd"],
            3
        ), "bbbbccccddddd");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["wkppv", "ixoyx", "3452", "zzzzzzzzzzzz"],
            3
        ), "ixoyx3452zzzzzzzzzzzz");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["wzogzvmmzsbnmmnprmkdc", "jwuivjxdkgnvuquovcgginewyuavgpnaaqqnmzkzetozdblpajutetushblzp", "bkbnmdxptgpgxrgpxkgbwxn"],
            2
        ), "jwuivjxdkgnvuquovcgginewyuavgpnaaqqnmzkzetozdblpajutetushblzpbkbnmdxptgpgxrgpxkgbwxn");

//: 'jwuivjxdkgnvuquovcgginewyuavgpnaaqqnmzkzetozdblpajutetushblzp bkbnmdxptgpgxrgpxkgbwxn'
//: 'wzogzvmmzsbnmmnprmkdc jwuivjxdkgnvuquovcgginewyuavgpnaaqqnmzkzetozdblpajutetushblzp'

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["jyteenapx", "bqkjcppxbjqvncclqkjmdfhmtjwcwbxmkgibcbygeakdaunmysmxnxpdminmzbbqdzjcukniplhuaxbojhrplotjxuyxoyzbooxcfbfpkisrnfrjrieyfvoggqgiaclnclovmhvktqnftmfqfxcqcowvabdvzjvwmhozaqktins", "tjauejttjq"],
            2
        ), "bqkjcppxbjqvncclqkjmdfhmtjwcwbxmkgibcbygeakdaunmysmxnxpdminmzbbqdzjcukniplhuaxbojhrplotjxuyxoyzbooxcfbfpkisrnfrjrieyfvoggqgiaclnclovmhvktqnftmfqfxcqcowvabdvzjvwmhozaqktinstjauejttjq");
//: 'bqkjcppxbjqvncclqkjmdfhmtjwcwbxmkgibcbygeakdaunmysmxnxpdminmzbbqdzjcukniplhuaxbojhrplotjxuyxoyzbooxcfbfpkisrnfrjrieyfvoggqgiaclnclovmhvktqnftmfqfxcqcowvabdvzjvwmhozaqktins tjauejttjq'
//: 'jyteenapx bqkjcppxbjqvncclqkjmdfhmtjwcwbxmkgibcbygeakdaunmysmxnxpdminmzbbqdzjcukniplhuaxbojhrplotjxuyxoyzbooxcfbfpkisrnfrjrieyfvoggqgiaclnclovmhvktqnftmfqfxcqcowvabdvzjvwmhozaqktins'


//        Expected: 'ekparrvtzfvgckivjbxvonkwovdxzojhmyxyjinuhrmvtnsnmuujqaeaetgzvipevoctfltsqugfxosnmtntdesjngfmrrwytdgqjlynalyrwbqhhhtsbkvaklictemojvasrcteoojfcpuxomtngzyhtpzthreujbouhhvgcpqcwdxzjnhzdrstwgqjqfzitppljnuqhsnriydrhnthnqdlmvqkvgmeotpmqucfsqkrmllqoewsfuuzrqineflionbwruwdwozdnhfmmqlcmgtoafspshjammoqiodlwjtlzyrfjhwizxqkogdeyzznsniapkmdrlesppipjelabupwmylcoyhptvewkkdrudfvucjrquqnmmegndbjahrmgefznojhawzydqihiovwliyphwnbphrue bhqvsemphue'
//Actual  : 'vbyrubobzo ekparrvtzfvgckivjbxvonkwovdxzojhmyxyjinuhrmvtnsnmuujqaeaetgzvipevoctfltsqugfxosnmtntdesjngfmrrwytdgqjlynalyrwbqhhhtsbkvaklictemojvasrcteoojfcpuxomtngzyhtpzthreujbouhhvgcpqcwdxzjnhzdrstwgqjqfzitppljnuqhsnriydrhnthnqdlmvqkvgmeotpmqucfsqkrmllqoewsfuuzrqineflionbwruwdwozdnhfmmqlcmgtoafspshjammoqiodlwjtlzyrfjhwizxqkogdeyzznsniapkmdrlesppipjelabupwmylcoyhptvewkkdrudfvucjrquqnmmegndbjahrmgefznojhawzydqihiovwliyphwnbphrue'

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["wlwsasphmxx","owiaxujylentrklctozmymu","wpgozvxxiu"],
            2
        ), "wlwsasphmxxowiaxujylentrklctozmymu");

        $this->revTest(TrainConsecutiveStrings::longestConsec(
            ["boat", "shoes", "boat", "shoe"],
            2
        ), "boatshoes");

        $this->revTest(TrainConsecutiveStrings::longestConsec([], 3), "");
    }
}
