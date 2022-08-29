<?php

namespace Kiboko\Magento\v2_1\Model;

class QuoteDataCurrencyInterface
{
    /**
     * Base currency code
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * Base currency to global currency rate
     *
     * @var float
     */
    protected $baseToGlobalRate;
    /**
     * Base currency to quote currency rate
     *
     * @var float
     */
    protected $baseToQuoteRate;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CurrencyInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Global currency code
     *
     * @var string
     */
    protected $globalCurrencyCode;
    /**
     * Quote currency code
     *
     * @var string
     */
    protected $quoteCurrencyCode;
    /**
     * Store currency code
     *
     * @var string
     */
    protected $storeCurrencyCode;
    /**
     * Store currency to base currency rate
     *
     * @var float
     */
    protected $storeToBaseRate;
    /**
     * Store currency to quote currency rate
     *
     * @var float
     */
    protected $storeToQuoteRate;
    /**
     * Base currency code
     *
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code
     *
     * @param string $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * Base currency to global currency rate
     *
     * @return float
     */
    public function getBaseToGlobalRate(): float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Base currency to global currency rate
     *
     * @param float $baseToGlobalRate
     *
     * @return self
     */
    public function setBaseToGlobalRate(float $baseToGlobalRate): self
    {
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }
    /**
     * Base currency to quote currency rate
     *
     * @return float
     */
    public function getBaseToQuoteRate(): float
    {
        return $this->baseToQuoteRate;
    }
    /**
     * Base currency to quote currency rate
     *
     * @param float $baseToQuoteRate
     *
     * @return self
     */
    public function setBaseToQuoteRate(float $baseToQuoteRate): self
    {
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Global currency code
     *
     * @return string
     */
    public function getGlobalCurrencyCode(): string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Global currency code
     *
     * @param string $globalCurrencyCode
     *
     * @return self
     */
    public function setGlobalCurrencyCode(string $globalCurrencyCode): self
    {
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }
    /**
     * Quote currency code
     *
     * @return string
     */
    public function getQuoteCurrencyCode(): string
    {
        return $this->quoteCurrencyCode;
    }
    /**
     * Quote currency code
     *
     * @param string $quoteCurrencyCode
     *
     * @return self
     */
    public function setQuoteCurrencyCode(string $quoteCurrencyCode): self
    {
        $this->quoteCurrencyCode = $quoteCurrencyCode;
        return $this;
    }
    /**
     * Store currency code
     *
     * @return string
     */
    public function getStoreCurrencyCode(): string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Store currency code
     *
     * @param string $storeCurrencyCode
     *
     * @return self
     */
    public function setStoreCurrencyCode(string $storeCurrencyCode): self
    {
        $this->storeCurrencyCode = $storeCurrencyCode;
        return $this;
    }
    /**
     * Store currency to base currency rate
     *
     * @return float
     */
    public function getStoreToBaseRate(): float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Store currency to base currency rate
     *
     * @param float $storeToBaseRate
     *
     * @return self
     */
    public function setStoreToBaseRate(float $storeToBaseRate): self
    {
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }
    /**
     * Store currency to quote currency rate
     *
     * @return float
     */
    public function getStoreToQuoteRate(): float
    {
        return $this->storeToQuoteRate;
    }
    /**
     * Store currency to quote currency rate
     *
     * @param float $storeToQuoteRate
     *
     * @return self
     */
    public function setStoreToQuoteRate(float $storeToQuoteRate): self
    {
        $this->storeToQuoteRate = $storeToQuoteRate;
        return $this;
    }
}
