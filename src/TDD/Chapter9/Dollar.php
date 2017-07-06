<?php

namespace TDD\Chapter9;

class Dollar extends Money
{   
    
    /**
     * Instantiate the Dollar class with an amount value
     * 
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    /**
     * Takes a multipler to returns a new Dollar object instantiated with the product of the $amount and the passed in $multiplier
     * 
     * @param int $multiplier
     * @return object Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return Money::dollar($this->amount * $multiplier); 
    }
}
