<?php

namespace TDD\Chapter7;

class Chapter7Test extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality()
    {
    	$fiveA = new Dollar(5);
    	$fiveB = new Dollar(5);
    	$this->assertTrue($fiveA->equals($fiveB));
    	$six = new Dollar(6);
    	$this->assertFalse($fiveA->equals($six));

        $francFiveA = new Franc(5);
        $francFiveB = new Franc(5);
        $this->assertTrue($francFiveA->equals($francFiveB));
        $francSix = new Franc(6);
        $this->assertFalse($francFiveA->equals($francSix));

        $this->assertFalse($fiveA->equals($francFiveA));
    }

    public function testFrancMultiplication()
    {
    	$five = new Franc(5);
    	$this->assertEquals(new Franc(10), $five->times(2));
    	$this->assertEquals(new Franc(15), $five->times(3));
    }
}