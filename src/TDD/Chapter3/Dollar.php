<?php

namespace TDD\Chapter3;

class Dollar
{
    public $amount;

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
