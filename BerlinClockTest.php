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

    private function countMinutes(int $int){
        return $this->clock->countMinutes($int);
    }

    private function countMinutesPer5(int $int){
        return $this->clock->countMinutesPer5($int);
    }

    public function test_countMinutes_given0_returnNNNN(){
        $actual = $this->countMinutes(0);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutes_given1_returnYNNN(){
        $actual = $this->countMinutes(1);

        $this->assertEquals("YNNN", $actual);
    }

    public function test_countMinutes_given2_returnYYNN(){
        $actual = $this->countMinutes(2);

        $this->assertEquals("YYNN", $actual);
    }

    public function test_countMinutes_given3_returnYYYN(){
        $actual = $this->countMinutes(3);

        $this->assertEquals("YYYN", $actual);
    }

    public function test_countMinutes_given4_returnYYYY(){
        $actual = $this->countMinutes(4);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countMinutes_given5_returnNNNN(){
        $actual = $this->countMinutes(5);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutes_given6_returnYNNN(){
        $actual = $this->countMinutes(6);

        $this->assertEquals("YNNN", $actual);
    }

    public function test_countMinutes_given7_returnYYNN(){
        $actual = $this->countMinutes(7);

        $this->assertEquals("YYNN", $actual);
    }

    public function test_countMinutes_given8_returnYYYN(){
        $actual = $this->countMinutes(8);

        $this->assertEquals("YYYN", $actual);
    }

    public function test_countMinutes_given9_returnYYYY(){
        $actual = $this->countMinutes(9);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_countMinutes_given10_returnNNNN(){
        $actual = $this->countMinutes(10);

        $this->assertEquals("NNNN", $actual);
    }

    public function test_countMinutesPer5_given0_returnNNNNNNNNNNN(){
        $actual = $this->countMinutesPer5(0);

        $this->assertEquals("NNNNNNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given5_returnYNNNNNNNNNN(){
        $actual = $this->countMinutesPer5(5);

        $this->assertEquals("YNNNNNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given10_returnYYNNNNNNNNN(){
        $actual = $this->countMinutesPer5(10);

        $this->assertEquals("YYNNNNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given15_returnYYRNNNNNNNN(){
        $actual = $this->countMinutesPer5(15);

        $this->assertEquals("YYRNNNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given20_returnYYRYNNNNNNN(){
        $actual = $this->countMinutesPer5(20);

        $this->assertEquals("YYRYNNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given25_returnYYRYYNNNNNN(){
        $actual = $this->countMinutesPer5(25);

        $this->assertEquals("YYRYYNNNNNN", $actual);
    }

    public function test_countMinutesPer5_given30_returnYYRYYRNNNNN(){
        $actual = $this->countMinutesPer5(30);

        $this->assertEquals("YYRYYRNNNNN", $actual);
    }

    public function test_random_countMinutesPer5_given44_returnYYRYYRYYNNN(){
        $actual = $this->countMinutesPer5(44);

        $this->assertEquals("YYRYYRYYNNN", $actual);
    }
}
