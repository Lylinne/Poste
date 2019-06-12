<?php

use \PHPUnit\Framework\TestCase;

require "hamming.php";

class DistanceTest extends TestCase
{
    public function testNoDifference()
    {
        $this->assertEquals(0, distance('A', 'A'));
    }

    public function testNoDifference1()
    {
        $this->assertEquals(1, distance('B', 'C'));
    }

    public function testNoDifference2()
    {
        $this->assertEquals(2 , distance('AB', 'CD'));
    }

    public function testNoDifference3()
    {
        $this->assertEquals(1, distance('AT', 'BT'));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage(("DNA strands must be of equal length."),
        distance('GGACG', 'AGGACGTGG'));
    }
}