<?php

namespace Kiboko\Magento\Model;

class DirectoryDataExchangeRateInterface
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
     * The currency code associated with the exchange rate.
     *
     * @var string|null
     */
    protected $currencyTo;
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\ExchangeRateInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The currency code associated with the exchange rate.
     *
     * @return string|null
     */
    public function getCurrencyTo() : ?string
    {
        return $this->currencyTo;
    }
    /**
     * The currency code associated with the exchange rate.
     *
     * @param string|null $currencyTo
     *
     * @return self
     */
    public function setCurrencyTo(?string $currencyTo) : self
    {
        $this->initialized['currencyTo'] = true;
        $this->currencyTo = $currencyTo;
        return $this;
    }
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->rate;
    }
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\ExchangeRateInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\ExchangeRateInterface
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