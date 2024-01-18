<?php

namespace Kiboko\Magento\Model;

class QuoteDataShippingMethodInterface
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
     * Shipping carrier code.
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * Shipping method code.
     *
     * @var string|null
     */
    protected $methodCode;
    /**
     * Shipping carrier title. Otherwise, null.
     *
     * @var string|null
     */
    protected $carrierTitle;
    /**
     * Shipping method title. Otherwise, null.
     *
     * @var string|null
     */
    protected $methodTitle;
    /**
     * Shipping amount in store currency.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Shipping amount in base currency.
     *
     * @var float|null
     */
    protected $baseAmount;
    /**
     * The value of the availability flag for the current shipping method.
     *
     * @var bool|null
     */
    protected $available;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingMethodInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Shipping Error message.
     *
     * @var string|null
     */
    protected $errorMessage;
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
     * Shipping carrier code.
     *
     * @return string|null
     */
    public function getCarrierCode() : ?string
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
    public function setCarrierCode(?string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Shipping method code.
     *
     * @return string|null
     */
    public function getMethodCode() : ?string
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
    public function setMethodCode(?string $methodCode) : self
    {
        $this->initialized['methodCode'] = true;
        $this->methodCode = $methodCode;
        return $this;
    }
    /**
     * Shipping carrier title. Otherwise, null.
     *
     * @return string|null
     */
    public function getCarrierTitle() : ?string
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
    public function setCarrierTitle(?string $carrierTitle) : self
    {
        $this->initialized['carrierTitle'] = true;
        $this->carrierTitle = $carrierTitle;
        return $this;
    }
    /**
     * Shipping method title. Otherwise, null.
     *
     * @return string|null
     */
    public function getMethodTitle() : ?string
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
    public function setMethodTitle(?string $methodTitle) : self
    {
        $this->initialized['methodTitle'] = true;
        $this->methodTitle = $methodTitle;
        return $this;
    }
    /**
     * Shipping amount in store currency.
     *
     * @return float|null
     */
    public function getAmount() : ?float
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
    public function setAmount(?float $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * Shipping amount in base currency.
     *
     * @return float|null
     */
    public function getBaseAmount() : ?float
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
    public function setBaseAmount(?float $baseAmount) : self
    {
        $this->initialized['baseAmount'] = true;
        $this->baseAmount = $baseAmount;
        return $this;
    }
    /**
     * The value of the availability flag for the current shipping method.
     *
     * @return bool|null
     */
    public function getAvailable() : ?bool
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
    public function setAvailable(?bool $available) : self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Shipping Error message.
     *
     * @return string|null
     */
    public function getErrorMessage() : ?string
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
    public function setErrorMessage(?string $errorMessage) : self
    {
        $this->initialized['errorMessage'] = true;
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Shipping price excl tax.
     *
     * @return float|null
     */
    public function getPriceExclTax() : ?float
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
    public function setPriceExclTax(?float $priceExclTax) : self
    {
        $this->initialized['priceExclTax'] = true;
        $this->priceExclTax = $priceExclTax;
        return $this;
    }
    /**
     * Shipping price incl tax.
     *
     * @return float|null
     */
    public function getPriceInclTax() : ?float
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
    public function setPriceInclTax(?float $priceInclTax) : self
    {
        $this->initialized['priceInclTax'] = true;
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
}