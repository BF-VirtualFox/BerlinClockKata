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

    public function test_minute_given0_returnNNNN(){
        $actual = $this->minute(0);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_minute_given1_returnYNNN(){
        $actual = $this->minute(1);

        $this->assertEquals("YNNN", $actual);
    }

    public function test_minute_given2_returnYYNN(){
        $actual = $this->minute(2);

        $this->assertEquals("YYNN", $actual);
    }

    public function test_minute_given3_returnYYYN(){
        $actual = $this->minute(3);

        $this->assertEquals("YYYN", $actual);
    }

    public function test_minute_given4_returnYYYY(){
        $actual = $this->minute(4);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_minute_given5_returnNNNN(){
        $actual = $this->minute(5);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_minute_given6_returnYNNN(){
        $actual = $this->minute(6);

        $this->assertEquals("YNNN", $actual);
    }
}
