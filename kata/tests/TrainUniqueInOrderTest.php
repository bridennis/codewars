<?php

use PHPUnit\Framework\TestCase;

class TrainUniqueInOrderTest extends TestCase
{

    public function testUniqueInOrder()
    {
        $this->assertEquals(['A', 'B', 'C', 'D', 'A', 'B'], TrainUniqueInOrder::uniqueInOrder('AAAABBBCCDAABBB'));
        $this->assertEquals([1,2,3], TrainUniqueInOrder::uniqueInOrder([1,2,2,3,3]));
        $this->assertEquals([], TrainUniqueInOrder::uniqueInOrder(''));
        $this->assertEquals([], TrainUniqueInOrder::uniqueInOrder([]));
    }
}
