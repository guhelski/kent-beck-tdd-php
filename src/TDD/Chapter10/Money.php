<?php

namespace TDD\Chapter10;

class Money
{

    /**
     * @var int $amount         The monetary amount given to the Money object
     */
    protected $amount;

    /**
     * @var string $currency    The standardized prefix given to any currency
     */
    protected $currency;

    /**
     * Immediately defines the $amount value and type of $currency
     * 
     * @var int $amount
     * @var string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Creates a new Money object with the $amount value and $currency set
     * @var int $amount
     * @return object Money
     */
    static function dollar(int $amount)
    {
        return new Money($amount, "USD");
    }

    /**
     * Creates a new Money object with the $amount value and $currency set
     * @var int $amount
     * @return object Money
     */
    static function franc(int $amount)
    {
        return new Money($amount, "CHF");
    }

    /**
     * Creates a new Money object from the current amount multiplied by the given $multiplier
     * @var int $multiplier
     * @return object Money
     */
    public function times(int $multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * Take a Money object and returns a boolean if the passed in Money's $amount matches the self $amount and if the current object's $currency type matches the passed in object's $currency
     * @todo remove redundant renaming of $object to $money
     * @todo capitalize $money for better readability to show it is an object
     * 
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;
        return $this->amount == $money->amount && self::currency() == $money->currency;
    }

    /**
     * Returns the object's protected $currency type
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

    // Not really useful here, just for completeness
    public function __toString()
    {
        return $this->amount . " " . $this->currency;
    }
}