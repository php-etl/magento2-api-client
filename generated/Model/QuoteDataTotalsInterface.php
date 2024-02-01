<?php

namespace Kiboko\Magento\Model;

class QuoteDataTotalsInterface
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
     * Grand total in quote currency
     *
     * @var float|null
     */
    protected $grandTotal;
    /**
     * Grand total in base currency
     *
     * @var float|null
     */
    protected $baseGrandTotal;
    /**
     * Subtotal in quote currency
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * Subtotal in base currency
     *
     * @var float|null
     */
    protected $baseSubtotal;
    /**
     * Discount amount in quote currency
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount amount in base currency
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Subtotal in quote currency with applied discount
     *
     * @var float|null
     */
    protected $subtotalWithDiscount;
    /**
     * Subtotal in base currency with applied discount
     *
     * @var float|null
     */
    protected $baseSubtotalWithDiscount;
    /**
     * Shipping amount in quote currency
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Shipping amount in base currency
     *
     * @var float|null
     */
    protected $baseShippingAmount;
    /**
     * Shipping discount amount in quote currency
     *
     * @var float|null
     */
    protected $shippingDiscountAmount;
    /**
     * Shipping discount amount in base currency
     *
     * @var float|null
     */
    protected $baseShippingDiscountAmount;
    /**
     * Tax amount in quote currency
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Tax amount in base currency
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedAmount;
    /**
     * Shipping tax amount in quote currency
     *
     * @var float|null
     */
    protected $shippingTaxAmount;
    /**
     * Shipping tax amount in base currency
     *
     * @var float|null
     */
    protected $baseShippingTaxAmount;
    /**
     * Subtotal including tax in quote currency
     *
     * @var float|null
     */
    protected $subtotalInclTax;
    /**
     * Subtotal including tax in base currency
     *
     * @var float|null
     */
    protected $baseSubtotalInclTax;
    /**
     * Shipping including tax in quote currency
     *
     * @var float|null
     */
    protected $shippingInclTax;
    /**
     * Shipping including tax in base currency
     *
     * @var float|null
     */
    protected $baseShippingInclTax;
    /**
     * Base currency code
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * Quote currency code
     *
     * @var string|null
     */
    protected $quoteCurrencyCode;
    /**
     * Applied coupon code
     *
     * @var string|null
     */
    protected $couponCode;
    /**
     * Items qty
     *
     * @var int|null
     */
    protected $itemsQty;
    /**
     * Totals by items
     *
     * @var QuoteDataTotalsItemInterface[]|null
     */
    protected $items;
    /**
     * Dynamically calculated totals
     *
     * @var QuoteDataTotalSegmentInterface[]|null
     */
    protected $totalSegments;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @var QuoteDataTotalsExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Grand total in quote currency
     *
     * @return float|null
     */
    public function getGrandTotal() : ?float
    {
        return $this->grandTotal;
    }
    /**
     * Grand total in quote currency
     *
     * @param float|null $grandTotal
     *
     * @return self
     */
    public function setGrandTotal(?float $grandTotal) : self
    {
        $this->initialized['grandTotal'] = true;
        $this->grandTotal = $grandTotal;
        return $this;
    }
    /**
     * Grand total in base currency
     *
     * @return float|null
     */
    public function getBaseGrandTotal() : ?float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Grand total in base currency
     *
     * @param float|null $baseGrandTotal
     *
     * @return self
     */
    public function setBaseGrandTotal(?float $baseGrandTotal) : self
    {
        $this->initialized['baseGrandTotal'] = true;
        $this->baseGrandTotal = $baseGrandTotal;
        return $this;
    }
    /**
     * Subtotal in quote currency
     *
     * @return float|null
     */
    public function getSubtotal() : ?float
    {
        return $this->subtotal;
    }
    /**
     * Subtotal in quote currency
     *
     * @param float|null $subtotal
     *
     * @return self
     */
    public function setSubtotal(?float $subtotal) : self
    {
        $this->initialized['subtotal'] = true;
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Subtotal in base currency
     *
     * @return float|null
     */
    public function getBaseSubtotal() : ?float
    {
        return $this->baseSubtotal;
    }
    /**
     * Subtotal in base currency
     *
     * @param float|null $baseSubtotal
     *
     * @return self
     */
    public function setBaseSubtotal(?float $baseSubtotal) : self
    {
        $this->initialized['baseSubtotal'] = true;
        $this->baseSubtotal = $baseSubtotal;
        return $this;
    }
    /**
     * Discount amount in quote currency
     *
     * @return float|null
     */
    public function getDiscountAmount() : ?float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount in quote currency
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
     * Discount amount in base currency
     *
     * @return float|null
     */
    public function getBaseDiscountAmount() : ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Discount amount in base currency
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
     * Subtotal in quote currency with applied discount
     *
     * @return float|null
     */
    public function getSubtotalWithDiscount() : ?float
    {
        return $this->subtotalWithDiscount;
    }
    /**
     * Subtotal in quote currency with applied discount
     *
     * @param float|null $subtotalWithDiscount
     *
     * @return self
     */
    public function setSubtotalWithDiscount(?float $subtotalWithDiscount) : self
    {
        $this->initialized['subtotalWithDiscount'] = true;
        $this->subtotalWithDiscount = $subtotalWithDiscount;
        return $this;
    }
    /**
     * Subtotal in base currency with applied discount
     *
     * @return float|null
     */
    public function getBaseSubtotalWithDiscount() : ?float
    {
        return $this->baseSubtotalWithDiscount;
    }
    /**
     * Subtotal in base currency with applied discount
     *
     * @param float|null $baseSubtotalWithDiscount
     *
     * @return self
     */
    public function setBaseSubtotalWithDiscount(?float $baseSubtotalWithDiscount) : self
    {
        $this->initialized['baseSubtotalWithDiscount'] = true;
        $this->baseSubtotalWithDiscount = $baseSubtotalWithDiscount;
        return $this;
    }
    /**
     * Shipping amount in quote currency
     *
     * @return float|null
     */
    public function getShippingAmount() : ?float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount in quote currency
     *
     * @param float|null $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(?float $shippingAmount) : self
    {
        $this->initialized['shippingAmount'] = true;
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping amount in base currency
     *
     * @return float|null
     */
    public function getBaseShippingAmount() : ?float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Shipping amount in base currency
     *
     * @param float|null $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(?float $baseShippingAmount) : self
    {
        $this->initialized['baseShippingAmount'] = true;
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Shipping discount amount in quote currency
     *
     * @return float|null
     */
    public function getShippingDiscountAmount() : ?float
    {
        return $this->shippingDiscountAmount;
    }
    /**
     * Shipping discount amount in quote currency
     *
     * @param float|null $shippingDiscountAmount
     *
     * @return self
     */
    public function setShippingDiscountAmount(?float $shippingDiscountAmount) : self
    {
        $this->initialized['shippingDiscountAmount'] = true;
        $this->shippingDiscountAmount = $shippingDiscountAmount;
        return $this;
    }
    /**
     * Shipping discount amount in base currency
     *
     * @return float|null
     */
    public function getBaseShippingDiscountAmount() : ?float
    {
        return $this->baseShippingDiscountAmount;
    }
    /**
     * Shipping discount amount in base currency
     *
     * @param float|null $baseShippingDiscountAmount
     *
     * @return self
     */
    public function setBaseShippingDiscountAmount(?float $baseShippingDiscountAmount) : self
    {
        $this->initialized['baseShippingDiscountAmount'] = true;
        $this->baseShippingDiscountAmount = $baseShippingDiscountAmount;
        return $this;
    }
    /**
     * Tax amount in quote currency
     *
     * @return float|null
     */
    public function getTaxAmount() : ?float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount in quote currency
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
     * Tax amount in base currency
     *
     * @return float|null
     */
    public function getBaseTaxAmount() : ?float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Tax amount in base currency
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
     * Shipping tax amount in quote currency
     *
     * @return float|null
     */
    public function getShippingTaxAmount() : ?float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Shipping tax amount in quote currency
     *
     * @param float|null $shippingTaxAmount
     *
     * @return self
     */
    public function setShippingTaxAmount(?float $shippingTaxAmount) : self
    {
        $this->initialized['shippingTaxAmount'] = true;
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }
    /**
     * Shipping tax amount in base currency
     *
     * @return float|null
     */
    public function getBaseShippingTaxAmount() : ?float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Shipping tax amount in base currency
     *
     * @param float|null $baseShippingTaxAmount
     *
     * @return self
     */
    public function setBaseShippingTaxAmount(?float $baseShippingTaxAmount) : self
    {
        $this->initialized['baseShippingTaxAmount'] = true;
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }
    /**
     * Subtotal including tax in quote currency
     *
     * @return float|null
     */
    public function getSubtotalInclTax() : ?float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax in quote currency
     *
     * @param float|null $subtotalInclTax
     *
     * @return self
     */
    public function setSubtotalInclTax(?float $subtotalInclTax) : self
    {
        $this->initialized['subtotalInclTax'] = true;
        $this->subtotalInclTax = $subtotalInclTax;
        return $this;
    }
    /**
     * Subtotal including tax in base currency
     *
     * @return float|null
     */
    public function getBaseSubtotalInclTax() : ?float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Subtotal including tax in base currency
     *
     * @param float|null $baseSubtotalInclTax
     *
     * @return self
     */
    public function setBaseSubtotalInclTax(?float $baseSubtotalInclTax) : self
    {
        $this->initialized['baseSubtotalInclTax'] = true;
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;
        return $this;
    }
    /**
     * Shipping including tax in quote currency
     *
     * @return float|null
     */
    public function getShippingInclTax() : ?float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax in quote currency
     *
     * @param float|null $shippingInclTax
     *
     * @return self
     */
    public function setShippingInclTax(?float $shippingInclTax) : self
    {
        $this->initialized['shippingInclTax'] = true;
        $this->shippingInclTax = $shippingInclTax;
        return $this;
    }
    /**
     * Shipping including tax in base currency
     *
     * @return float|null
     */
    public function getBaseShippingInclTax() : ?float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Shipping including tax in base currency
     *
     * @param float|null $baseShippingInclTax
     *
     * @return self
     */
    public function setBaseShippingInclTax(?float $baseShippingInclTax) : self
    {
        $this->initialized['baseShippingInclTax'] = true;
        $this->baseShippingInclTax = $baseShippingInclTax;
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
     * Applied coupon code
     *
     * @return string|null
     */
    public function getCouponCode() : ?string
    {
        return $this->couponCode;
    }
    /**
     * Applied coupon code
     *
     * @param string|null $couponCode
     *
     * @return self
     */
    public function setCouponCode(?string $couponCode) : self
    {
        $this->initialized['couponCode'] = true;
        $this->couponCode = $couponCode;
        return $this;
    }
    /**
     * Items qty
     *
     * @return int|null
     */
    public function getItemsQty() : ?int
    {
        return $this->itemsQty;
    }
    /**
     * Items qty
     *
     * @param int|null $itemsQty
     *
     * @return self
     */
    public function setItemsQty(?int $itemsQty) : self
    {
        $this->initialized['itemsQty'] = true;
        $this->itemsQty = $itemsQty;
        return $this;
    }
    /**
     * Totals by items
     *
     * @return QuoteDataTotalsItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Totals by items
     *
     * @param QuoteDataTotalsItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Dynamically calculated totals
     *
     * @return QuoteDataTotalSegmentInterface[]|null
     */
    public function getTotalSegments() : ?array
    {
        return $this->totalSegments;
    }
    /**
     * Dynamically calculated totals
     *
     * @param QuoteDataTotalSegmentInterface[]|null $totalSegments
     *
     * @return self
     */
    public function setTotalSegments(?array $totalSegments) : self
    {
        $this->initialized['totalSegments'] = true;
        $this->totalSegments = $totalSegments;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @return QuoteDataTotalsExtensionInterface|null
     */
    public function getExtensionAttributes() : ?QuoteDataTotalsExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @param QuoteDataTotalsExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataTotalsExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}