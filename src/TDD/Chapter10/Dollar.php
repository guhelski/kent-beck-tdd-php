<?php

namespace TDD\Chapter10;

class Dollar extends Money
{	
	public function __construct($amount, $currency)
	{
	    parent::__construct($amount, $currency);
	}
}
