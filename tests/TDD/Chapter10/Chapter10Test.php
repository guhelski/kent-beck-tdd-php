<?php

namespace TDD\Chapter10;

class Chapter10Test extends \PHPUnit_Framework_TestCase
{

    /**
     * Calls abstract class Money and creates a Dollar object via the static function dollar()
     * Tests that the initially created Dollar object's $amount is equal to the amount after it has bee given to the times() method 
     */
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    /**
     * Calls the abstract class Money and returns the currency type definied by the static method
     * This test:
     *      Identifies if two objects are the same
     *      Identifies if two objects are not the same
     *      Identifies if the currencies being compared are the same
     */ 
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

    /**
     * Calls abstract class Money and creates a Franc object via the static function franc()
     * Tests that the initially created Franc object's $amount is equal to the amount after it has bee given to the times() method 
     */
    public function testFrancMultiplication()
    {
    	$five = Money::franc(5);
    	$this->assertEquals(Money::franc(10), $five->times(2));
    	$this->assertEquals(Money::franc(15), $five->times(3));
    }

    /**
     * Creates two types of currencies and tests that their $currency types are correct
     */
	public function testCurrency()
	{
	    $dollar = Money::dollar(1);
	    $franc = Money::franc(1);

        $this->assertEquals("USD", $dollar->currency());
	    $this->assertEquals("CHF", $franc->currency());
    }

    /**
     * Tests if the two objects have the same $currency type
     */
    public function testDifferentClassEquality()
    {
        $money = new Money(10, "CHF");
        $this->assertTrue($money->equals(new Franc(10, "CHF")));
    }
}
