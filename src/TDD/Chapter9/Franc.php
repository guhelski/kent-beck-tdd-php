<?php

namespace TDD\Chapter9;

class Franc extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier)
    {
        return Money::franc($this->amount * $multiplier); 
    }
}
