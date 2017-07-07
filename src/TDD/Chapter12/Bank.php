<?php

namespace TDD\Chapter12;

class Bank
{
	/**
	 * Incomplete method
	 * 
	 * @param Expression $source
	 * @param string $to
	 * @return object Money
	 */
	public function reduce(Expression $source, string $to): Money 
	{
		return Money::dollar(10);
	}
}