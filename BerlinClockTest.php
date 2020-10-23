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
        return $this->clock->countMinutes($int);
    }

    public function test_countMinutes_given0_returnNNNN(){
        $actual = $this->minute(0);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutes_given1_returnYNNN(){
        $actual = $this->minute(1);

        $this->assertEquals("YNNN", $actual);
    }

    public function test_countMinutes_given2_returnYYNN(){
        $actual = $this->minute(2);

        $this->assertEquals("YYNN", $actual);
    }

    public function test_countMinutes_given3_returnYYYN(){
        $actual = $this->minute(3);

        $this->assertEquals("YYYN", $actual);
    }

    public function test_countMinutes_given4_returnYYYY(){
        $actual = $this->minute(4);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countMinutes_given5_returnNNNN(){
        $actual = $this->minute(5);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutes_given6_returnYNNN(){
        $actual = $this->minute(6);

        $this->assertEquals("YNNN", $actual);
    }

    public function test_countMinutes_given7_returnYYNN(){
        $actual = $this->minute(7);

        $this->assertEquals("YYNN", $actual);
    }

    public function test_countMinutes_given8_returnYYYN(){
        $actual = $this->minute(8);

        $this->assertEquals("YYYN", $actual);
    }

    public function test_countMinutes_given9_returnYYYY(){
        $actual = $this->minute(9);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countMinutes_given10_returnNNNN(){
        $actual = $this->minute(10);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutesPer5_given0_returnNNNN(){
        $actual = $this->clock->countMinutesPer5(0);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutesPer5_given5_returnYNNN(){
        $actual = $this->clock->countMinutesPer5(5);

        $this->assertEquals("YNNN", $actual);
    }
}
