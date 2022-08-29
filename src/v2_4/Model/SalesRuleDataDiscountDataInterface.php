<?php

namespace Kiboko\Magento\v2_4\Model;

class SalesRuleDataDiscountDataInterface
{
    /**
     * Amount
     *
     * @var float
     */
    protected $amount;
    /**
     * Base Amount
     *
     * @var float
     */
    protected $baseAmount;
    /**
     * Original Amount
     *
     * @var float
     */
    protected $originalAmount;
    /**
     * Base Original Amount
     *
     * @var float
     */
    protected $baseOriginalAmount;
    /**
     * Amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Amount
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Base Amount
     *
     * @return float
     */
    public function getBaseAmount(): float
    {
        return $this->baseAmount;
    }
    /**
     * Base Amount
     *
     * @param float $baseAmount
     *
     * @return self
     */
    public function setBaseAmount(float $baseAmount): self
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }
    /**
     * Original Amount
     *
     * @return float
     */
    public function getOriginalAmount(): float
    {
        return $this->originalAmount;
    }
    /**
     * Original Amount
     *
     * @param float $originalAmount
     *
     * @return self
     */
    public function setOriginalAmount(float $originalAmount): self
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }
    /**
     * Base Original Amount
     *
     * @return float
     */
    public function getBaseOriginalAmount(): float
    {
        return $this->baseOriginalAmount;
    }
    /**
     * Base Original Amount
     *
     * @param float $baseOriginalAmount
     *
     * @return self
     */
    public function setBaseOriginalAmount(float $baseOriginalAmount): self
    {
        $this->baseOriginalAmount = $baseOriginalAmount;
        return $this;
    }
}
