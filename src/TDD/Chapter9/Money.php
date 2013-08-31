<?php

namespace TDD\Chapter9;

abstract class Money
{
    protected $amount;
    protected $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    static function dollar($amount) {
        return new Dollar($amount, "USD");
    }

    static function franc($amount) {
        return new Franc($amount, "CHF");
    }

    abstract function times($multiplier);

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }

    public function currency()
    {
        return $this->currency;
    }
}
