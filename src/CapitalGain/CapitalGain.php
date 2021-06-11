<?php

namespace CapitalGain;

use CapitalGain\Models\Transaction;
use CapitalGain\Traits;

/**
 * Class CapitalGain
 *
 * @package CapitalGain
 */
class CapitalGain
{
    use Calculator;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * CapitalGain constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data = [])
    {
        $this->setData($data);
    }

    /**
     * @returns string
     */
    public function calculate()
    {
        return 'Hello World, Composer!';
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param  array  $data
     * @throws \Exception
     */
    public function setData(array $data): void
    {
        foreach($data as $datum) {
            if(!$datum instanceof Transaction) {
                throw new \Exception("data item not instance of CaptaiGain::Models::Transaction");
            }
        }
        $this->data = $data;
    }
}
