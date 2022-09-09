<?php

namespace Kiboko\Magento\V2_4\Model;

class NegotiableQuoteDataNegotiableQuoteItemTotalsInterface
{
    /**
     * Cart price for quote item in base currency.
     *
     * @var float|null
     */
    protected $baseCartPrice;
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @var float|null
     */
    protected $baseCartPriceInclTax;
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @var float|null
     */
    protected $baseCartTax;
    /**
     * Catalog price for quote item in base currency.
     *
     * @var float|null
     */
    protected $baseCatalogPrice;
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @var float|null
     */
    protected $baseCatalogPriceInclTax;
    /**
     * Cart price for quote item.
     *
     * @var float|null
     */
    protected $cartPrice;
    /**
     * Cart price with included tax for quote item.
     *
     * @var float|null
     */
    protected $cartPriceInclTax;
    /**
     * Tax from catalog price for quote item.
     *
     * @var float|null
     */
    protected $cartTax;
    /**
     * Catalog price for quote item.
     *
     * @var float|null
     */
    protected $catalogPrice;
    /**
     * Catalog price with included tax for quote item.
     *
     * @var float|null
     */
    protected $catalogPriceInclTax;
    /**
     * Cost for quote item.
     *
     * @var float|null
     */
    protected $cost;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteItemTotalsInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Cart price for quote item in base currency.
     *
     * @return float|null
     */
    public function getBaseCartPrice(): ?float
    {
        return $this->baseCartPrice;
    }
    /**
     * Cart price for quote item in base currency.
     *
     * @param float|null $baseCartPrice
     *
     * @return self
     */
    public function setBaseCartPrice(?float $baseCartPrice): self
    {
        $this->baseCartPrice = $baseCartPrice;
        return $this;
    }
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @return float|null
     */
    public function getBaseCartPriceInclTax(): ?float
    {
        return $this->baseCartPriceInclTax;
    }
    /**
     * Cart price with included tax for quote item in base currency.
     *
     * @param float|null $baseCartPriceInclTax
     *
     * @return self
     */
    public function setBaseCartPriceInclTax(?float $baseCartPriceInclTax): self
    {
        $this->baseCartPriceInclTax = $baseCartPriceInclTax;
        return $this;
    }
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @return float|null
     */
    public function getBaseCartTax(): ?float
    {
        return $this->baseCartTax;
    }
    /**
     * Tax from catalog price for quote item in base currency.
     *
     * @param float|null $baseCartTax
     *
     * @return self
     */
    public function setBaseCartTax(?float $baseCartTax): self
    {
        $this->baseCartTax = $baseCartTax;
        return $this;
    }
    /**
     * Catalog price for quote item in base currency.
     *
     * @return float|null
     */
    public function getBaseCatalogPrice(): ?float
    {
        return $this->baseCatalogPrice;
    }
    /**
     * Catalog price for quote item in base currency.
     *
     * @param float|null $baseCatalogPrice
     *
     * @return self
     */
    public function setBaseCatalogPrice(?float $baseCatalogPrice): self
    {
        $this->baseCatalogPrice = $baseCatalogPrice;
        return $this;
    }
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @return float|null
     */
    public function getBaseCatalogPriceInclTax(): ?float
    {
        return $this->baseCatalogPriceInclTax;
    }
    /**
     * Catalog price with included tax for quote item in base currency.
     *
     * @param float|null $baseCatalogPriceInclTax
     *
     * @return self
     */
    public function setBaseCatalogPriceInclTax(?float $baseCatalogPriceInclTax): self
    {
        $this->baseCatalogPriceInclTax = $baseCatalogPriceInclTax;
        return $this;
    }
    /**
     * Cart price for quote item.
     *
     * @return float|null
     */
    public function getCartPrice(): ?float
    {
        return $this->cartPrice;
    }
    /**
     * Cart price for quote item.
     *
     * @param float|null $cartPrice
     *
     * @return self
     */
    public function setCartPrice(?float $cartPrice): self
    {
        $this->cartPrice = $cartPrice;
        return $this;
    }
    /**
     * Cart price with included tax for quote item.
     *
     * @return float|null
     */
    public function getCartPriceInclTax(): ?float
    {
        return $this->cartPriceInclTax;
    }
    /**
     * Cart price with included tax for quote item.
     *
     * @param float|null $cartPriceInclTax
     *
     * @return self
     */
    public function setCartPriceInclTax(?float $cartPriceInclTax): self
    {
        $this->cartPriceInclTax = $cartPriceInclTax;
        return $this;
    }
    /**
     * Tax from catalog price for quote item.
     *
     * @return float|null
     */
    public function getCartTax(): ?float
    {
        return $this->cartTax;
    }
    /**
     * Tax from catalog price for quote item.
     *
     * @param float|null $cartTax
     *
     * @return self
     */
    public function setCartTax(?float $cartTax): self
    {
        $this->cartTax = $cartTax;
        return $this;
    }
    /**
     * Catalog price for quote item.
     *
     * @return float|null
     */
    public function getCatalogPrice(): ?float
    {
        return $this->catalogPrice;
    }
    /**
     * Catalog price for quote item.
     *
     * @param float|null $catalogPrice
     *
     * @return self
     */
    public function setCatalogPrice(?float $catalogPrice): self
    {
        $this->catalogPrice = $catalogPrice;
        return $this;
    }
    /**
     * Catalog price with included tax for quote item.
     *
     * @return float|null
     */
    public function getCatalogPriceInclTax(): ?float
    {
        return $this->catalogPriceInclTax;
    }
    /**
     * Catalog price with included tax for quote item.
     *
     * @param float|null $catalogPriceInclTax
     *
     * @return self
     */
    public function setCatalogPriceInclTax(?float $catalogPriceInclTax): self
    {
        $this->catalogPriceInclTax = $catalogPriceInclTax;
        return $this;
    }
    /**
     * Cost for quote item.
     *
     * @return float|null
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }
    /**
     * Cost for quote item.
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
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
