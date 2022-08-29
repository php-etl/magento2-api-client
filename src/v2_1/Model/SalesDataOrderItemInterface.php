<?php

namespace Kiboko\Magento\v2_1\Model;

class SalesDataOrderItemInterface
{
    /**
     * Additional data.
     *
     * @var string
     */
    protected $additionalData;
    /**
     * Amount refunded.
     *
     * @var float
     */
    protected $amountRefunded;
    /**
     * Applied rule IDs.
     *
     * @var string
     */
    protected $appliedRuleIds;
    /**
     * Base amount refunded.
     *
     * @var float
     */
    protected $baseAmountRefunded;
    /**
     * Base cost.
     *
     * @var float
     */
    protected $baseCost;
    /**
     * Base discount amount.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Base discount invoiced.
     *
     * @var float
     */
    protected $baseDiscountInvoiced;
    /**
     * Base discount refunded.
     *
     * @var float
     */
    protected $baseDiscountRefunded;
    /**
     * Base discount tax compensation amount.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base discount tax compensation invoiced.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationInvoiced;
    /**
     * Base discount tax compensation refunded.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationRefunded;
    /**
     * Base original price.
     *
     * @var float
     */
    protected $baseOriginalPrice;
    /**
     * Base price.
     *
     * @var float
     */
    protected $basePrice;
    /**
     * Base price including tax.
     *
     * @var float
     */
    protected $basePriceInclTax;
    /**
     * Base row invoiced.
     *
     * @var float
     */
    protected $baseRowInvoiced;
    /**
     * Base row total.
     *
     * @var float
     */
    protected $baseRowTotal;
    /**
     * Base row total including tax.
     *
     * @var float
     */
    protected $baseRowTotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Base tax before discount.
     *
     * @var float
     */
    protected $baseTaxBeforeDiscount;
    /**
     * Base tax invoiced.
     *
     * @var float
     */
    protected $baseTaxInvoiced;
    /**
     * Base tax refunded.
     *
     * @var float
     */
    protected $baseTaxRefunded;
    /**
     * Base WEEE tax applied amount.
     *
     * @var float
     */
    protected $baseWeeeTaxAppliedAmount;
    /**
     * Base WEEE tax applied row amount.
     *
     * @var float
     */
    protected $baseWeeeTaxAppliedRowAmnt;
    /**
     * Base WEEE tax disposition.
     *
     * @var float
     */
    protected $baseWeeeTaxDisposition;
    /**
     * Base WEEE tax row disposition.
     *
     * @var float
     */
    protected $baseWeeeTaxRowDisposition;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Description.
     *
     * @var string
     */
    protected $description;
    /**
     * Discount amount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Discount invoiced.
     *
     * @var float
     */
    protected $discountInvoiced;
    /**
     * Discount percent.
     *
     * @var float
     */
    protected $discountPercent;
    /**
     * Discount refunded.
     *
     * @var float
     */
    protected $discountRefunded;
    /**
     * Event ID.
     *
     * @var int
     */
    protected $eventId;
    /**
     * External order item ID.
     *
     * @var string
     */
    protected $extOrderItemId;
    /**
     * Free-shipping flag value.
     *
     * @var int
     */
    protected $freeShipping;
    /**
     * GW base price.
     *
     * @var float
     */
    protected $gwBasePrice;
    /**
     * GW base price invoiced.
     *
     * @var float
     */
    protected $gwBasePriceInvoiced;
    /**
     * GW base price refunded.
     *
     * @var float
     */
    protected $gwBasePriceRefunded;
    /**
     * GW base tax amount.
     *
     * @var float
     */
    protected $gwBaseTaxAmount;
    /**
     * GW base tax amount invoiced.
     *
     * @var float
     */
    protected $gwBaseTaxAmountInvoiced;
    /**
     * GW base tax amount refunded.
     *
     * @var float
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     * GW ID.
     *
     * @var int
     */
    protected $gwId;
    /**
     * GW price.
     *
     * @var float
     */
    protected $gwPrice;
    /**
     * GW price invoiced.
     *
     * @var float
     */
    protected $gwPriceInvoiced;
    /**
     * GW price refunded.
     *
     * @var float
     */
    protected $gwPriceRefunded;
    /**
     * GW tax amount.
     *
     * @var float
     */
    protected $gwTaxAmount;
    /**
     * GW tax amount invoiced.
     *
     * @var float
     */
    protected $gwTaxAmountInvoiced;
    /**
     * GW tax amount refunded.
     *
     * @var float
     */
    protected $gwTaxAmountRefunded;
    /**
     * Discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Discount tax compensation canceled.
     *
     * @var float
     */
    protected $discountTaxCompensationCanceled;
    /**
     * Discount tax compensation invoiced.
     *
     * @var float
     */
    protected $discountTaxCompensationInvoiced;
    /**
     * Discount tax compensation refunded.
     *
     * @var float
     */
    protected $discountTaxCompensationRefunded;
    /**
     * Is-quantity-decimal flag value.
     *
     * @var int
     */
    protected $isQtyDecimal;
    /**
     * Is-virtual flag value.
     *
     * @var int
     */
    protected $isVirtual;
    /**
     * Item ID.
     *
     * @var int
     */
    protected $itemId;
    /**
     * Locked DO invoice flag value.
     *
     * @var int
     */
    protected $lockedDoInvoice;
    /**
     * Locked DO ship flag value.
     *
     * @var int
     */
    protected $lockedDoShip;
    /**
     * Name.
     *
     * @var string
     */
    protected $name;
    /**
     * No-discount flag value.
     *
     * @var int
     */
    protected $noDiscount;
    /**
     * Order ID.
     *
     * @var int
     */
    protected $orderId;
    /**
     * Original price.
     *
     * @var float
     */
    protected $originalPrice;
    /**
     * Parent item ID.
     *
     * @var int
     */
    protected $parentItemId;
    /**
     * Price.
     *
     * @var float
     */
    protected $price;
    /**
     * Price including tax.
     *
     * @var float
     */
    protected $priceInclTax;
    /**
     * Product ID.
     *
     * @var int
     */
    protected $productId;
    /**
     * Product type.
     *
     * @var string
     */
    protected $productType;
    /**
     * Quantity backordered.
     *
     * @var float
     */
    protected $qtyBackordered;
    /**
     * Quantity canceled.
     *
     * @var float
     */
    protected $qtyCanceled;
    /**
     * Quantity invoiced.
     *
     * @var float
     */
    protected $qtyInvoiced;
    /**
     * Quantity ordered.
     *
     * @var float
     */
    protected $qtyOrdered;
    /**
     * Quantity refunded.
     *
     * @var float
     */
    protected $qtyRefunded;
    /**
     * Quantity returned.
     *
     * @var float
     */
    protected $qtyReturned;
    /**
     * Quantity shipped.
     *
     * @var float
     */
    protected $qtyShipped;
    /**
     * Quote item ID.
     *
     * @var int
     */
    protected $quoteItemId;
    /**
     * Row invoiced.
     *
     * @var float
     */
    protected $rowInvoiced;
    /**
     * Row total.
     *
     * @var float
     */
    protected $rowTotal;
    /**
     * Row total including tax.
     *
     * @var float
     */
    protected $rowTotalInclTax;
    /**
     * Row weight.
     *
     * @var float
     */
    protected $rowWeight;
    /**
     * SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Store ID.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Tax amount.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Tax before discount.
     *
     * @var float
     */
    protected $taxBeforeDiscount;
    /**
     * Tax canceled.
     *
     * @var float
     */
    protected $taxCanceled;
    /**
     * Tax invoiced.
     *
     * @var float
     */
    protected $taxInvoiced;
    /**
     * Tax percent.
     *
     * @var float
     */
    protected $taxPercent;
    /**
     * Tax refunded.
     *
     * @var float
     */
    protected $taxRefunded;
    /**
     * Updated-at timestamp.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * WEEE tax applied.
     *
     * @var string
     */
    protected $weeeTaxApplied;
    /**
     * WEEE tax applied amount.
     *
     * @var float
     */
    protected $weeeTaxAppliedAmount;
    /**
     * WEEE tax applied row amount.
     *
     * @var float
     */
    protected $weeeTaxAppliedRowAmount;
    /**
     * WEEE tax disposition.
     *
     * @var float
     */
    protected $weeeTaxDisposition;
    /**
     * WEEE tax row disposition.
     *
     * @var float
     */
    protected $weeeTaxRowDisposition;
    /**
     * Weight.
     *
     * @var float
     */
    protected $weight;
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderItemInterface
     */
    protected $parentItem;
    /**
     * Product option interface
     *
     * @var CatalogDataProductOptionInterface
     */
    protected $productOption;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @var SalesDataOrderItemExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Additional data.
     *
     * @return string
     */
    public function getAdditionalData(): string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string $additionalData
     *
     * @return self
     */
    public function setAdditionalData(string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Amount refunded.
     *
     * @return float
     */
    public function getAmountRefunded(): float
    {
        return $this->amountRefunded;
    }
    /**
     * Amount refunded.
     *
     * @param float $amountRefunded
     *
     * @return self
     */
    public function setAmountRefunded(float $amountRefunded): self
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }
    /**
     * Applied rule IDs.
     *
     * @return string
     */
    public function getAppliedRuleIds(): string
    {
        return $this->appliedRuleIds;
    }
    /**
     * Applied rule IDs.
     *
     * @param string $appliedRuleIds
     *
     * @return self
     */
    public function setAppliedRuleIds(string $appliedRuleIds): self
    {
        $this->appliedRuleIds = $appliedRuleIds;
        return $this;
    }
    /**
     * Base amount refunded.
     *
     * @return float
     */
    public function getBaseAmountRefunded(): float
    {
        return $this->baseAmountRefunded;
    }
    /**
     * Base amount refunded.
     *
     * @param float $baseAmountRefunded
     *
     * @return self
     */
    public function setBaseAmountRefunded(float $baseAmountRefunded): self
    {
        $this->baseAmountRefunded = $baseAmountRefunded;
        return $this;
    }
    /**
     * Base cost.
     *
     * @return float
     */
    public function getBaseCost(): float
    {
        return $this->baseCost;
    }
    /**
     * Base cost.
     *
     * @param float $baseCost
     *
     * @return self
     */
    public function setBaseCost(float $baseCost): self
    {
        $this->baseCost = $baseCost;
        return $this;
    }
    /**
     * Base discount amount.
     *
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Base discount amount.
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
     * Base discount invoiced.
     *
     * @return float
     */
    public function getBaseDiscountInvoiced(): float
    {
        return $this->baseDiscountInvoiced;
    }
    /**
     * Base discount invoiced.
     *
     * @param float $baseDiscountInvoiced
     *
     * @return self
     */
    public function setBaseDiscountInvoiced(float $baseDiscountInvoiced): self
    {
        $this->baseDiscountInvoiced = $baseDiscountInvoiced;
        return $this;
    }
    /**
     * Base discount refunded.
     *
     * @return float
     */
    public function getBaseDiscountRefunded(): float
    {
        return $this->baseDiscountRefunded;
    }
    /**
     * Base discount refunded.
     *
     * @param float $baseDiscountRefunded
     *
     * @return self
     */
    public function setBaseDiscountRefunded(float $baseDiscountRefunded): self
    {
        $this->baseDiscountRefunded = $baseDiscountRefunded;
        return $this;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount(): float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @param float $baseDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationAmount(float $baseDiscountTaxCompensationAmount): self
    {
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Base discount tax compensation invoiced.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationInvoiced(): float
    {
        return $this->baseDiscountTaxCompensationInvoiced;
    }
    /**
     * Base discount tax compensation invoiced.
     *
     * @param float $baseDiscountTaxCompensationInvoiced
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationInvoiced(float $baseDiscountTaxCompensationInvoiced): self
    {
        $this->baseDiscountTaxCompensationInvoiced = $baseDiscountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Base discount tax compensation refunded.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationRefunded(): float
    {
        return $this->baseDiscountTaxCompensationRefunded;
    }
    /**
     * Base discount tax compensation refunded.
     *
     * @param float $baseDiscountTaxCompensationRefunded
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationRefunded(float $baseDiscountTaxCompensationRefunded): self
    {
        $this->baseDiscountTaxCompensationRefunded = $baseDiscountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Base original price.
     *
     * @return float
     */
    public function getBaseOriginalPrice(): float
    {
        return $this->baseOriginalPrice;
    }
    /**
     * Base original price.
     *
     * @param float $baseOriginalPrice
     *
     * @return self
     */
    public function setBaseOriginalPrice(float $baseOriginalPrice): self
    {
        $this->baseOriginalPrice = $baseOriginalPrice;
        return $this;
    }
    /**
     * Base price.
     *
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }
    /**
     * Base price.
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
     * Base price including tax.
     *
     * @return float
     */
    public function getBasePriceInclTax(): float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Base price including tax.
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
     * Base row invoiced.
     *
     * @return float
     */
    public function getBaseRowInvoiced(): float
    {
        return $this->baseRowInvoiced;
    }
    /**
     * Base row invoiced.
     *
     * @param float $baseRowInvoiced
     *
     * @return self
     */
    public function setBaseRowInvoiced(float $baseRowInvoiced): self
    {
        $this->baseRowInvoiced = $baseRowInvoiced;
        return $this;
    }
    /**
     * Base row total.
     *
     * @return float
     */
    public function getBaseRowTotal(): float
    {
        return $this->baseRowTotal;
    }
    /**
     * Base row total.
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
     * Base row total including tax.
     *
     * @return float
     */
    public function getBaseRowTotalInclTax(): float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Base row total including tax.
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
     * Base tax amount.
     *
     * @return float
     */
    public function getBaseTaxAmount(): float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Base tax amount.
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
     * Base tax before discount.
     *
     * @return float
     */
    public function getBaseTaxBeforeDiscount(): float
    {
        return $this->baseTaxBeforeDiscount;
    }
    /**
     * Base tax before discount.
     *
     * @param float $baseTaxBeforeDiscount
     *
     * @return self
     */
    public function setBaseTaxBeforeDiscount(float $baseTaxBeforeDiscount): self
    {
        $this->baseTaxBeforeDiscount = $baseTaxBeforeDiscount;
        return $this;
    }
    /**
     * Base tax invoiced.
     *
     * @return float
     */
    public function getBaseTaxInvoiced(): float
    {
        return $this->baseTaxInvoiced;
    }
    /**
     * Base tax invoiced.
     *
     * @param float $baseTaxInvoiced
     *
     * @return self
     */
    public function setBaseTaxInvoiced(float $baseTaxInvoiced): self
    {
        $this->baseTaxInvoiced = $baseTaxInvoiced;
        return $this;
    }
    /**
     * Base tax refunded.
     *
     * @return float
     */
    public function getBaseTaxRefunded(): float
    {
        return $this->baseTaxRefunded;
    }
    /**
     * Base tax refunded.
     *
     * @param float $baseTaxRefunded
     *
     * @return self
     */
    public function setBaseTaxRefunded(float $baseTaxRefunded): self
    {
        $this->baseTaxRefunded = $baseTaxRefunded;
        return $this;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @return float
     */
    public function getBaseWeeeTaxAppliedAmount(): float
    {
        return $this->baseWeeeTaxAppliedAmount;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @param float $baseWeeeTaxAppliedAmount
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedAmount(float $baseWeeeTaxAppliedAmount): self
    {
        $this->baseWeeeTaxAppliedAmount = $baseWeeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @return float
     */
    public function getBaseWeeeTaxAppliedRowAmnt(): float
    {
        return $this->baseWeeeTaxAppliedRowAmnt;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @param float $baseWeeeTaxAppliedRowAmnt
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedRowAmnt(float $baseWeeeTaxAppliedRowAmnt): self
    {
        $this->baseWeeeTaxAppliedRowAmnt = $baseWeeeTaxAppliedRowAmnt;
        return $this;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @return float
     */
    public function getBaseWeeeTaxDisposition(): float
    {
        return $this->baseWeeeTaxDisposition;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @param float $baseWeeeTaxDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxDisposition(float $baseWeeeTaxDisposition): self
    {
        $this->baseWeeeTaxDisposition = $baseWeeeTaxDisposition;
        return $this;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @return float
     */
    public function getBaseWeeeTaxRowDisposition(): float
    {
        return $this->baseWeeeTaxRowDisposition;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @param float $baseWeeeTaxRowDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxRowDisposition(float $baseWeeeTaxRowDisposition): self
    {
        $this->baseWeeeTaxRowDisposition = $baseWeeeTaxRowDisposition;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
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
     * Description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount.
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
     * Discount invoiced.
     *
     * @return float
     */
    public function getDiscountInvoiced(): float
    {
        return $this->discountInvoiced;
    }
    /**
     * Discount invoiced.
     *
     * @param float $discountInvoiced
     *
     * @return self
     */
    public function setDiscountInvoiced(float $discountInvoiced): self
    {
        $this->discountInvoiced = $discountInvoiced;
        return $this;
    }
    /**
     * Discount percent.
     *
     * @return float
     */
    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }
    /**
     * Discount percent.
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
     * Discount refunded.
     *
     * @return float
     */
    public function getDiscountRefunded(): float
    {
        return $this->discountRefunded;
    }
    /**
     * Discount refunded.
     *
     * @param float $discountRefunded
     *
     * @return self
     */
    public function setDiscountRefunded(float $discountRefunded): self
    {
        $this->discountRefunded = $discountRefunded;
        return $this;
    }
    /**
     * Event ID.
     *
     * @return int
     */
    public function getEventId(): int
    {
        return $this->eventId;
    }
    /**
     * Event ID.
     *
     * @param int $eventId
     *
     * @return self
     */
    public function setEventId(int $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * External order item ID.
     *
     * @return string
     */
    public function getExtOrderItemId(): string
    {
        return $this->extOrderItemId;
    }
    /**
     * External order item ID.
     *
     * @param string $extOrderItemId
     *
     * @return self
     */
    public function setExtOrderItemId(string $extOrderItemId): self
    {
        $this->extOrderItemId = $extOrderItemId;
        return $this;
    }
    /**
     * Free-shipping flag value.
     *
     * @return int
     */
    public function getFreeShipping(): int
    {
        return $this->freeShipping;
    }
    /**
     * Free-shipping flag value.
     *
     * @param int $freeShipping
     *
     * @return self
     */
    public function setFreeShipping(int $freeShipping): self
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }
    /**
     * GW base price.
     *
     * @return float
     */
    public function getGwBasePrice(): float
    {
        return $this->gwBasePrice;
    }
    /**
     * GW base price.
     *
     * @param float $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(float $gwBasePrice): self
    {
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     * GW base price invoiced.
     *
     * @return float
     */
    public function getGwBasePriceInvoiced(): float
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     * GW base price invoiced.
     *
     * @param float $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(float $gwBasePriceInvoiced): self
    {
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     * GW base price refunded.
     *
     * @return float
     */
    public function getGwBasePriceRefunded(): float
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     * GW base price refunded.
     *
     * @param float $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(float $gwBasePriceRefunded): self
    {
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
        return $this;
    }
    /**
     * GW base tax amount.
     *
     * @return float
     */
    public function getGwBaseTaxAmount(): float
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     * GW base tax amount.
     *
     * @param float $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(float $gwBaseTaxAmount): self
    {
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     * GW base tax amount invoiced.
     *
     * @return float
     */
    public function getGwBaseTaxAmountInvoiced(): float
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     * GW base tax amount invoiced.
     *
     * @param float $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(float $gwBaseTaxAmountInvoiced): self
    {
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     * GW base tax amount refunded.
     *
     * @return float
     */
    public function getGwBaseTaxAmountRefunded(): float
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     * GW base tax amount refunded.
     *
     * @param float $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(float $gwBaseTaxAmountRefunded): self
    {
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     * GW ID.
     *
     * @return int
     */
    public function getGwId(): int
    {
        return $this->gwId;
    }
    /**
     * GW ID.
     *
     * @param int $gwId
     *
     * @return self
     */
    public function setGwId(int $gwId): self
    {
        $this->gwId = $gwId;
        return $this;
    }
    /**
     * GW price.
     *
     * @return float
     */
    public function getGwPrice(): float
    {
        return $this->gwPrice;
    }
    /**
     * GW price.
     *
     * @param float $gwPrice
     *
     * @return self
     */
    public function setGwPrice(float $gwPrice): self
    {
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     * GW price invoiced.
     *
     * @return float
     */
    public function getGwPriceInvoiced(): float
    {
        return $this->gwPriceInvoiced;
    }
    /**
     * GW price invoiced.
     *
     * @param float $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(float $gwPriceInvoiced): self
    {
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     * GW price refunded.
     *
     * @return float
     */
    public function getGwPriceRefunded(): float
    {
        return $this->gwPriceRefunded;
    }
    /**
     * GW price refunded.
     *
     * @param float $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(float $gwPriceRefunded): self
    {
        $this->gwPriceRefunded = $gwPriceRefunded;
        return $this;
    }
    /**
     * GW tax amount.
     *
     * @return float
     */
    public function getGwTaxAmount(): float
    {
        return $this->gwTaxAmount;
    }
    /**
     * GW tax amount.
     *
     * @param float $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(float $gwTaxAmount): self
    {
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     * GW tax amount invoiced.
     *
     * @return float
     */
    public function getGwTaxAmountInvoiced(): float
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     * GW tax amount invoiced.
     *
     * @param float $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(float $gwTaxAmountInvoiced): self
    {
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     * GW tax amount refunded.
     *
     * @return float
     */
    public function getGwTaxAmountRefunded(): float
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     * GW tax amount refunded.
     *
     * @param float $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(float $gwTaxAmountRefunded): self
    {
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationAmount(): float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Discount tax compensation amount.
     *
     * @param float $discountTaxCompensationAmount
     *
     * @return self
     */
    public function setDiscountTaxCompensationAmount(float $discountTaxCompensationAmount): self
    {
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Discount tax compensation canceled.
     *
     * @return float
     */
    public function getDiscountTaxCompensationCanceled(): float
    {
        return $this->discountTaxCompensationCanceled;
    }
    /**
     * Discount tax compensation canceled.
     *
     * @param float $discountTaxCompensationCanceled
     *
     * @return self
     */
    public function setDiscountTaxCompensationCanceled(float $discountTaxCompensationCanceled): self
    {
        $this->discountTaxCompensationCanceled = $discountTaxCompensationCanceled;
        return $this;
    }
    /**
     * Discount tax compensation invoiced.
     *
     * @return float
     */
    public function getDiscountTaxCompensationInvoiced(): float
    {
        return $this->discountTaxCompensationInvoiced;
    }
    /**
     * Discount tax compensation invoiced.
     *
     * @param float $discountTaxCompensationInvoiced
     *
     * @return self
     */
    public function setDiscountTaxCompensationInvoiced(float $discountTaxCompensationInvoiced): self
    {
        $this->discountTaxCompensationInvoiced = $discountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Discount tax compensation refunded.
     *
     * @return float
     */
    public function getDiscountTaxCompensationRefunded(): float
    {
        return $this->discountTaxCompensationRefunded;
    }
    /**
     * Discount tax compensation refunded.
     *
     * @param float $discountTaxCompensationRefunded
     *
     * @return self
     */
    public function setDiscountTaxCompensationRefunded(float $discountTaxCompensationRefunded): self
    {
        $this->discountTaxCompensationRefunded = $discountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Is-quantity-decimal flag value.
     *
     * @return int
     */
    public function getIsQtyDecimal(): int
    {
        return $this->isQtyDecimal;
    }
    /**
     * Is-quantity-decimal flag value.
     *
     * @param int $isQtyDecimal
     *
     * @return self
     */
    public function setIsQtyDecimal(int $isQtyDecimal): self
    {
        $this->isQtyDecimal = $isQtyDecimal;
        return $this;
    }
    /**
     * Is-virtual flag value.
     *
     * @return int
     */
    public function getIsVirtual(): int
    {
        return $this->isVirtual;
    }
    /**
     * Is-virtual flag value.
     *
     * @param int $isVirtual
     *
     * @return self
     */
    public function setIsVirtual(int $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }
    /**
     * Item ID.
     *
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * Item ID.
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
     * Locked DO invoice flag value.
     *
     * @return int
     */
    public function getLockedDoInvoice(): int
    {
        return $this->lockedDoInvoice;
    }
    /**
     * Locked DO invoice flag value.
     *
     * @param int $lockedDoInvoice
     *
     * @return self
     */
    public function setLockedDoInvoice(int $lockedDoInvoice): self
    {
        $this->lockedDoInvoice = $lockedDoInvoice;
        return $this;
    }
    /**
     * Locked DO ship flag value.
     *
     * @return int
     */
    public function getLockedDoShip(): int
    {
        return $this->lockedDoShip;
    }
    /**
     * Locked DO ship flag value.
     *
     * @param int $lockedDoShip
     *
     * @return self
     */
    public function setLockedDoShip(int $lockedDoShip): self
    {
        $this->lockedDoShip = $lockedDoShip;
        return $this;
    }
    /**
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name.
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
    /**
     * No-discount flag value.
     *
     * @return int
     */
    public function getNoDiscount(): int
    {
        return $this->noDiscount;
    }
    /**
     * No-discount flag value.
     *
     * @param int $noDiscount
     *
     * @return self
     */
    public function setNoDiscount(int $noDiscount): self
    {
        $this->noDiscount = $noDiscount;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Original price.
     *
     * @return float
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }
    /**
     * Original price.
     *
     * @param float $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(float $originalPrice): self
    {
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * Parent item ID.
     *
     * @return int
     */
    public function getParentItemId(): int
    {
        return $this->parentItemId;
    }
    /**
     * Parent item ID.
     *
     * @param int $parentItemId
     *
     * @return self
     */
    public function setParentItemId(int $parentItemId): self
    {
        $this->parentItemId = $parentItemId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price.
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
     * Price including tax.
     *
     * @return float
     */
    public function getPriceInclTax(): float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax.
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
     * Product ID.
     *
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }
    /**
     * Product ID.
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Product type.
     *
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }
    /**
     * Product type.
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType): self
    {
        $this->productType = $productType;
        return $this;
    }
    /**
     * Quantity backordered.
     *
     * @return float
     */
    public function getQtyBackordered(): float
    {
        return $this->qtyBackordered;
    }
    /**
     * Quantity backordered.
     *
     * @param float $qtyBackordered
     *
     * @return self
     */
    public function setQtyBackordered(float $qtyBackordered): self
    {
        $this->qtyBackordered = $qtyBackordered;
        return $this;
    }
    /**
     * Quantity canceled.
     *
     * @return float
     */
    public function getQtyCanceled(): float
    {
        return $this->qtyCanceled;
    }
    /**
     * Quantity canceled.
     *
     * @param float $qtyCanceled
     *
     * @return self
     */
    public function setQtyCanceled(float $qtyCanceled): self
    {
        $this->qtyCanceled = $qtyCanceled;
        return $this;
    }
    /**
     * Quantity invoiced.
     *
     * @return float
     */
    public function getQtyInvoiced(): float
    {
        return $this->qtyInvoiced;
    }
    /**
     * Quantity invoiced.
     *
     * @param float $qtyInvoiced
     *
     * @return self
     */
    public function setQtyInvoiced(float $qtyInvoiced): self
    {
        $this->qtyInvoiced = $qtyInvoiced;
        return $this;
    }
    /**
     * Quantity ordered.
     *
     * @return float
     */
    public function getQtyOrdered(): float
    {
        return $this->qtyOrdered;
    }
    /**
     * Quantity ordered.
     *
     * @param float $qtyOrdered
     *
     * @return self
     */
    public function setQtyOrdered(float $qtyOrdered): self
    {
        $this->qtyOrdered = $qtyOrdered;
        return $this;
    }
    /**
     * Quantity refunded.
     *
     * @return float
     */
    public function getQtyRefunded(): float
    {
        return $this->qtyRefunded;
    }
    /**
     * Quantity refunded.
     *
     * @param float $qtyRefunded
     *
     * @return self
     */
    public function setQtyRefunded(float $qtyRefunded): self
    {
        $this->qtyRefunded = $qtyRefunded;
        return $this;
    }
    /**
     * Quantity returned.
     *
     * @return float
     */
    public function getQtyReturned(): float
    {
        return $this->qtyReturned;
    }
    /**
     * Quantity returned.
     *
     * @param float $qtyReturned
     *
     * @return self
     */
    public function setQtyReturned(float $qtyReturned): self
    {
        $this->qtyReturned = $qtyReturned;
        return $this;
    }
    /**
     * Quantity shipped.
     *
     * @return float
     */
    public function getQtyShipped(): float
    {
        return $this->qtyShipped;
    }
    /**
     * Quantity shipped.
     *
     * @param float $qtyShipped
     *
     * @return self
     */
    public function setQtyShipped(float $qtyShipped): self
    {
        $this->qtyShipped = $qtyShipped;
        return $this;
    }
    /**
     * Quote item ID.
     *
     * @return int
     */
    public function getQuoteItemId(): int
    {
        return $this->quoteItemId;
    }
    /**
     * Quote item ID.
     *
     * @param int $quoteItemId
     *
     * @return self
     */
    public function setQuoteItemId(int $quoteItemId): self
    {
        $this->quoteItemId = $quoteItemId;
        return $this;
    }
    /**
     * Row invoiced.
     *
     * @return float
     */
    public function getRowInvoiced(): float
    {
        return $this->rowInvoiced;
    }
    /**
     * Row invoiced.
     *
     * @param float $rowInvoiced
     *
     * @return self
     */
    public function setRowInvoiced(float $rowInvoiced): self
    {
        $this->rowInvoiced = $rowInvoiced;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float
     */
    public function getRowTotal(): float
    {
        return $this->rowTotal;
    }
    /**
     * Row total.
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
     * Row total including tax.
     *
     * @return float
     */
    public function getRowTotalInclTax(): float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax.
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
     * Row weight.
     *
     * @return float
     */
    public function getRowWeight(): float
    {
        return $this->rowWeight;
    }
    /**
     * Row weight.
     *
     * @param float $rowWeight
     *
     * @return self
     */
    public function setRowWeight(float $rowWeight): self
    {
        $this->rowWeight = $rowWeight;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Store ID.
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store ID.
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount.
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
     * Tax before discount.
     *
     * @return float
     */
    public function getTaxBeforeDiscount(): float
    {
        return $this->taxBeforeDiscount;
    }
    /**
     * Tax before discount.
     *
     * @param float $taxBeforeDiscount
     *
     * @return self
     */
    public function setTaxBeforeDiscount(float $taxBeforeDiscount): self
    {
        $this->taxBeforeDiscount = $taxBeforeDiscount;
        return $this;
    }
    /**
     * Tax canceled.
     *
     * @return float
     */
    public function getTaxCanceled(): float
    {
        return $this->taxCanceled;
    }
    /**
     * Tax canceled.
     *
     * @param float $taxCanceled
     *
     * @return self
     */
    public function setTaxCanceled(float $taxCanceled): self
    {
        $this->taxCanceled = $taxCanceled;
        return $this;
    }
    /**
     * Tax invoiced.
     *
     * @return float
     */
    public function getTaxInvoiced(): float
    {
        return $this->taxInvoiced;
    }
    /**
     * Tax invoiced.
     *
     * @param float $taxInvoiced
     *
     * @return self
     */
    public function setTaxInvoiced(float $taxInvoiced): self
    {
        $this->taxInvoiced = $taxInvoiced;
        return $this;
    }
    /**
     * Tax percent.
     *
     * @return float
     */
    public function getTaxPercent(): float
    {
        return $this->taxPercent;
    }
    /**
     * Tax percent.
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
     * Tax refunded.
     *
     * @return float
     */
    public function getTaxRefunded(): float
    {
        return $this->taxRefunded;
    }
    /**
     * Tax refunded.
     *
     * @param float $taxRefunded
     *
     * @return self
     */
    public function setTaxRefunded(float $taxRefunded): self
    {
        $this->taxRefunded = $taxRefunded;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Updated-at timestamp.
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
    /**
     * WEEE tax applied.
     *
     * @return string
     */
    public function getWeeeTaxApplied(): string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * WEEE tax applied.
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
     * WEEE tax applied amount.
     *
     * @return float
     */
    public function getWeeeTaxAppliedAmount(): float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * WEEE tax applied amount.
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
     * WEEE tax applied row amount.
     *
     * @return float
     */
    public function getWeeeTaxAppliedRowAmount(): float
    {
        return $this->weeeTaxAppliedRowAmount;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @param float $weeeTaxAppliedRowAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedRowAmount(float $weeeTaxAppliedRowAmount): self
    {
        $this->weeeTaxAppliedRowAmount = $weeeTaxAppliedRowAmount;
        return $this;
    }
    /**
     * WEEE tax disposition.
     *
     * @return float
     */
    public function getWeeeTaxDisposition(): float
    {
        return $this->weeeTaxDisposition;
    }
    /**
     * WEEE tax disposition.
     *
     * @param float $weeeTaxDisposition
     *
     * @return self
     */
    public function setWeeeTaxDisposition(float $weeeTaxDisposition): self
    {
        $this->weeeTaxDisposition = $weeeTaxDisposition;
        return $this;
    }
    /**
     * WEEE tax row disposition.
     *
     * @return float
     */
    public function getWeeeTaxRowDisposition(): float
    {
        return $this->weeeTaxRowDisposition;
    }
    /**
     * WEEE tax row disposition.
     *
     * @param float $weeeTaxRowDisposition
     *
     * @return self
     */
    public function setWeeeTaxRowDisposition(float $weeeTaxRowDisposition): self
    {
        $this->weeeTaxRowDisposition = $weeeTaxRowDisposition;
        return $this;
    }
    /**
     * Weight.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * Weight.
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderItemInterface
     */
    public function getParentItem(): SalesDataOrderItemInterface
    {
        return $this->parentItem;
    }
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderItemInterface $parentItem
     *
     * @return self
     */
    public function setParentItem(SalesDataOrderItemInterface $parentItem): self
    {
        $this->parentItem = $parentItem;
        return $this;
    }
    /**
     * Product option interface
     *
     * @return CatalogDataProductOptionInterface
     */
    public function getProductOption(): CatalogDataProductOptionInterface
    {
        return $this->productOption;
    }
    /**
     * Product option interface
     *
     * @param CatalogDataProductOptionInterface $productOption
     *
     * @return self
     */
    public function setProductOption(CatalogDataProductOptionInterface $productOption): self
    {
        $this->productOption = $productOption;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @return SalesDataOrderItemExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataOrderItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @param SalesDataOrderItemExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataOrderItemExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
