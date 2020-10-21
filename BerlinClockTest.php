<?php

require("BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    public function test_minute_given1_returnYellow(){
        $clock = new BerlinClock();

        $actual = $clock->minute(1);

        $this->assertEquals("Y", $actual);

    }
}
