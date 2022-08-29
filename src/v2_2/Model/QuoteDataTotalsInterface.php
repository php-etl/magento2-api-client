<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataTotalsInterface
{
    /**
     * Base currency code
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * Discount amount in base currency
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Grand total in base currency
     *
     * @var float
     */
    protected $baseGrandTotal;
    /**
     * Shipping amount in base currency
     *
     * @var float
     */
    protected $baseShippingAmount;
    /**
     * Shipping discount amount in base currency
     *
     * @var float
     */
    protected $baseShippingDiscountAmount;
    /**
     * Shipping including tax in base currency
     *
     * @var float
     */
    protected $baseShippingInclTax;
    /**
     * Shipping tax amount in base currency
     *
     * @var float
     */
    protected $baseShippingTaxAmount;
    /**
     * Subtotal in base currency
     *
     * @var float
     */
    protected $baseSubtotal;
    /**
     * Subtotal including tax in base currency
     *
     * @var float
     */
    protected $baseSubtotalInclTax;
    /**
     * Subtotal in base currency with applied discount
     *
     * @var float
     */
    protected $baseSubtotalWithDiscount;
    /**
     * Tax amount in base currency
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Applied coupon code
     *
     * @var string
     */
    protected $couponCode;
    /**
     * Discount amount in quote currency
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @var QuoteDataTotalsExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Grand total in quote currency
     *
     * @var float
     */
    protected $grandTotal;
    /**
     * Totals by items
     *
     * @var QuoteDataTotalsItemInterface[]
     */
    protected $items;
    /**
     * Items qty
     *
     * @var int
     */
    protected $itemsQty;
    /**
     * Quote currency code
     *
     * @var string
     */
    protected $quoteCurrencyCode;
    /**
     * Shipping amount in quote currency
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Shipping discount amount in quote currency
     *
     * @var float
     */
    protected $shippingDiscountAmount;
    /**
     * Shipping including tax in quote currency
     *
     * @var float
     */
    protected $shippingInclTax;
    /**
     * Shipping tax amount in quote currency
     *
     * @var float
     */
    protected $shippingTaxAmount;
    /**
     * Subtotal in quote currency
     *
     * @var float
     */
    protected $subtotal;
    /**
     * Subtotal including tax in quote currency
     *
     * @var float
     */
    protected $subtotalInclTax;
    /**
     * Subtotal in quote currency with applied discount
     *
     * @var float
     */
    protected $subtotalWithDiscount;
    /**
     * Tax amount in quote currency
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Dynamically calculated totals
     *
     * @var QuoteDataTotalSegmentInterface[]
     */
    protected $totalSegments;
    /**
     * Item weee tax applied amount in quote currency.
     *
     * @var float
     */
    protected $weeeTaxAppliedAmount;
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
     * Discount amount in base currency
     *
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Discount amount in base currency
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
     * Grand total in base currency
     *
     * @return float
     */
    public function getBaseGrandTotal(): float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Grand total in base currency
     *
     * @param float $baseGrandTotal
     *
     * @return self
     */
    public function setBaseGrandTotal(float $baseGrandTotal): self
    {
        $this->baseGrandTotal = $baseGrandTotal;
        return $this;
    }
    /**
     * Shipping amount in base currency
     *
     * @return float
     */
    public function getBaseShippingAmount(): float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Shipping amount in base currency
     *
     * @param float $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Shipping discount amount in base currency
     *
     * @return float
     */
    public function getBaseShippingDiscountAmount(): float
    {
        return $this->baseShippingDiscountAmount;
    }
    /**
     * Shipping discount amount in base currency
     *
     * @param float $baseShippingDiscountAmount
     *
     * @return self
     */
    public function setBaseShippingDiscountAmount(float $baseShippingDiscountAmount): self
    {
        $this->baseShippingDiscountAmount = $baseShippingDiscountAmount;
        return $this;
    }
    /**
     * Shipping including tax in base currency
     *
     * @return float
     */
    public function getBaseShippingInclTax(): float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Shipping including tax in base currency
     *
     * @param float $baseShippingInclTax
     *
     * @return self
     */
    public function setBaseShippingInclTax(float $baseShippingInclTax): self
    {
        $this->baseShippingInclTax = $baseShippingInclTax;
        return $this;
    }
    /**
     * Shipping tax amount in base currency
     *
     * @return float
     */
    public function getBaseShippingTaxAmount(): float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Shipping tax amount in base currency
     *
     * @param float $baseShippingTaxAmount
     *
     * @return self
     */
    public function setBaseShippingTaxAmount(float $baseShippingTaxAmount): self
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }
    /**
     * Subtotal in base currency
     *
     * @return float
     */
    public function getBaseSubtotal(): float
    {
        return $this->baseSubtotal;
    }
    /**
     * Subtotal in base currency
     *
     * @param float $baseSubtotal
     *
     * @return self
     */
    public function setBaseSubtotal(float $baseSubtotal): self
    {
        $this->baseSubtotal = $baseSubtotal;
        return $this;
    }
    /**
     * Subtotal including tax in base currency
     *
     * @return float
     */
    public function getBaseSubtotalInclTax(): float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Subtotal including tax in base currency
     *
     * @param float $baseSubtotalInclTax
     *
     * @return self
     */
    public function setBaseSubtotalInclTax(float $baseSubtotalInclTax): self
    {
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;
        return $this;
    }
    /**
     * Subtotal in base currency with applied discount
     *
     * @return float
     */
    public function getBaseSubtotalWithDiscount(): float
    {
        return $this->baseSubtotalWithDiscount;
    }
    /**
     * Subtotal in base currency with applied discount
     *
     * @param float $baseSubtotalWithDiscount
     *
     * @return self
     */
    public function setBaseSubtotalWithDiscount(float $baseSubtotalWithDiscount): self
    {
        $this->baseSubtotalWithDiscount = $baseSubtotalWithDiscount;
        return $this;
    }
    /**
     * Tax amount in base currency
     *
     * @return float
     */
    public function getBaseTaxAmount(): float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Tax amount in base currency
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
     * Applied coupon code
     *
     * @return string
     */
    public function getCouponCode(): string
    {
        return $this->couponCode;
    }
    /**
     * Applied coupon code
     *
     * @param string $couponCode
     *
     * @return self
     */
    public function setCouponCode(string $couponCode): self
    {
        $this->couponCode = $couponCode;
        return $this;
    }
    /**
     * Discount amount in quote currency
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount in quote currency
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @return QuoteDataTotalsExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataTotalsExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     *
     * @param QuoteDataTotalsExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataTotalsExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Grand total in quote currency
     *
     * @return float
     */
    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }
    /**
     * Grand total in quote currency
     *
     * @param float $grandTotal
     *
     * @return self
     */
    public function setGrandTotal(float $grandTotal): self
    {
        $this->grandTotal = $grandTotal;
        return $this;
    }
    /**
     * Totals by items
     *
     * @return QuoteDataTotalsItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Totals by items
     *
     * @param QuoteDataTotalsItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Items qty
     *
     * @return int
     */
    public function getItemsQty(): int
    {
        return $this->itemsQty;
    }
    /**
     * Items qty
     *
     * @param int $itemsQty
     *
     * @return self
     */
    public function setItemsQty(int $itemsQty): self
    {
        $this->itemsQty = $itemsQty;
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
     * Shipping amount in quote currency
     *
     * @return float
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount in quote currency
     *
     * @param float $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping discount amount in quote currency
     *
     * @return float
     */
    public function getShippingDiscountAmount(): float
    {
        return $this->shippingDiscountAmount;
    }
    /**
     * Shipping discount amount in quote currency
     *
     * @param float $shippingDiscountAmount
     *
     * @return self
     */
    public function setShippingDiscountAmount(float $shippingDiscountAmount): self
    {
        $this->shippingDiscountAmount = $shippingDiscountAmount;
        return $this;
    }
    /**
     * Shipping including tax in quote currency
     *
     * @return float
     */
    public function getShippingInclTax(): float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax in quote currency
     *
     * @param float $shippingInclTax
     *
     * @return self
     */
    public function setShippingInclTax(float $shippingInclTax): self
    {
        $this->shippingInclTax = $shippingInclTax;
        return $this;
    }
    /**
     * Shipping tax amount in quote currency
     *
     * @return float
     */
    public function getShippingTaxAmount(): float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Shipping tax amount in quote currency
     *
     * @param float $shippingTaxAmount
     *
     * @return self
     */
    public function setShippingTaxAmount(float $shippingTaxAmount): self
    {
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }
    /**
     * Subtotal in quote currency
     *
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }
    /**
     * Subtotal in quote currency
     *
     * @param float $subtotal
     *
     * @return self
     */
    public function setSubtotal(float $subtotal): self
    {
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Subtotal including tax in quote currency
     *
     * @return float
     */
    public function getSubtotalInclTax(): float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax in quote currency
     *
     * @param float $subtotalInclTax
     *
     * @return self
     */
    public function setSubtotalInclTax(float $subtotalInclTax): self
    {
        $this->subtotalInclTax = $subtotalInclTax;
        return $this;
    }
    /**
     * Subtotal in quote currency with applied discount
     *
     * @return float
     */
    public function getSubtotalWithDiscount(): float
    {
        return $this->subtotalWithDiscount;
    }
    /**
     * Subtotal in quote currency with applied discount
     *
     * @param float $subtotalWithDiscount
     *
     * @return self
     */
    public function setSubtotalWithDiscount(float $subtotalWithDiscount): self
    {
        $this->subtotalWithDiscount = $subtotalWithDiscount;
        return $this;
    }
    /**
     * Tax amount in quote currency
     *
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount in quote currency
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
     * Dynamically calculated totals
     *
     * @return QuoteDataTotalSegmentInterface[]
     */
    public function getTotalSegments(): array
    {
        return $this->totalSegments;
    }
    /**
     * Dynamically calculated totals
     *
     * @param QuoteDataTotalSegmentInterface[] $totalSegments
     *
     * @return self
     */
    public function setTotalSegments(array $totalSegments): self
    {
        $this->totalSegments = $totalSegments;
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
}
