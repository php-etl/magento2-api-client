<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataTotalsItemInterface
{
    /**
     * Item id
     *
     * @var int
     */
    protected $itemId;
    /**
     * Item price in quote currency.
     *
     * @var float
     */
    protected $price;
    /**
     * Item price in base currency.
     *
     * @var float
     */
    protected $basePrice;
    /**
     * Item quantity.
     *
     * @var float
     */
    protected $qty;
    /**
     * Row total in quote currency.
     *
     * @var float
     */
    protected $rowTotal;
    /**
     * Row total in base currency.
     *
     * @var float
     */
    protected $baseRowTotal;
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @var float
     */
    protected $rowTotalWithDiscount;
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Tax percent. Otherwise, null.
     *
     * @var float
     */
    protected $taxPercent;
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Discount percent. Otherwise, null.
     *
     * @var float
     */
    protected $discountPercent;
    /**
     * Price including tax in quote currency. Otherwise, null.
     *
     * @var float
     */
    protected $priceInclTax;
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @var float
     */
    protected $basePriceInclTax;
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @var float
     */
    protected $rowTotalInclTax;
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @var float
     */
    protected $baseRowTotalInclTax;
    /**
     * Item price in quote currency.
     *
     * @var string
     */
    protected $options;
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @var float
     */
    protected $weeeTaxAppliedAmount;
    /**
     * Item weee tax applied in quote currency.
     *
     * @var string
     */
    protected $weeeTaxApplied;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
     *
     * @var QuoteDataTotalsItemExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Product name. Otherwise, null.
     *
     * @var string
     */
    protected $name;
    /**
     * Item id
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Item id
     *
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Item price in quote currency.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Item price in quote currency.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Item price in base currency.
     *
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }
    /**
     * Item price in base currency.
     *
     * @param float $basePrice
     *
     * @return self
     */
    public function setBasePrice(float $basePrice): self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * Item quantity.
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     * Item quantity.
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Row total in quote currency.
     *
     * @return float
     */
    public function getRowTotal(): float
    {
        return $this->rowTotal;
    }
    /**
     * Row total in quote currency.
     *
     * @param float $rowTotal
     *
     * @return self
     */
    public function setRowTotal(float $rowTotal): self
    {
        $this->rowTotal = $rowTotal;
        return $this;
    }
    /**
     * Row total in base currency.
     *
     * @return float
     */
    public function getBaseRowTotal(): float
    {
        return $this->baseRowTotal;
    }
    /**
     * Row total in base currency.
     *
     * @param float $baseRowTotal
     *
     * @return self
     */
    public function setBaseRowTotal(float $baseRowTotal): self
    {
        $this->baseRowTotal = $baseRowTotal;
        return $this;
    }
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @return float
     */
    public function getRowTotalWithDiscount(): float
    {
        return $this->rowTotalWithDiscount;
    }
    /**
     * Row total with discount in quote currency. Otherwise, null.
     *
     * @param float $rowTotalWithDiscount
     *
     * @return self
     */
    public function setRowTotalWithDiscount(float $rowTotalWithDiscount): self
    {
        $this->rowTotalWithDiscount = $rowTotalWithDiscount;
        return $this;
    }
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount in quote currency. Otherwise, null.
     *
     * @param float $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @return float
     */
    public function getBaseTaxAmount(): float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Tax amount in base currency. Otherwise, null.
     *
     * @param float $baseTaxAmount
     *
     * @return self
     */
    public function setBaseTaxAmount(float $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Tax percent. Otherwise, null.
     *
     * @return float
     */
    public function getTaxPercent(): float
    {
        return $this->taxPercent;
    }
    /**
     * Tax percent. Otherwise, null.
     *
     * @param float $taxPercent
     *
     * @return self
     */
    public function setTaxPercent(float $taxPercent): self
    {
        $this->taxPercent = $taxPercent;
        return $this;
    }
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount in quote currency. Otherwise, null.
     *
     * @param float $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Discount amount in base currency. Otherwise, null.
     *
     * @param float $baseDiscountAmount
     *
     * @return self
     */
    public function setBaseDiscountAmount(float $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * Discount percent. Otherwise, null.
     *
     * @return float
     */
    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }
    /**
     * Discount percent. Otherwise, null.
     *
     * @param float $discountPercent
     *
     * @return self
     */
    public function setDiscountPercent(float $discountPercent): self
    {
        $this->discountPercent = $discountPercent;
        return $this;
    }
    /**
     * Price including tax in quote currency. Otherwise, null.
     *
     * @return float
     */
    public function getPriceInclTax(): float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax in quote currency. Otherwise, null.
     *
     * @param float $priceInclTax
     *
     * @return self
     */
    public function setPriceInclTax(float $priceInclTax): self
    {
        $this->priceInclTax = $priceInclTax;
        return $this;
    }
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @return float
     */
    public function getBasePriceInclTax(): float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Price including tax in base currency. Otherwise, null.
     *
     * @param float $basePriceInclTax
     *
     * @return self
     */
    public function setBasePriceInclTax(float $basePriceInclTax): self
    {
        $this->basePriceInclTax = $basePriceInclTax;
        return $this;
    }
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @return float
     */
    public function getRowTotalInclTax(): float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax in quote currency. Otherwise, null.
     *
     * @param float $rowTotalInclTax
     *
     * @return self
     */
    public function setRowTotalInclTax(float $rowTotalInclTax): self
    {
        $this->rowTotalInclTax = $rowTotalInclTax;
        return $this;
    }
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @return float
     */
    public function getBaseRowTotalInclTax(): float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Row total including tax in base currency. Otherwise, null.
     *
     * @param float $baseRowTotalInclTax
     *
     * @return self
     */
    public function setBaseRowTotalInclTax(float $baseRowTotalInclTax): self
    {
        $this->baseRowTotalInclTax = $baseRowTotalInclTax;
        return $this;
    }
    /**
     * Item price in quote currency.
     *
     * @return string
     */
    public function getOptions(): string
    {
        return $this->options;
    }
    /**
     * Item price in quote currency.
     *
     * @param string $options
     *
     * @return self
     */
    public function setOptions(string $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @return float
     */
    public function getWeeeTaxAppliedAmount(): float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @param float $weeeTaxAppliedAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedAmount(float $weeeTaxAppliedAmount): self
    {
        $this->weeeTaxAppliedAmount = $weeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Item weee tax applied in quote currency.
     *
     * @return string
     */
    public function getWeeeTaxApplied(): string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * Item weee tax applied in quote currency.
     *
     * @param string $weeeTaxApplied
     *
     * @return self
     */
    public function setWeeeTaxApplied(string $weeeTaxApplied): self
    {
        $this->weeeTaxApplied = $weeeTaxApplied;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
     *
     * @return QuoteDataTotalsItemExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataTotalsItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsItemInterface
     *
     * @param QuoteDataTotalsItemExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataTotalsItemExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Product name. Otherwise, null.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
