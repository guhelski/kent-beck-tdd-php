<?php

namespace TDD\Chapter5;

class Franc
{
    /**
     * @var int $amount The monetary amount given to the Franc object
     */
    private $amount;

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

    /**
     * Take a Franc object and returns a boolean if the passed in Franc's $amount matches the self $amount
     * @todo remove redundant renaming of $object to $franc
     * @todo capitalize $dollar for better readability to show it is an object
     * 
     * @param Franc $object
     * @return bool
     */
    public function equals(Franc $object): bool
    {
        $franc = $object;

        return $this->amount == $franc->amount;
    }
}