<?php

namespace TDD\Chapter10;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    static function dollar($amount) {
        return new Money($amount, "USD");
    }

    static function franc($amount) {
        return new Money($amount, "CHF");
    }

    public function times($multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function equals(Money $object)
    {
        $money = $object;
        return $this->amount == $money->amount && self::currency() == $money->currency;
    }

    public function currency()
    {
        return $this->currency;
    }

    // Not really useful here, just for completeness
    public function __toString()
    {
        return $this->amount . " " . $this->currency;
    }
}
