<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalsItemInterface
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
     * Item id
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * Item price in quote currency.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Item price in base currency.
     *
     * @var float|null
     */
    protected $basePrice;
    /**
     * Item quantity.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Row total in quote currency.
     *
     * @var float|null
     */
    protected $rowTotal;
    /**
     * Row total in base currency.
     *
     * @var float|null
     */
    protected $baseRowTotal;
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $rowTotalWithDiscount;
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Tax percent. Otherwise, null.
     *
     * @var float|null
     */
    protected $taxPercent;
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Discount percent. Otherwise, null.
     *
     * @var float|null
     */
    protected $discountPercent;
    /**
     * Price including tax in quote currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $priceInclTax;
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $basePriceInclTax;
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $rowTotalInclTax;
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @var float|null
     */
    protected $baseRowTotalInclTax;
    /**
     * Item price in quote currency.
     *
     * @var string|null
     */
    protected $options;
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedAmount;
    /**
     * Item weee tax applied in quote currency.
     *
     * @var string|null
     */
    protected $weeeTaxApplied;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Product name. Otherwise, null.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Item id
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * Item id
     *
     * @param int|null $itemId
     *
     * @return self
     */
    public function setItemId(?int $itemId) : self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Item price in quote currency.
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Item price in quote currency.
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Item price in base currency.
     *
     * @return float|null
     */
    public function getBasePrice() : ?float
    {
        return $this->basePrice;
    }
    /**
     * Item price in base currency.
     *
     * @param float|null $basePrice
     *
     * @return self
     */
    public function setBasePrice(?float $basePrice) : self
    {
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * Item quantity.
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Item quantity.
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Row total in quote currency.
     *
     * @return float|null
     */
    public function getRowTotal() : ?float
    {
        return $this->rowTotal;
    }
    /**
     * Row total in quote currency.
     *
     * @param float|null $rowTotal
     *
     * @return self
     */
    public function setRowTotal(?float $rowTotal) : self
    {
        $this->initialized['rowTotal'] = true;
        $this->rowTotal = $rowTotal;
        return $this;
    }
    /**
     * Row total in base currency.
     *
     * @return float|null
     */
    public function getBaseRowTotal() : ?float
    {
        return $this->baseRowTotal;
    }
    /**
     * Row total in base currency.
     *
     * @param float|null $baseRowTotal
     *
     * @return self
     */
    public function setBaseRowTotal(?float $baseRowTotal) : self
    {
        $this->initialized['baseRowTotal'] = true;
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getRowTotalWithDiscount() : ?float
    {
        return $this->rowTotalWithDiscount;
    }
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @param float|null $rowTotalWithDiscount
     *
     * @return self
     */
    public function setRowTotalWithDiscount(?float $rowTotalWithDiscount) : self
    {
        $this->initialized['rowTotalWithDiscount'] = true;
        $this->rowTotalWithDiscount = $rowTotalWithDiscount;
        return $this;
    }
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getTaxAmount() : ?float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @param float|null $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(?float $taxAmount) : self
    {
        $this->initialized['taxAmount'] = true;
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getBaseTaxAmount() : ?float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @param float|null $baseTaxAmount
     *
     * @return self
     */
    public function setBaseTaxAmount(?float $baseTaxAmount) : self
    {
        $this->initialized['baseTaxAmount'] = true;
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Tax percent. Otherwise, null.
     *
     * @return float|null
     */
    public function getTaxPercent() : ?float
    {
        return $this->taxPercent;
    }
    /**
     * Tax percent. Otherwise, null.
     *
     * @param float|null $taxPercent
     *
     * @return self
     */
    public function setTaxPercent(?float $taxPercent) : self
    {
        $this->initialized['taxPercent'] = true;
        $this->taxPercent = $taxPercent;
        return $this;
    }
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getDiscountAmount() : ?float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @param float|null $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(?float $discountAmount) : self
    {
        $this->initialized['discountAmount'] = true;
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount() : ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @param float|null $baseDiscountAmount
     *
     * @return self
     */
    public function setBaseDiscountAmount(?float $baseDiscountAmount) : self
    {
        $this->initialized['baseDiscountAmount'] = true;
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * Discount percent. Otherwise, null.
     *
     * @return float|null
     */
    public function getDiscountPercent() : ?float
    {
        return $this->discountPercent;
    }
    /**
     * Discount percent. Otherwise, null.
     *
     * @param float|null $discountPercent
     *
     * @return self
     */
    public function setDiscountPercent(?float $discountPercent) : self
    {
        $this->initialized['discountPercent'] = true;
        $this->discountPercent = $discountPercent;
        return $this;
    }
    /**
     * Price including tax in quote currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getPriceInclTax() : ?float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax in quote currency. Otherwise, null.
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
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getBasePriceInclTax() : ?float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @param float|null $basePriceInclTax
     *
     * @return self
     */
    public function setBasePriceInclTax(?float $basePriceInclTax) : self
    {
        $this->initialized['basePriceInclTax'] = true;
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getRowTotalInclTax() : ?float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @param float|null $rowTotalInclTax
     *
     * @return self
     */
    public function setRowTotalInclTax(?float $rowTotalInclTax) : self
    {
        $this->initialized['rowTotalInclTax'] = true;
        $this->rowTotalInclTax = $rowTotalInclTax;
        return $this;
    }
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @return float|null
     */
    public function getBaseRowTotalInclTax() : ?float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @param float|null $baseRowTotalInclTax
     *
     * @return self
     */
    public function setBaseRowTotalInclTax(?float $baseRowTotalInclTax) : self
    {
        $this->initialized['baseRowTotalInclTax'] = true;
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }
    /**
     * Item price in quote currency.
     *
     * @return string|null
     */
    public function getOptions() : ?string
    {
        return $this->options;
    }
    /**
     * Item price in quote currency.
     *
     * @param string|null $options
     *
     * @return self
     */
    public function setOptions(?string $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @return float|null
     */
    public function getWeeeTaxAppliedAmount() : ?float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @param float|null $weeeTaxAppliedAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedAmount(?float $weeeTaxAppliedAmount) : self
    {
        $this->initialized['weeeTaxAppliedAmount'] = true;
        $this->weeeTaxAppliedAmount = $weeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Item weee tax applied in quote currency.
     *
     * @return string|null
     */
    public function getWeeeTaxApplied() : ?string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * Item weee tax applied in quote currency.
     *
     * @param string|null $weeeTaxApplied
     *
     * @return self
     */
    public function setWeeeTaxApplied(?string $weeeTaxApplied) : self
    {
        $this->initialized['weeeTaxApplied'] = true;
        $this->weeeTaxApplied = $weeeTaxApplied;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
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
     * Product name. Otherwise, null.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}