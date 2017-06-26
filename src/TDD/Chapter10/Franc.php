<?php

namespace TDD\Chapter10;

class Franc extends Money
{

    /**
     * Instantiate the Franc class with an amount value
     * 
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
