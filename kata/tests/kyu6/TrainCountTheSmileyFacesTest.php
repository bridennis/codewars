<?php
declare(strict_types=1);

namespace Codewars\Kata\Tests\kyu6;

use Codewars\Kata\kyu6\TrainCountTheSmileyFaces;
use PHPUnit\Framework\TestCase;

class TrainCountTheSmileyFacesTest extends TestCase
{

    public function testCountSmileys()
    {
        $this->assertEquals(0, TrainCountTheSmileyFaces::countSmileys([]));
        $this->assertEquals(4, TrainCountTheSmileyFaces::countSmileys([':D',':~)',';~D',':)']));
        $this->assertEquals(2, TrainCountTheSmileyFaces::countSmileys([':)',':(',':D',':O',':;']));
        $this->assertEquals(1, TrainCountTheSmileyFaces::countSmileys([';]', ':[', ';*', ':$', ';-D']));
        $this->assertEquals(2, TrainCountTheSmileyFaces::countSmileys([':)', ';(', ';}', ':-D']));
        $this->assertEquals(3, TrainCountTheSmileyFaces::countSmileys([';D', ':-(', ':-)', ';~)']));
    }
}
