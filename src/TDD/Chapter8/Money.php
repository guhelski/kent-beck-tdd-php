<?php

namespace TDD\Chapter8;

abstract class Money
{
    protected $amount;

    static function dollar($amount) {
        return new Dollar($amount);
    }

    static function franc($amount) {
        return new Franc($amount);
    }

    abstract function times($multiplier);

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}