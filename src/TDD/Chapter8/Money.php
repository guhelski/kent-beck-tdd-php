<?php

namespace TDD\Chapter8;

abstract class Money
{

    /**
     * @var int $amount The monetary amount given to the Money object
     */
    protected $amount;

    /**
     * Gives ability to call dollar() and return a Dollar object without instantiating Money
     */
    static function dollar(int $amount): Dollar 
    {
        return new Dollar($amount);
    }

    /**
     * Gives ability to call franc() and return a Franc object without instantiating Money
     */
    static function franc(int $amount): Franc 
    {
        return new Franc($amount);
    }

    /**
     * Defines a times function which will be implementated in the children classes
     */
    abstract function times(int $multiplier);

    /**
     * Take a Money object and returns a boolean if the passed in Money's $amount matches the self $amount
     * @todo remove redundant renaming of $object to $money
     * @todo capitalize $money for better readability to show it is an object
     * @todo Beck asks if get_class() is the best method - researching get_class_name() may be worthwhile 
     * @see http://php.net/manual/en/function.get-class.php#101272
     * 
     * @param Money $object
     * @return bool
     */
    public function equals(Money $object): bool
    {
        $money = $object;
        return $this->amount == $money->amount && get_class($this) == get_class($money);
    }
}