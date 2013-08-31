<?php

namespace TDD\Chapter9;

class Dollar extends Money
{	
	public function __construct($amount, $currency)
	{
		parent::__construct($amount, $currency);
	}

	public function times($multiplier)
	{
		return Money::dollar($this->amount * $multiplier); 
	}
}
