<?php

namespace TDD\Chapter5;

class Chapter5Test extends \PHPUnit_Framework_TestCase
{

	/**
	 * Tests that the object $product's method amount returns the expected value
	 */
	public function testMultiplication()
	{
		$five = new Dollar(5);
		$this->assertEquals(new Dollar(10), $five->times(2));
		$this->assertEquals(new Dollar(15), $five->times(3));
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

	/**
	 * Same test as the original using Franc, rather than Dollar
	 */
	public function testFrancMultiplication()
	{
		$five = new Franc(5);
		$this->assertEquals(new Franc(10), $five->times(2));
		$this->assertEquals(new Franc(15), $five->times(3));
	}
}