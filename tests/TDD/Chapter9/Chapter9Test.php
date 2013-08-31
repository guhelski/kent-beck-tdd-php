<?php

namespace TDD\Chapter9;

class Chapter9Test extends \PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality()
    {
    	$fiveA = Money::dollar(5);
    	$fiveB = Money::dollar(5);
    	$this->assertTrue($fiveA->equals($fiveB));
    	$six = Money::dollar(6);
    	$this->assertFalse($fiveA->equals($six));

        $francFiveA = Money::franc(5);
        $francFiveB = Money::franc(5);
        $this->assertTrue($francFiveA->equals($francFiveB));
        $francSix = Money::franc(6);
        $this->assertFalse($francFiveA->equals($francSix));

        $this->assertFalse($fiveA->equals($francFiveA));
    }

    public function testFrancMultiplication()
    {
    	$five = Money::franc(5);
    	$this->assertEquals(Money::franc(10), $five->times(2));
    	$this->assertEquals(Money::franc(15), $five->times(3));
    }

	public function testCurrency()
	{
		$dollar = Money::dollar(1);
		$franc = Money::franc(1);

		$this->assertEquals("USD", $dollar->currency());
		$this->assertEquals("CHF", $franc->currency());
	}
}
