<?php

namespace Kiboko\Magento\Model;

class TaxDataOrderTaxDetailsAppliedTaxInterface
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
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Tax Percent
     *
     * @var float|null
     */
    protected $percent;
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
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode() : ?string
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
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle() : ?string
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
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Tax Percent
     *
     * @return float|null
     */
    public function getPercent() : ?float
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
    public function setPercent(?float $percent) : self
    {
        $this->initialized['percent'] = true;
        $this->percent = $percent;
        return $this;
    }
    /**
     * Tax amount
     *
     * @return float|null
     */
    public function getAmount() : ?float
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
    public function setAmount(?float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Tax amount in base currency
     *
     * @return float|null
     */
    public function getBaseAmount() : ?float
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
    public function setBaseAmount(?float $baseAmount) : self
    {
        $this->initialized['baseAmount'] = true;
        $this->baseAmount = $baseAmount;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxExtensionInterface|null
     */
    public function getExtensionAttributes() : ?TaxDataOrderTaxDetailsAppliedTaxExtensionInterface
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
    public function setExtensionAttributes(?TaxDataOrderTaxDetailsAppliedTaxExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}