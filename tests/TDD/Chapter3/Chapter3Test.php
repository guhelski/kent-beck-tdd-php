<?php

namespace TDD\Chapter3;

class Chapter3Test extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests that the object $product's method amount returns the expected value
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    /**
     * Using Dollar's method equal, this tests that both objects are equal to another returning a true
     */
    public function testEquality()
    {
        $fiveA = new Dollar(5);
        $fiveB = new Dollar(5);
        $this->assertTrue($fiveA->equals($fiveB));

        $six = new Dollar(6);
        $this->assertFalse($fiveA->equals($six));
    }
}