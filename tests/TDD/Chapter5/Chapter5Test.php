<?php

namespace TDD\Chapter5;

class Chapter5Test extends \PHPUnit_Framework_TestCase
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

	public function testFrancMultiplication()
	{
		$five = new Franc(5);
		$this->assertEquals(new Franc(10), $five->times(2));
		$this->assertEquals(new Franc(15), $five->times(3));
	}
}