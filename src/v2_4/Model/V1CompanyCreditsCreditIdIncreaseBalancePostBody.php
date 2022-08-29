<?php

namespace Kiboko\Magento\v2_4\Model;

class V1CompanyCreditsCreditIdIncreaseBalancePostBody
{
    /**
     *
     *
     * @var float
     */
    protected $value;
    /**
     *
     *
     * @var string
     */
    protected $currency;
    /**
     *
     *
     * @var int
     */
    protected $operationType;
    /**
     * [optional]
     *
     * @var string
     */
    protected $comment;
    /**
     * Credit balance data transfer object interface.
     *
     * @var CompanyCreditDataCreditBalanceOptionsInterface
     */
    protected $options;
    /**
     *
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     *
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     *
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getOperationType(): int
    {
        return $this->operationType;
    }
    /**
     *
     *
     * @param int $operationType
     *
     * @return self
     */
    public function setOperationType(int $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }
    /**
     * [optional]
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * [optional]
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Credit balance data transfer object interface.
     *
     * @return CompanyCreditDataCreditBalanceOptionsInterface
     */
    public function getOptions(): CompanyCreditDataCreditBalanceOptionsInterface
    {
        return $this->options;
    }
    /**
     * Credit balance data transfer object interface.
     *
     * @param CompanyCreditDataCreditBalanceOptionsInterface $options
     *
     * @return self
     */
    public function setOptions(CompanyCreditDataCreditBalanceOptionsInterface $options): self
    {
        $this->options = $options;
        return $this;
    }
}
