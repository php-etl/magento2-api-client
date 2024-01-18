<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataDiscountDataInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Amount
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Base Amount
     *
     * @var float|null
     */
    protected $baseAmount;
    /**
     * Original Amount
     *
     * @var float|null
     */
    protected $originalAmount;
    /**
     * Base Original Amount
     *
     * @var float|null
     */
    protected $baseOriginalAmount;
    /**
     * Amount
     *
     * @return float|null
     */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * Amount
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Base Amount
     *
     * @return float|null
     */
    public function getBaseAmount() : ?float
    {
        return $this->baseAmount;
    }
    /**
     * Base Amount
     *
     * @param float|null $baseAmount
     *
     * @return self
     */
    public function setBaseAmount(?float $baseAmount) : self
    {
        $this->initialized['baseAmount'] = true;
        $this->baseAmount = $baseAmount;
        return $this;
    }
    /**
     * Original Amount
     *
     * @return float|null
     */
    public function getOriginalAmount() : ?float
    {
        return $this->originalAmount;
    }
    /**
     * Original Amount
     *
     * @param float|null $originalAmount
     *
     * @return self
     */
    public function setOriginalAmount(?float $originalAmount) : self
    {
        $this->initialized['originalAmount'] = true;
        $this->originalAmount = $originalAmount;
        return $this;
    }
    /**
     * Base Original Amount
     *
     * @return float|null
     */
    public function getBaseOriginalAmount() : ?float
    {
        return $this->baseOriginalAmount;
    }
    /**
     * Base Original Amount
     *
     * @param float|null $baseOriginalAmount
     *
     * @return self
     */
    public function setBaseOriginalAmount(?float $baseOriginalAmount) : self
    {
        $this->initialized['baseOriginalAmount'] = true;
        $this->baseOriginalAmount = $baseOriginalAmount;
        return $this;
    }
}