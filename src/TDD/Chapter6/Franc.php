<?php

namespace TDD\Chapter6;

class Franc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier); 
    }
}