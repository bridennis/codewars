<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu5;

use Codewars\Kata\kyu5\TrainWhereMyAnagramsAt;
use Codewars\Kata\kyu6\TrainBouncingBalls;
use PHPUnit\Framework\TestCase;

class TrainWhereMyAnagramsAtTest extends TestCase
{
    private function sut(): TrainWhereMyAnagramsAt
    {
        return new TrainWhereMyAnagramsAt();
    }

    public function testBasics()
    {
        $sut = $this->sut();
        $this->assertEquals(['a'], $sut->anagrams('a', ['a', 'b', 'c', 'd']));
        $this->assertEquals(
            ['carer', 'arcre', 'carre'],
            $sut->anagrams(
                'racer',
                ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']
            )
        );
        $this->assertEquals(
            ['aabb', 'bbaa'],
            $sut->anagrams(
                'abba',
                ['aabb', 'abcd', 'bbaa', 'dada']
            ),
            'Your function should work for an example provided in the Kata Description'
        );
        $this->assertEquals(
            ['carer', 'racer'],
            $sut->anagrams(
                'racer',
                ['crazer', 'carer', 'racar', 'caers', 'racer']),
            'Your function should work for an example provided in the Kata Description'
        );
        $this->assertEquals(
            [],
            $sut->anagrams('laser', ['lazing', 'lazy', 'lacer']),
            'Your function should work for an example provided in the Kata Description'
        );
    }

    public function testBestPractice()
    {
        $sut = new TrainWhereMyAnagramsAt();
        $this->assertEquals(['a'], $sut->bestPracticeAnagrams('a', ['a', 'b', 'c', 'd']));
        $this->assertEquals(
            ['carer', 'arcre', 'carre'],
            $sut->bestPracticeAnagrams(
                'racer',
                ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']
            )
        );
        $this->assertEquals(
            ['aabb', 'bbaa'],
            $sut->bestPracticeAnagrams(
                'abba',
                ['aabb', 'abcd', 'bbaa', 'dada']
            ),
            'Your function should work for an example provided in the Kata Description'
        );
        $this->assertEquals(
            ['carer', 'racer'],
            $sut->bestPracticeAnagrams(
                'racer',
                ['crazer', 'carer', 'racar', 'caers', 'racer']),
            'Your function should work for an example provided in the Kata Description'
        );
        $this->assertEquals(
            [],
            $sut->bestPracticeAnagrams('laser', ['lazing', 'lazy', 'lacer']),
            'Your function should work for an example provided in the Kata Description'
        );
    }
}
