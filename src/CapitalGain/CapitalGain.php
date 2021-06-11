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
     * @var bool
     */
    protected $validCalculatorData = false;

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
        if(!$this->isValidCalculatorData()) {
            throw new \Exception("Calculator data invalid");
        }

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
        $this->setValidCalculatorData(false);
        if(!empty($data)) {
            $this->validateData($data);
        }
        // @TODO work out if empty arrays ([]) are valid? Maybe, if the calculator is booted, called, and then appended too lator on.
        $this->data = $data;
        $this->setValidCalculatorData(true);
    }

    /**
     * @param  Transaction  $data
     * @throws \Exception
     */
    public function addData(Transaction $data): void
    {
        $this->data[] = $data;
        $this->validateData($this->getData());
        $this->setValidCalculatorData(true);
    }

    /**
     * Clear data array
     */
    public function resetData(): void
    {
        $this->data = [];
    }

    /**
     * Alias function
     * Clear data array
     */
    public function clearData()
    {
        return $this->resetData();
    }

    /**
     * @param  array  $data
     * @throws \Exception
     */
    protected function validateData(array $data)
    {
        foreach ($data as $datum) {
            if (!$datum instanceof Transaction) {
                throw new \Exception("data item not instance of CapitalGain::Models::Transaction");
            }
        }
    }

    /**
     * @return bool
     */
    public function isValidCalculatorData(): bool
    {
        return $this->validCalculatorData;
    }

    /**
     * @param  bool  $validCalculatorData
     */
    public function setValidCalculatorData(bool $validCalculatorData): void
    {
        $this->validCalculatorData = $validCalculatorData;
    }
}
