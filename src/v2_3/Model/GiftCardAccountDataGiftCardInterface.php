<?php

namespace Kiboko\Magento\v2_3\Model;

class GiftCardAccountDataGiftCardInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Code
     *
     * @var string
     */
    protected $code;
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
     * Id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Amount
     *
     * @return float
     */
    public function getAmount() : float
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
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Base Amount
     *
     * @return float
     */
    public function getBaseAmount() : float
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
    public function setBaseAmount(float $baseAmount) : self
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }
}