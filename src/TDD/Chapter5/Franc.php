<?php

namespace TDD\Chapter5;

class Franc
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Franc($this->amount * $multiplier); 
    }

    public function equals(Franc $object)
    {
        $dollar = $object;
        return $this->amount == $dollar->amount; 
    }
}