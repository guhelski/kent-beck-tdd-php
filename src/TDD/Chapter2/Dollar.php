<?php

namespace TDD\Chapter2;

class Dollar
{
    /**
	 * @var int $amount	The monetary amount given to the dollar object
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
