<?php

namespace TDD\Chapter4;

class Chapter4Test extends \PHPUnit_Framework_TestCase
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
    }
}