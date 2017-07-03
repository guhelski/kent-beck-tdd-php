<?php

namespace TDD\Chapter6;

abstract class Money
{

    /**
     * @var int $amount The monetary amount given to the Money object
     */
    protected $amount;

    /**
     * Take a Money object and returns a boolean if the passed in Money's $amount matches the self $amount
     * @todo remove redundant renaming of $object to $money
     * @todo capitalize $money for better readability to show it is an object
     * 
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;

        return $this->amount == $money->amount;
    }
}