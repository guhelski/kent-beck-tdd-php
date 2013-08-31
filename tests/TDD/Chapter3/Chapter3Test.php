<?php

namespace TDD\Chapter3;

class Chapter3Test extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
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