<?php

namespace TDD\Chapter7;

class Money
{

    /**
     * @var int $amount The monetary amount given to the Money object
     */
    protected $amount;

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