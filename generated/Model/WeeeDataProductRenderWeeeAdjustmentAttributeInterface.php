<?php

namespace Kiboko\Magento\Model;

class WeeeDataProductRenderWeeeAdjustmentAttributeInterface
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
     * Weee attribute amount
     *
     * @var string|null
     */
    protected $amount;
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @var string|null
     */
    protected $taxAmount;
    /**
     * Tax amount of weee attribute
     *
     * @var string|null
     */
    protected $taxAmountInclTax;
    /**
     * Product amount exclude tax
     *
     * @var string|null
     */
    protected $amountExclTax;
    /**
     * Weee attribute code
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * ExtensionInterface class for @see \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Weee attribute amount
     *
     * @return string|null
     */
    public function getAmount() : ?string
    {
        return $this->amount;
    }
    /**
     * Weee attribute amount
     *
     * @param string|null $amount
     *
     * @return self
     */
    public function setAmount(?string $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @return string|null
     */
    public function getTaxAmount() : ?string
    {
        return $this->taxAmount;
    }
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @param string|null $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?string $taxAmount) : self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax amount of weee attribute
     *
     * @return string|null
     */
    public function getTaxAmountInclTax() : ?string
    {
        return $this->taxAmountInclTax;
    }
    /**
     * Tax amount of weee attribute
     *
     * @param string|null $taxAmountInclTax
     *
     * @return self
     */
    public function setTaxAmountInclTax(?string $taxAmountInclTax) : self
    {
        $this->initialized['taxAmountInclTax'] = true;
        $this->taxAmountInclTax = $taxAmountInclTax;
        return $this;
    }
    /**
     * Product amount exclude tax
     *
     * @return string|null
     */
    public function getAmountExclTax() : ?string
    {
        return $this->amountExclTax;
    }
    /**
     * Product amount exclude tax
     *
     * @param string|null $amountExclTax
     *
     * @return self
     */
    public function setAmountExclTax(?string $amountExclTax) : self
    {
        $this->initialized['amountExclTax'] = true;
        $this->amountExclTax = $amountExclTax;
        return $this;
    }
    /**
     * Weee attribute code
     *
     * @return string|null
     */
    public function getAttributeCode() : ?string
    {
        return $this->attributeCode;
    }
    /**
     * Weee attribute code
     *
     * @param string|null $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(?string $attributeCode) : self
    {
        $this->initialized['attributeCode'] = true;
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}