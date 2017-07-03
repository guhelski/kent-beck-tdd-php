<?php

namespace TDD\Chapter4;

class Dollar
{
	/**
     * @var int $amount The monetary amount given to the dollar object
     */
	private $amount;

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

	/**
     * Take a Dollar object and returns a boolean if the passed in Dollar's $amount matches the self $amount
     * @todo remove redundant renaming of $object to $dollar
     * @todo capitalize $dollar for better readability to show it is an object
     * 
     * @param Dollar $object
     * @return bool
     */
	public function equals(Dollar $object): bool
	{
		$dollar = $object;
		return $this->amount == $dollar->amount; 
	}
}