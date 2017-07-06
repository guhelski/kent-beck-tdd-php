<?php

namespace TDD\Chapter10;

class Dollar extends Money
{   
    
    /**
     * Instantiate the Dollar class with an amount value
     * 
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
