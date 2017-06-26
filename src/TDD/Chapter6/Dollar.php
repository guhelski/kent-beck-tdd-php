<?php

namespace TDD\Chapter6;

class Dollar extends Money
{	
	
	/**
     * Instantiate the Dollar class with an amount value
     * 
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

	/**
     * Takes a multipler to returns a new Dollar object instantiated with the product of the $amount and the passed in $multiplier
     * 
     * @param int $multiplier
     * @return object Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}