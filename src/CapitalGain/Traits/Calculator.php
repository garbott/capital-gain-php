<?php

namespace CapitalGain\Traits;

/**
 * Trait Calculator
 *
 * @package CapitalGain\Traits
 */
trait Calculator
{

    /**
     * @param  int  $amount
     * @return int
     */
    public function moneyFormat(int $amount = 0)
    {
        return $amount;
    }

    /**
     * @param  int  $amount
     * @return int
     */
    public function addVat(int $amount = 0)
    {
        return $amount;
    }

    /**
     * @param  int  $amount
     * @return int
     */
    public function remoteVat(int $amount = 0)
    {
        return $amount;
    }

}