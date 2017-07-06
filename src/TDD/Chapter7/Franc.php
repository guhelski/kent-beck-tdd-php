<?php

namespace TDD\Chapter7;

class Franc extends Money
{
    
    /**
     * Instantiate the Franc class with an amount value
     * 
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Takes a multipler to returns a new Franc object instantiated with the product of the $amount and the passed in $multiplier
     * 
     * @param int $multiplier
     * @return object Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier); 
    }

}