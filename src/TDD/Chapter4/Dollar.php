<?php

namespace TDD\Chapter4;

class Dollar
{
	private $amount;

	public function __construct($amount)
	{
		$this->amount = $amount;
	}

	public function times($multiplier)
	{
		return new Dollar($this->amount * $multiplier); 
	}

	public function equals(Dollar $object)
	{
		$dollar = $object;
		return $this->amount == $dollar->amount; 
	}
}