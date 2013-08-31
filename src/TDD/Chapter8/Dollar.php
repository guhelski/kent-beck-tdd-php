<?php

namespace TDD\Chapter8;

class Dollar extends Money
{	
	public function __construct($amount)
	{
		$this->amount = $amount;
	}

	public function times($multiplier)
	{
		return new Dollar($this->amount * $multiplier); 
	}
}