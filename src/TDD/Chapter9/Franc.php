<?php

namespace TDD\Chapter9;

class Franc extends Money
{
    
    /**
     * Instantiate the Franc class with an amount value
     * 
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    /**
     * Takes a multipler to returns a new Franc object instantiated with the product of the $amount and the passed in $multiplier
     * 
     * @param int $multiplier
     * @return object Franc
     */
    public function times(int $multiplier): Franc
    {
        return Money::franc($this->amount * $multiplier); 
    }
}
