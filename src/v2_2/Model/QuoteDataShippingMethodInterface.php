<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataShippingMethodInterface
{
    /**
     * Shipping amount in store currency.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * The value of the availability flag for the current shipping method.
     *
     * @var bool|null
     */
    protected $available;
    /**
     * Shipping amount in base currency.
     *
     * @var float|null
     */
    protected $baseAmount;
    /**
     * Shipping carrier code.
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * Shipping carrier title. Otherwise, null.
     *
     * @var string|null
     */
    protected $carrierTitle;
    /**
     * Shipping Error message.
     *
     * @var string|null
     */
    protected $errorMessage;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Shipping method code.
     *
     * @var string|null
     */
    protected $methodCode;
    /**
     * Shipping method title. Otherwise, null.
     *
     * @var string|null
     */
    protected $methodTitle;
    /**
     * Shipping price excl tax.
     *
     * @var float|null
     */
    protected $priceExclTax;
    /**
     * Shipping price incl tax.
     *
     * @var float|null
     */
    protected $priceInclTax;
    /**
     * Shipping amount in store currency.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Shipping amount in store currency.
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
     * The value of the availability flag for the current shipping method.
     *
     * @return bool|null
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }
    /**
     * The value of the availability flag for the current shipping method.
     *
     * @param bool|null $available
     *
     * @return self
     */
    public function setAvailable(?bool $available): self
    {
        $this->available = $available;
        return $this;
    }
    /**
     * Shipping amount in base currency.
     *
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }
    /**
     * Shipping amount in base currency.
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
     * Shipping carrier code.
     *
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Shipping carrier code.
     *
     * @param string|null $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Shipping carrier title. Otherwise, null.
     *
     * @return string|null
     */
    public function getCarrierTitle(): ?string
    {
        return $this->carrierTitle;
    }
    /**
     * Shipping carrier title. Otherwise, null.
     *
     * @param string|null $carrierTitle
     *
     * @return self
     */
    public function setCarrierTitle(?string $carrierTitle): self
    {
        $this->carrierTitle = $carrierTitle;
        return $this;
    }
    /**
     * Shipping Error message.
     *
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Shipping Error message.
     *
     * @param string|null $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
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
     * Shipping method code.
     *
     * @return string|null
     */
    public function getMethodCode(): ?string
    {
        return $this->methodCode;
    }
    /**
     * Shipping method code.
     *
     * @param string|null $methodCode
     *
     * @return self
     */
    public function setMethodCode(?string $methodCode): self
    {
        $this->methodCode = $methodCode;
        return $this;
    }
    /**
     * Shipping method title. Otherwise, null.
     *
     * @return string|null
     */
    public function getMethodTitle(): ?string
    {
        return $this->methodTitle;
    }
    /**
     * Shipping method title. Otherwise, null.
     *
     * @param string|null $methodTitle
     *
     * @return self
     */
    public function setMethodTitle(?string $methodTitle): self
    {
        $this->methodTitle = $methodTitle;
        return $this;
    }
    /**
     * Shipping price excl tax.
     *
     * @return float|null
     */
    public function getPriceExclTax(): ?float
    {
        return $this->priceExclTax;
    }
    /**
     * Shipping price excl tax.
     *
     * @param float|null $priceExclTax
     *
     * @return self
     */
    public function setPriceExclTax(?float $priceExclTax): self
    {
        $this->priceExclTax = $priceExclTax;
        return $this;
    }
    /**
     * Shipping price incl tax.
     *
     * @return float|null
     */
    public function getPriceInclTax(): ?float
    {
        return $this->priceInclTax;
    }
    /**
     * Shipping price incl tax.
     *
     * @param float|null $priceInclTax
     *
     * @return self
     */
    public function setPriceInclTax(?float $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
}
