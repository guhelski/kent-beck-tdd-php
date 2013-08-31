<?php

namespace TDD\Chapter7;

class Money
{
    protected $amount;

    public function equals(Money $object)
    {
        $money = $object;
        // Maybe theres a better way to check than get_class?
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}