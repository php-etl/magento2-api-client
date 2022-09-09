<?php

namespace Kiboko\Magento\V2_1\Model;

class TaxDataOrderTaxDetailsAppliedTaxInterface
{
    /**
     * Tax amount
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Tax amount in base currency
     *
     * @var float|null
     */
    protected $baseAmount;
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Tax Percent
     *
     * @var float|null
     */
    protected $percent;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Tax amount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Tax amount
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Tax amount in base currency
     *
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }
    /**
     * Tax amount in base currency
     *
     * @param float|null $baseAmount
     *
     * @return self
     */
    public function setBaseAmount(?float $baseAmount): self
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxExtensionInterface|null
     */
    public function getExtensionAttributes(): ?TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?TaxDataOrderTaxDetailsAppliedTaxExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Tax Percent
     *
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Tax Percent
     *
     * @param float|null $percent
     *
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
