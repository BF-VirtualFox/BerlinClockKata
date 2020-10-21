<?php

require("BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    private $clock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clock = new BerlinClock();
    }

    private function minute(int $int){
        return $this->clock->minute($int);
    }

    public function test_minute_given1_returnY(){
        $actual = $this->minute(1);

        $this->assertEquals("Y", $actual);
    }

    public function test_minute_given2_returnYY(){
        $actual = $this->minute(2);

        $this->assertEquals("YY", $actual);
    }

    public function test_minute_given3_returnYYY(){
        $actual = $this->minute(3);

        $this->assertEquals("YYY", $actual);
    }

    public function test_minute_given4_returnYYYY(){
        $actual = $this->minute(4);

        $this->assertEquals("YYYY", $actual);
    }
}
