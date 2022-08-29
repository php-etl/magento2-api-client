<?php

namespace Kiboko\Magento\v2_3\Model;

class DirectoryDataExchangeRateInterface
{
    /**
     * The currency code associated with the exchange rate.
     *
     * @var string
     */
    protected $currencyTo;
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @var float
     */
    protected $rate;
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\ExchangeRateInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * The currency code associated with the exchange rate.
     *
     * @return string
     */
    public function getCurrencyTo() : string
    {
        return $this->currencyTo;
    }
    /**
     * The currency code associated with the exchange rate.
     *
     * @param string $currencyTo
     *
     * @return self
     */
    public function setCurrencyTo(string $currencyTo) : self
    {
        $this->currencyTo = $currencyTo;
        return $this;
    }
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }
    /**
     * The exchange rate for the associated currency and the store's base currency.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}