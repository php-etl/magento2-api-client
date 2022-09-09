<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CompanyCreditsCreditIdDecreaseBalancePostBody
{
    /**
     * [optional]
     *
     * @var string|null
     */
    protected $comment;
    /**
     *
     *
     * @var string|null
     */
    protected $currency;
    /**
     *
     *
     * @var int|null
     */
    protected $operationType;
    /**
     * Credit balance data transfer object interface.
     *
     * @var CompanyCreditDataCreditBalanceOptionsInterface|null
     */
    protected $options;
    /**
     *
     *
     * @var float|null
     */
    protected $value;
    /**
     * [optional]
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * [optional]
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     *
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getOperationType(): ?int
    {
        return $this->operationType;
    }
    /**
     *
     *
     * @param int|null $operationType
     *
     * @return self
     */
    public function setOperationType(?int $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }
    /**
     * Credit balance data transfer object interface.
     *
     * @return CompanyCreditDataCreditBalanceOptionsInterface|null
     */
    public function getOptions(): ?CompanyCreditDataCreditBalanceOptionsInterface
    {
        return $this->options;
    }
    /**
     * Credit balance data transfer object interface.
     *
     * @param CompanyCreditDataCreditBalanceOptionsInterface|null $options
     *
     * @return self
     */
    public function setOptions(?CompanyCreditDataCreditBalanceOptionsInterface $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     *
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }
}
