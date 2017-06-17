<?php

namespace TDD\Chapter1;

class Dollar
{
    
    /**
     * @var int $amount The monetary amount given to the dollar object
     */
    public $amount;

    /**
     * Instantiate the dollar class with an amount value
     * 
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Takes a multipler to set the product of itself and the public $amount variable
     * 
     * @param int $multiplier
     */
    public function times(int $multiplier)
    {
        $this->amount *= $multiplier;
    }
}
