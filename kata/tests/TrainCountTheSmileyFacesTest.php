<?php

use PHPUnit\Framework\TestCase;

class TrainCountTheSmileyFacesTest extends TestCase
{

    public function testCount_smileys()
    {
        $this->assertEquals(0, TrainCountTheSmileyFaces::count_smileys([]));
        $this->assertEquals(4, TrainCountTheSmileyFaces::count_smileys([':D',':~)',';~D',':)']));
        $this->assertEquals(2, TrainCountTheSmileyFaces::count_smileys([':)',':(',':D',':O',':;']));
        $this->assertEquals(1, TrainCountTheSmileyFaces::count_smileys([';]', ':[', ';*', ':$', ';-D']));
        $this->assertEquals(2, TrainCountTheSmileyFaces::count_smileys([':)', ';(', ';}', ':-D']));
        $this->assertEquals(3, TrainCountTheSmileyFaces::count_smileys([';D', ':-(', ':-)', ';~)']));
    }
}
