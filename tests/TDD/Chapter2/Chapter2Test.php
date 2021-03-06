<?php

namespace TDD\Chapter2;

class Chapter2Test extends \PHPUnit_Framework_TestCase
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
}