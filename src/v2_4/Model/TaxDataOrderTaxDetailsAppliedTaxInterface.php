<?php

namespace Kiboko\Magento\v2_4\Model;

class TaxDataOrderTaxDetailsAppliedTaxInterface
{
    /**
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * Title
     *
     * @var string
     */
    protected $title;
    /**
     * Tax Percent
     *
     * @var float
     */
    protected $percent;
    /**
     * Tax amount
     *
     * @var float
     */
    protected $amount;
    /**
     * Tax amount in base currency
     *
     * @var float
     */
    protected $baseAmount;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Code
     *
     * @return string
     */
    public function getCode(): string
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
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Tax Percent
     *
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }
    /**
     * Tax Percent
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(float $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * Tax amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Tax amount
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
     * Tax amount in base currency
     *
     * @return float
     */
    public function getBaseAmount(): float
    {
        return $this->baseAmount;
    }
    /**
     * Tax amount in base currency
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
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
     */
    public function getExtensionAttributes(): TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(TaxDataOrderTaxDetailsAppliedTaxExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
