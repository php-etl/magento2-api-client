<?php

namespace Kiboko\Magento\Model;

class QuoteDataCurrencyInterface
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
     * Global currency code
     *
     * @var string|null
     */
    protected $globalCurrencyCode;
    /**
     * Base currency code
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * Store currency code
     *
     * @var string|null
     */
    protected $storeCurrencyCode;
    /**
     * Quote currency code
     *
     * @var string|null
     */
    protected $quoteCurrencyCode;
    /**
     * Store currency to base currency rate
     *
     * @var float|null
     */
    protected $storeToBaseRate;
    /**
     * Store currency to quote currency rate
     *
     * @var float|null
     */
    protected $storeToQuoteRate;
    /**
     * Base currency to global currency rate
     *
     * @var float|null
     */
    protected $baseToGlobalRate;
    /**
     * Base currency to quote currency rate
     *
     * @var float|null
     */
    protected $baseToQuoteRate;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CurrencyInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Global currency code
     *
     * @return string|null
     */
    public function getGlobalCurrencyCode() : ?string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Global currency code
     *
     * @param string|null $globalCurrencyCode
     *
     * @return self
     */
    public function setGlobalCurrencyCode(?string $globalCurrencyCode) : self
    {
        $this->initialized['globalCurrencyCode'] = true;
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }
    /**
     * Base currency code
     *
     * @return string|null
     */
    public function getBaseCurrencyCode() : ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode) : self
    {
        $this->initialized['baseCurrencyCode'] = true;
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * Store currency code
     *
     * @return string|null
     */
    public function getStoreCurrencyCode() : ?string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Store currency code
     *
     * @param string|null $storeCurrencyCode
     *
     * @return self
     */
    public function setStoreCurrencyCode(?string $storeCurrencyCode) : self
    {
        $this->initialized['storeCurrencyCode'] = true;
        $this->storeCurrencyCode = $storeCurrencyCode;
        return $this;
    }
    /**
     * Quote currency code
     *
     * @return string|null
     */
    public function getQuoteCurrencyCode() : ?string
    {
        return $this->quoteCurrencyCode;
    }
    /**
     * Quote currency code
     *
     * @param string|null $quoteCurrencyCode
     *
     * @return self
     */
    public function setQuoteCurrencyCode(?string $quoteCurrencyCode) : self
    {
        $this->initialized['quoteCurrencyCode'] = true;
        $this->quoteCurrencyCode = $quoteCurrencyCode;
        return $this;
    }
    /**
     * Store currency to base currency rate
     *
     * @return float|null
     */
    public function getStoreToBaseRate() : ?float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Store currency to base currency rate
     *
     * @param float|null $storeToBaseRate
     *
     * @return self
     */
    public function setStoreToBaseRate(?float $storeToBaseRate) : self
    {
        $this->initialized['storeToBaseRate'] = true;
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }
    /**
     * Store currency to quote currency rate
     *
     * @return float|null
     */
    public function getStoreToQuoteRate() : ?float
    {
        return $this->storeToQuoteRate;
    }
    /**
     * Store currency to quote currency rate
     *
     * @param float|null $storeToQuoteRate
     *
     * @return self
     */
    public function setStoreToQuoteRate(?float $storeToQuoteRate) : self
    {
        $this->initialized['storeToQuoteRate'] = true;
        $this->storeToQuoteRate = $storeToQuoteRate;
        return $this;
    }
    /**
     * Base currency to global currency rate
     *
     * @return float|null
     */
    public function getBaseToGlobalRate() : ?float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Base currency to global currency rate
     *
     * @param float|null $baseToGlobalRate
     *
     * @return self
     */
    public function setBaseToGlobalRate(?float $baseToGlobalRate) : self
    {
        $this->initialized['baseToGlobalRate'] = true;
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }
    /**
     * Base currency to quote currency rate
     *
     * @return float|null
     */
    public function getBaseToQuoteRate() : ?float
    {
        return $this->baseToQuoteRate;
    }
    /**
     * Base currency to quote currency rate
     *
     * @param float|null $baseToQuoteRate
     *
     * @return self
     */
    public function setBaseToQuoteRate(?float $baseToQuoteRate) : self
    {
        $this->initialized['baseToQuoteRate'] = true;
        $this->baseToQuoteRate = $baseToQuoteRate;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CurrencyInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CurrencyInterface
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