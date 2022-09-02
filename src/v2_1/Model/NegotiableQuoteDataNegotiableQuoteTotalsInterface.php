<?php

namespace Kiboko\Magento\V2_1\Model;

class NegotiableQuoteDataNegotiableQuoteTotalsInterface
{
    /**
     * Total cost for quote in base currency.
     *
     * @var float
     */
    protected $baseCostTotal;
    /**
     * Original price with included tax for quote in base currency.
     *
     * @var float
     */
    protected $baseOriginalPriceInclTax;
    /**
     * Original tax amount for quote in base currency.
     *
     * @var float
     */
    protected $baseOriginalTax;
    /**
     * Original quote total in base currency.
     *
     * @var float
     */
    protected $baseOriginalTotal;
    /**
     * Base currency to quote currency rate.
     *
     * @var float
     */
    protected $baseToQuoteRate;
    /**
     * Total cost for quote.
     *
     * @var float
     */
    protected $costTotal;
    /**
     * The cart creation date and time.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Customer group id.
     *
     * @var int
     */
    protected $customerGroup;
    /**
     * The number of different items or products in the cart.
     *
     * @var int
     */
    protected $itemsCount;
    /**
     * Negotiable quote type.
     *
     * @var int
     */
    protected $negotiatedPriceType;
    /**
     * Negotiable price value for quote.
     *
     * @var float
     */
    protected $negotiatedPriceValue;
    /**
     * Original price with included tax for quote.
     *
     * @var float
     */
    protected $originalPriceInclTax;
    /**
     * Original tax amount for quote.
     *
     * @var float
     */
    protected $originalTax;
    /**
     * Original quote total.
     *
     * @var float
     */
    protected $originalTotal;
    /**
     * Negotiable quote status.
     *
     * @var string
     */
    protected $quoteStatus;
    /**
     * The cart last update date and time.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Total cost for quote in base currency.
     *
     * @return float
     */
    public function getBaseCostTotal(): float
    {
        return $this->baseCostTotal;
    }
    /**
     * Total cost for quote in base currency.
     *
     * @param float $baseCostTotal
     *
     * @return self
     */
    public function setBaseCostTotal(float $baseCostTotal): self
    {
        $this->baseCostTotal = $baseCostTotal;
        return $this;
    }
    /**
     * Original price with included tax for quote in base currency.
     *
     * @return float
     */
    public function getBaseOriginalPriceInclTax(): float
    {
        return $this->baseOriginalPriceInclTax;
    }
    /**
     * Original price with included tax for quote in base currency.
     *
     * @param float $baseOriginalPriceInclTax
     *
     * @return self
     */
    public function setBaseOriginalPriceInclTax(float $baseOriginalPriceInclTax): self
    {
        $this->baseOriginalPriceInclTax = $baseOriginalPriceInclTax;
        return $this;
    }
    /**
     * Original tax amount for quote in base currency.
     *
     * @return float
     */
    public function getBaseOriginalTax(): float
    {
        return $this->baseOriginalTax;
    }
    /**
     * Original tax amount for quote in base currency.
     *
     * @param float $baseOriginalTax
     *
     * @return self
     */
    public function setBaseOriginalTax(float $baseOriginalTax): self
    {
        $this->baseOriginalTax = $baseOriginalTax;
        return $this;
    }
    /**
     * Original quote total in base currency.
     *
     * @return float
     */
    public function getBaseOriginalTotal(): float
    {
        return $this->baseOriginalTotal;
    }
    /**
     * Original quote total in base currency.
     *
     * @param float $baseOriginalTotal
     *
     * @return self
     */
    public function setBaseOriginalTotal(float $baseOriginalTotal): self
    {
        $this->baseOriginalTotal = $baseOriginalTotal;
        return $this;
    }
    /**
     * Base currency to quote currency rate.
     *
     * @return float
     */
    public function getBaseToQuoteRate(): float
    {
        return $this->baseToQuoteRate;
    }
    /**
     * Base currency to quote currency rate.
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
     * Total cost for quote.
     *
     * @return float
     */
    public function getCostTotal(): float
    {
        return $this->costTotal;
    }
    /**
     * Total cost for quote.
     *
     * @param float $costTotal
     *
     * @return self
     */
    public function setCostTotal(float $costTotal): self
    {
        $this->costTotal = $costTotal;
        return $this;
    }
    /**
     * The cart creation date and time.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * The cart creation date and time.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Customer group id.
     *
     * @return int
     */
    public function getCustomerGroup(): int
    {
        return $this->customerGroup;
    }
    /**
     * Customer group id.
     *
     * @param int $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(int $customerGroup): self
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }
    /**
     * The number of different items or products in the cart.
     *
     * @return int
     */
    public function getItemsCount(): int
    {
        return $this->itemsCount;
    }
    /**
     * The number of different items or products in the cart.
     *
     * @param int $itemsCount
     *
     * @return self
     */
    public function setItemsCount(int $itemsCount): self
    {
        $this->itemsCount = $itemsCount;
        return $this;
    }
    /**
     * Negotiable quote type.
     *
     * @return int
     */
    public function getNegotiatedPriceType(): int
    {
        return $this->negotiatedPriceType;
    }
    /**
     * Negotiable quote type.
     *
     * @param int $negotiatedPriceType
     *
     * @return self
     */
    public function setNegotiatedPriceType(int $negotiatedPriceType): self
    {
        $this->negotiatedPriceType = $negotiatedPriceType;
        return $this;
    }
    /**
     * Negotiable price value for quote.
     *
     * @return float
     */
    public function getNegotiatedPriceValue(): float
    {
        return $this->negotiatedPriceValue;
    }
    /**
     * Negotiable price value for quote.
     *
     * @param float $negotiatedPriceValue
     *
     * @return self
     */
    public function setNegotiatedPriceValue(float $negotiatedPriceValue): self
    {
        $this->negotiatedPriceValue = $negotiatedPriceValue;
        return $this;
    }
    /**
     * Original price with included tax for quote.
     *
     * @return float
     */
    public function getOriginalPriceInclTax(): float
    {
        return $this->originalPriceInclTax;
    }
    /**
     * Original price with included tax for quote.
     *
     * @param float $originalPriceInclTax
     *
     * @return self
     */
    public function setOriginalPriceInclTax(float $originalPriceInclTax): self
    {
        $this->originalPriceInclTax = $originalPriceInclTax;
        return $this;
    }
    /**
     * Original tax amount for quote.
     *
     * @return float
     */
    public function getOriginalTax(): float
    {
        return $this->originalTax;
    }
    /**
     * Original tax amount for quote.
     *
     * @param float $originalTax
     *
     * @return self
     */
    public function setOriginalTax(float $originalTax): self
    {
        $this->originalTax = $originalTax;
        return $this;
    }
    /**
     * Original quote total.
     *
     * @return float
     */
    public function getOriginalTotal(): float
    {
        return $this->originalTotal;
    }
    /**
     * Original quote total.
     *
     * @param float $originalTotal
     *
     * @return self
     */
    public function setOriginalTotal(float $originalTotal): self
    {
        $this->originalTotal = $originalTotal;
        return $this;
    }
    /**
     * Negotiable quote status.
     *
     * @return string
     */
    public function getQuoteStatus(): string
    {
        return $this->quoteStatus;
    }
    /**
     * Negotiable quote status.
     *
     * @param string $quoteStatus
     *
     * @return self
     */
    public function setQuoteStatus(string $quoteStatus): self
    {
        $this->quoteStatus = $quoteStatus;
        return $this;
    }
    /**
     * The cart last update date and time.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * The cart last update date and time.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
