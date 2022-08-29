<?php

namespace Kiboko\Magento\v2_4\Model;

class NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
{
    /**
     * Cost for quote item.
     *
     * @var float
     */
    protected $cost;
    /**
     * Catalog price for quote item.
     *
     * @var float
     */
    protected $catalogPrice;
    /**
     * Catalog price for quote item in base currency.
     *
     * @var float
     */
    protected $baseCatalogPrice;
    /**
     * Catalog price with included tax for quote item.
     *
     * @var float
     */
    protected $catalogPriceInclTax;
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @var float
     */
    protected $baseCatalogPriceInclTax;
    /**
     * Cart price for quote item.
     *
     * @var float
     */
    protected $cartPrice;
    /**
     * Cart price for quote item in base currency.
     *
     * @var float
     */
    protected $baseCartPrice;
    /**
     * Tax from catalog price for quote item.
     *
     * @var float
     */
    protected $cartTax;
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @var float
     */
    protected $baseCartTax;
    /**
     * Cart price with included tax for quote item.
     *
     * @var float
     */
    protected $cartPriceInclTax;
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @var float
     */
    protected $baseCartPriceInclTax;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Cost for quote item.
     *
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }
    /**
     * Cost for quote item.
     *
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * Catalog price for quote item.
     *
     * @return float
     */
    public function getCatalogPrice(): float
    {
        return $this->catalogPrice;
    }
    /**
     * Catalog price for quote item.
     *
     * @param float $catalogPrice
     *
     * @return self
     */
    public function setCatalogPrice(float $catalogPrice): self
    {
        $this->catalogPrice = $catalogPrice;
        return $this;
    }
    /**
     * Catalog price for quote item in base currency.
     *
     * @return float
     */
    public function getBaseCatalogPrice(): float
    {
        return $this->baseCatalogPrice;
    }
    /**
     * Catalog price for quote item in base currency.
     *
     * @param float $baseCatalogPrice
     *
     * @return self
     */
    public function setBaseCatalogPrice(float $baseCatalogPrice): self
    {
        $this->baseCatalogPrice = $baseCatalogPrice;
        return $this;
    }
    /**
     * Catalog price with included tax for quote item.
     *
     * @return float
     */
    public function getCatalogPriceInclTax(): float
    {
        return $this->catalogPriceInclTax;
    }
    /**
     * Catalog price with included tax for quote item.
     *
     * @param float $catalogPriceInclTax
     *
     * @return self
     */
    public function setCatalogPriceInclTax(float $catalogPriceInclTax): self
    {
        $this->catalogPriceInclTax = $catalogPriceInclTax;
        return $this;
    }
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @return float
     */
    public function getBaseCatalogPriceInclTax(): float
    {
        return $this->baseCatalogPriceInclTax;
    }
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @param float $baseCatalogPriceInclTax
     *
     * @return self
     */
    public function setBaseCatalogPriceInclTax(float $baseCatalogPriceInclTax): self
    {
        $this->baseCatalogPriceInclTax = $baseCatalogPriceInclTax;
        return $this;
    }
    /**
     * Cart price for quote item.
     *
     * @return float
     */
    public function getCartPrice(): float
    {
        return $this->cartPrice;
    }
    /**
     * Cart price for quote item.
     *
     * @param float $cartPrice
     *
     * @return self
     */
    public function setCartPrice(float $cartPrice): self
    {
        $this->cartPrice = $cartPrice;
        return $this;
    }
    /**
     * Cart price for quote item in base currency.
     *
     * @return float
     */
    public function getBaseCartPrice(): float
    {
        return $this->baseCartPrice;
    }
    /**
     * Cart price for quote item in base currency.
     *
     * @param float $baseCartPrice
     *
     * @return self
     */
    public function setBaseCartPrice(float $baseCartPrice): self
    {
        $this->baseCartPrice = $baseCartPrice;
        return $this;
    }
    /**
     * Tax from catalog price for quote item.
     *
     * @return float
     */
    public function getCartTax(): float
    {
        return $this->cartTax;
    }
    /**
     * Tax from catalog price for quote item.
     *
     * @param float $cartTax
     *
     * @return self
     */
    public function setCartTax(float $cartTax): self
    {
        $this->cartTax = $cartTax;
        return $this;
    }
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @return float
     */
    public function getBaseCartTax(): float
    {
        return $this->baseCartTax;
    }
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @param float $baseCartTax
     *
     * @return self
     */
    public function setBaseCartTax(float $baseCartTax): self
    {
        $this->baseCartTax = $baseCartTax;
        return $this;
    }
    /**
     * Cart price with included tax for quote item.
     *
     * @return float
     */
    public function getCartPriceInclTax(): float
    {
        return $this->cartPriceInclTax;
    }
    /**
     * Cart price with included tax for quote item.
     *
     * @param float $cartPriceInclTax
     *
     * @return self
     */
    public function setCartPriceInclTax(float $cartPriceInclTax): self
    {
        $this->cartPriceInclTax = $cartPriceInclTax;
        return $this;
    }
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @return float
     */
    public function getBaseCartPriceInclTax(): float
    {
        return $this->baseCartPriceInclTax;
    }
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @param float $baseCartPriceInclTax
     *
     * @return self
     */
    public function setBaseCartPriceInclTax(float $baseCartPriceInclTax): self
    {
        $this->baseCartPriceInclTax = $baseCartPriceInclTax;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface
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
