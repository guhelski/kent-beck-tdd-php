<?php

namespace TDD\Chapter1;

class Chapter1Test extends TestCase 
{
	/**
	 * Tests that Dollar's public variable, $amount, is the same as the given amount
	 */
    public function testMultiplication() 
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}