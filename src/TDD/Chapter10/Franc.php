<?php

namespace TDD\Chapter10;

class Franc extends Money
{
    public function __construct($amount, $currency)
    {
        parent::__construct($amount, $currency);
    }
}
