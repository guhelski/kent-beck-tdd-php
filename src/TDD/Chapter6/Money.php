<?php

namespace TDD\Chapter6;

class Money
{
    protected $amount;

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount; 
    }
}