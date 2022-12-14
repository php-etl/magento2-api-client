<?php

namespace Kiboko\Magento\V2_3\Model;

class DirectoryDataCurrencyInformationInterface
{
    /**
     * The list of allowed currency codes for the store.
     *
     * @var string[]|null
     */
    protected $availableCurrencyCodes;
    /**
     * The base currency code for the store.
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * The currency symbol of the base currency for the store.
     *
     * @var string|null
     */
    protected $baseCurrencySymbol;
    /**
     * The default display currency code for the store.
     *
     * @var string|null
     */
    protected $defaultDisplayCurrencyCode;
    /**
     * The currency symbol of the default display currency for the store.
     *
     * @var string|null
     */
    protected $defaultDisplayCurrencySymbol;
    /**
     * The list of exchange rate information for the store.
     *
     * @var DirectoryDataExchangeRateInterface[]|null
     */
    protected $exchangeRates;
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CurrencyInformationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * The list of allowed currency codes for the store.
     *
     * @return string[]|null
     */
    public function getAvailableCurrencyCodes(): ?array
    {
        return $this->availableCurrencyCodes;
    }
    /**
     * The list of allowed currency codes for the store.
     *
     * @param string[]|null $availableCurrencyCodes
     *
     * @return self
     */
    public function setAvailableCurrencyCodes(?array $availableCurrencyCodes): self
    {
        $this->availableCurrencyCodes = $availableCurrencyCodes;
        return $this;
    }
    /**
     * The base currency code for the store.
     *
     * @return string|null
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * The base currency code for the store.
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * The currency symbol of the base currency for the store.
     *
     * @return string|null
     */
    public function getBaseCurrencySymbol(): ?string
    {
        return $this->baseCurrencySymbol;
    }
    /**
     * The currency symbol of the base currency for the store.
     *
     * @param string|null $baseCurrencySymbol
     *
     * @return self
     */
    public function setBaseCurrencySymbol(?string $baseCurrencySymbol): self
    {
        $this->baseCurrencySymbol = $baseCurrencySymbol;
        return $this;
    }
    /**
     * The default display currency code for the store.
     *
     * @return string|null
     */
    public function getDefaultDisplayCurrencyCode(): ?string
    {
        return $this->defaultDisplayCurrencyCode;
    }
    /**
     * The default display currency code for the store.
     *
     * @param string|null $defaultDisplayCurrencyCode
     *
     * @return self
     */
    public function setDefaultDisplayCurrencyCode(?string $defaultDisplayCurrencyCode): self
    {
        $this->defaultDisplayCurrencyCode = $defaultDisplayCurrencyCode;
        return $this;
    }
    /**
     * The currency symbol of the default display currency for the store.
     *
     * @return string|null
     */
    public function getDefaultDisplayCurrencySymbol(): ?string
    {
        return $this->defaultDisplayCurrencySymbol;
    }
    /**
     * The currency symbol of the default display currency for the store.
     *
     * @param string|null $defaultDisplayCurrencySymbol
     *
     * @return self
     */
    public function setDefaultDisplayCurrencySymbol(?string $defaultDisplayCurrencySymbol): self
    {
        $this->defaultDisplayCurrencySymbol = $defaultDisplayCurrencySymbol;
        return $this;
    }
    /**
     * The list of exchange rate information for the store.
     *
     * @return DirectoryDataExchangeRateInterface[]|null
     */
    public function getExchangeRates(): ?array
    {
        return $this->exchangeRates;
    }
    /**
     * The list of exchange rate information for the store.
     *
     * @param DirectoryDataExchangeRateInterface[]|null $exchangeRates
     *
     * @return self
     */
    public function setExchangeRates(?array $exchangeRates): self
    {
        $this->exchangeRates = $exchangeRates;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CurrencyInformationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Directory\Api\Data\CurrencyInformationInterface
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
}
