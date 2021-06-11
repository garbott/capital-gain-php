<?php

namespace CapitalGain\Models;

use CapitalGain\Classes\Model;

/**
 * Class Transaction
 *
 * @package CapitalGain\Models
 */
class Transaction extends Model
{

    /**
     * @var int
     */
    protected int $amount = 0;

    /**
     *
     */
    public function __constructor(int $amount = 0)
    {
        $this->setAmount($amount);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param  int  $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

}