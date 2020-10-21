<?php

require("BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    public function test_minute_given1_returnYellow(){
        $clock = new BerlinClock();

        $actual = $clock->minute(1);

        $this->assertEquals("Y", $actual);

    }

    public function test_minute_given2_returnYellowYellow(){
        $clock = new BerlinClock();

        $actual = $clock->minute(2);

        $this->assertEquals("YY", $actual);

    }
}
