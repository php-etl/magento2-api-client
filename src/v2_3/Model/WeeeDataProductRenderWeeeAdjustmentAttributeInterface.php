<?php

namespace Kiboko\Magento\v2_3\Model;

class WeeeDataProductRenderWeeeAdjustmentAttributeInterface
{
    /**
     * Weee attribute amount
     *
     * @var string
     */
    protected $amount;
    /**
     * Product amount exclude tax
     *
     * @var string
     */
    protected $amountExclTax;
    /**
     * Weee attribute code
     *
     * @var string
     */
    protected $attributeCode;
    /**
     * ExtensionInterface class for @see \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @var string
     */
    protected $taxAmount;
    /**
     * Tax amount of weee attribute
     *
     * @var string
     */
    protected $taxAmountInclTax;
    /**
     * Weee attribute amount
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Weee attribute amount
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Product amount exclude tax
     *
     * @return string
     */
    public function getAmountExclTax(): string
    {
        return $this->amountExclTax;
    }
    /**
     * Product amount exclude tax
     *
     * @param string $amountExclTax
     *
     * @return self
     */
    public function setAmountExclTax(string $amountExclTax): self
    {
        $this->amountExclTax = $amountExclTax;
        return $this;
    }
    /**
     * Weee attribute code
     *
     * @return string
     */
    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }
    /**
     * Weee attribute code
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(string $attributeCode): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @return string
     */
    public function getTaxAmount(): string
    {
        return $this->taxAmount;
    }
    /**
     * Tax which is calculated to fixed product tax attribute
     *
     * @param string $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(string $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax amount of weee attribute
     *
     * @return string
     */
    public function getTaxAmountInclTax(): string
    {
        return $this->taxAmountInclTax;
    }
    /**
     * Tax amount of weee attribute
     *
     * @param string $taxAmountInclTax
     *
     * @return self
     */
    public function setTaxAmountInclTax(string $taxAmountInclTax): self
    {
        $this->taxAmountInclTax = $taxAmountInclTax;
        return $this;
    }
}
