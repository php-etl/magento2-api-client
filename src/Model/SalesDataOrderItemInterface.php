<?php

namespace Kiboko\Magento\Model;

class SalesDataOrderItemInterface
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
     * Additional data.
     *
     * @var string|null
     */
    protected $additionalData;
    /**
     * Amount refunded.
     *
     * @var float|null
     */
    protected $amountRefunded;
    /**
     * Applied rule IDs.
     *
     * @var string|null
     */
    protected $appliedRuleIds;
    /**
     * Base amount refunded.
     *
     * @var float|null
     */
    protected $baseAmountRefunded;
    /**
     * Base cost.
     *
     * @var float|null
     */
    protected $baseCost;
    /**
     * Base discount amount.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Base discount invoiced.
     *
     * @var float|null
     */
    protected $baseDiscountInvoiced;
    /**
     * Base discount refunded.
     *
     * @var float|null
     */
    protected $baseDiscountRefunded;
    /**
     * Base discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base discount tax compensation invoiced.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationInvoiced;
    /**
     * Base discount tax compensation refunded.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationRefunded;
    /**
     * Base original price.
     *
     * @var float|null
     */
    protected $baseOriginalPrice;
    /**
     * Base price.
     *
     * @var float|null
     */
    protected $basePrice;
    /**
     * Base price including tax.
     *
     * @var float|null
     */
    protected $basePriceInclTax;
    /**
     * Base row invoiced.
     *
     * @var float|null
     */
    protected $baseRowInvoiced;
    /**
     * Base row total.
     *
     * @var float|null
     */
    protected $baseRowTotal;
    /**
     * Base row total including tax.
     *
     * @var float|null
     */
    protected $baseRowTotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Base tax before discount.
     *
     * @var float|null
     */
    protected $baseTaxBeforeDiscount;
    /**
     * Base tax invoiced.
     *
     * @var float|null
     */
    protected $baseTaxInvoiced;
    /**
     * Base tax refunded.
     *
     * @var float|null
     */
    protected $baseTaxRefunded;
    /**
     * Base WEEE tax applied amount.
     *
     * @var float|null
     */
    protected $baseWeeeTaxAppliedAmount;
    /**
     * Base WEEE tax applied row amount.
     *
     * @var float|null
     */
    protected $baseWeeeTaxAppliedRowAmnt;
    /**
     * Base WEEE tax disposition.
     *
     * @var float|null
     */
    protected $baseWeeeTaxDisposition;
    /**
     * Base WEEE tax row disposition.
     *
     * @var float|null
     */
    protected $baseWeeeTaxRowDisposition;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount invoiced.
     *
     * @var float|null
     */
    protected $discountInvoiced;
    /**
     * Discount percent.
     *
     * @var float|null
     */
    protected $discountPercent;
    /**
     * Discount refunded.
     *
     * @var float|null
     */
    protected $discountRefunded;
    /**
     * Event ID.
     *
     * @var int|null
     */
    protected $eventId;
    /**
     * External order item ID.
     *
     * @var string|null
     */
    protected $extOrderItemId;
    /**
     * Free-shipping flag value.
     *
     * @var int|null
     */
    protected $freeShipping;
    /**
     * GW base price.
     *
     * @var float|null
     */
    protected $gwBasePrice;
    /**
     * GW base price invoiced.
     *
     * @var float|null
     */
    protected $gwBasePriceInvoiced;
    /**
     * GW base price refunded.
     *
     * @var float|null
     */
    protected $gwBasePriceRefunded;
    /**
     * GW base tax amount.
     *
     * @var float|null
     */
    protected $gwBaseTaxAmount;
    /**
     * GW base tax amount invoiced.
     *
     * @var float|null
     */
    protected $gwBaseTaxAmountInvoiced;
    /**
     * GW base tax amount refunded.
     *
     * @var float|null
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     * GW ID.
     *
     * @var int|null
     */
    protected $gwId;
    /**
     * GW price.
     *
     * @var float|null
     */
    protected $gwPrice;
    /**
     * GW price invoiced.
     *
     * @var float|null
     */
    protected $gwPriceInvoiced;
    /**
     * GW price refunded.
     *
     * @var float|null
     */
    protected $gwPriceRefunded;
    /**
     * GW tax amount.
     *
     * @var float|null
     */
    protected $gwTaxAmount;
    /**
     * GW tax amount invoiced.
     *
     * @var float|null
     */
    protected $gwTaxAmountInvoiced;
    /**
     * GW tax amount refunded.
     *
     * @var float|null
     */
    protected $gwTaxAmountRefunded;
    /**
     * Discount tax compensation amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationAmount;
    /**
     * Discount tax compensation canceled.
     *
     * @var float|null
     */
    protected $discountTaxCompensationCanceled;
    /**
     * Discount tax compensation invoiced.
     *
     * @var float|null
     */
    protected $discountTaxCompensationInvoiced;
    /**
     * Discount tax compensation refunded.
     *
     * @var float|null
     */
    protected $discountTaxCompensationRefunded;
    /**
     * Is-quantity-decimal flag value.
     *
     * @var int|null
     */
    protected $isQtyDecimal;
    /**
     * Is-virtual flag value.
     *
     * @var int|null
     */
    protected $isVirtual;
    /**
     * Item ID.
     *
     * @var int|null
     */
    protected $itemId;
    /**
     * Locked DO invoice flag value.
     *
     * @var int|null
     */
    protected $lockedDoInvoice;
    /**
     * Locked DO ship flag value.
     *
     * @var int|null
     */
    protected $lockedDoShip;
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * No-discount flag value.
     *
     * @var int|null
     */
    protected $noDiscount;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Original price.
     *
     * @var float|null
     */
    protected $originalPrice;
    /**
     * Parent item ID.
     *
     * @var int|null
     */
    protected $parentItemId;
    /**
     * Price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Price including tax.
     *
     * @var float|null
     */
    protected $priceInclTax;
    /**
     * Product ID.
     *
     * @var int|null
     */
    protected $productId;
    /**
     * Product type.
     *
     * @var string|null
     */
    protected $productType;
    /**
     * Quantity backordered.
     *
     * @var float|null
     */
    protected $qtyBackordered;
    /**
     * Quantity canceled.
     *
     * @var float|null
     */
    protected $qtyCanceled;
    /**
     * Quantity invoiced.
     *
     * @var float|null
     */
    protected $qtyInvoiced;
    /**
     * Quantity ordered.
     *
     * @var float|null
     */
    protected $qtyOrdered;
    /**
     * Quantity refunded.
     *
     * @var float|null
     */
    protected $qtyRefunded;
    /**
     * Quantity returned.
     *
     * @var float|null
     */
    protected $qtyReturned;
    /**
     * Quantity shipped.
     *
     * @var float|null
     */
    protected $qtyShipped;
    /**
     * Quote item ID.
     *
     * @var int|null
     */
    protected $quoteItemId;
    /**
     * Row invoiced.
     *
     * @var float|null
     */
    protected $rowInvoiced;
    /**
     * Row total.
     *
     * @var float|null
     */
    protected $rowTotal;
    /**
     * Row total including tax.
     *
     * @var float|null
     */
    protected $rowTotalInclTax;
    /**
     * Row weight.
     *
     * @var float|null
     */
    protected $rowWeight;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Store ID.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Tax amount.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Tax before discount.
     *
     * @var float|null
     */
    protected $taxBeforeDiscount;
    /**
     * Tax canceled.
     *
     * @var float|null
     */
    protected $taxCanceled;
    /**
     * Tax invoiced.
     *
     * @var float|null
     */
    protected $taxInvoiced;
    /**
     * Tax percent.
     *
     * @var float|null
     */
    protected $taxPercent;
    /**
     * Tax refunded.
     *
     * @var float|null
     */
    protected $taxRefunded;
    /**
     * Updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * WEEE tax applied.
     *
     * @var string|null
     */
    protected $weeeTaxApplied;
    /**
     * WEEE tax applied amount.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedAmount;
    /**
     * WEEE tax applied row amount.
     *
     * @var float|null
     */
    protected $weeeTaxAppliedRowAmount;
    /**
     * WEEE tax disposition.
     *
     * @var float|null
     */
    protected $weeeTaxDisposition;
    /**
     * WEEE tax row disposition.
     *
     * @var float|null
     */
    protected $weeeTaxRowDisposition;
    /**
     * Weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderItemInterface|null
     */
    protected $parentItem;
    /**
     * Product option interface
     *
     * @var CatalogDataProductOptionInterface|null
     */
    protected $productOption;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @var SalesDataOrderItemExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Additional data.
     *
     * @return string|null
     */
    public function getAdditionalData() : ?string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?string $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Amount refunded.
     *
     * @return float|null
     */
    public function getAmountRefunded() : ?float
    {
        return $this->amountRefunded;
    }
    /**
     * Amount refunded.
     *
     * @param float|null $amountRefunded
     *
     * @return self
     */
    public function setAmountRefunded(?float $amountRefunded) : self
    {
        $this->initialized['amountRefunded'] = true;
        $this->amountRefunded = $amountRefunded;
        return $this;
    }
    /**
     * Applied rule IDs.
     *
     * @return string|null
     */
    public function getAppliedRuleIds() : ?string
    {
        return $this->appliedRuleIds;
    }
    /**
     * Applied rule IDs.
     *
     * @param string|null $appliedRuleIds
     *
     * @return self
     */
    public function setAppliedRuleIds(?string $appliedRuleIds) : self
    {
        $this->initialized['appliedRuleIds'] = true;
        $this->appliedRuleIds = $appliedRuleIds;
        return $this;
    }
    /**
     * Base amount refunded.
     *
     * @return float|null
     */
    public function getBaseAmountRefunded() : ?float
    {
        return $this->baseAmountRefunded;
    }
    /**
     * Base amount refunded.
     *
     * @param float|null $baseAmountRefunded
     *
     * @return self
     */
    public function setBaseAmountRefunded(?float $baseAmountRefunded) : self
    {
        $this->initialized['baseAmountRefunded'] = true;
        $this->baseAmountRefunded = $baseAmountRefunded;
        return $this;
    }
    /**
     * Base cost.
     *
     * @return float|null
     */
    public function getBaseCost() : ?float
    {
        return $this->baseCost;
    }
    /**
     * Base cost.
     *
     * @param float|null $baseCost
     *
     * @return self
     */
    public function setBaseCost(?float $baseCost) : self
    {
        $this->initialized['baseCost'] = true;
        $this->baseCost = $baseCost;
        return $this;
    }
    /**
     * Base discount amount.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount() : ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Base discount amount.
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
     * Base discount invoiced.
     *
     * @return float|null
     */
    public function getBaseDiscountInvoiced() : ?float
    {
        return $this->baseDiscountInvoiced;
    }
    /**
     * Base discount invoiced.
     *
     * @param float|null $baseDiscountInvoiced
     *
     * @return self
     */
    public function setBaseDiscountInvoiced(?float $baseDiscountInvoiced) : self
    {
        $this->initialized['baseDiscountInvoiced'] = true;
        $this->baseDiscountInvoiced = $baseDiscountInvoiced;
        return $this;
    }
    /**
     * Base discount refunded.
     *
     * @return float|null
     */
    public function getBaseDiscountRefunded() : ?float
    {
        return $this->baseDiscountRefunded;
    }
    /**
     * Base discount refunded.
     *
     * @param float|null $baseDiscountRefunded
     *
     * @return self
     */
    public function setBaseDiscountRefunded(?float $baseDiscountRefunded) : self
    {
        $this->initialized['baseDiscountRefunded'] = true;
        $this->baseDiscountRefunded = $baseDiscountRefunded;
        return $this;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationAmount() : ?float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @param float|null $baseDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationAmount(?float $baseDiscountTaxCompensationAmount) : self
    {
        $this->initialized['baseDiscountTaxCompensationAmount'] = true;
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Base discount tax compensation invoiced.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationInvoiced() : ?float
    {
        return $this->baseDiscountTaxCompensationInvoiced;
    }
    /**
     * Base discount tax compensation invoiced.
     *
     * @param float|null $baseDiscountTaxCompensationInvoiced
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationInvoiced(?float $baseDiscountTaxCompensationInvoiced) : self
    {
        $this->initialized['baseDiscountTaxCompensationInvoiced'] = true;
        $this->baseDiscountTaxCompensationInvoiced = $baseDiscountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Base discount tax compensation refunded.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationRefunded() : ?float
    {
        return $this->baseDiscountTaxCompensationRefunded;
    }
    /**
     * Base discount tax compensation refunded.
     *
     * @param float|null $baseDiscountTaxCompensationRefunded
     *
     * @return self
     */
    public function setBaseDiscountTaxCompensationRefunded(?float $baseDiscountTaxCompensationRefunded) : self
    {
        $this->initialized['baseDiscountTaxCompensationRefunded'] = true;
        $this->baseDiscountTaxCompensationRefunded = $baseDiscountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Base original price.
     *
     * @return float|null
     */
    public function getBaseOriginalPrice() : ?float
    {
        return $this->baseOriginalPrice;
    }
    /**
     * Base original price.
     *
     * @param float|null $baseOriginalPrice
     *
     * @return self
     */
    public function setBaseOriginalPrice(?float $baseOriginalPrice) : self
    {
        $this->initialized['baseOriginalPrice'] = true;
        $this->baseOriginalPrice = $baseOriginalPrice;
        return $this;
    }
    /**
     * Base price.
     *
     * @return float|null
     */
    public function getBasePrice() : ?float
    {
        return $this->basePrice;
    }
    /**
     * Base price.
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
     * Base price including tax.
     *
     * @return float|null
     */
    public function getBasePriceInclTax() : ?float
    {
        return $this->basePriceInclTax;
    }
    /**
     * Base price including tax.
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
     * Base row invoiced.
     *
     * @return float|null
     */
    public function getBaseRowInvoiced() : ?float
    {
        return $this->baseRowInvoiced;
    }
    /**
     * Base row invoiced.
     *
     * @param float|null $baseRowInvoiced
     *
     * @return self
     */
    public function setBaseRowInvoiced(?float $baseRowInvoiced) : self
    {
        $this->initialized['baseRowInvoiced'] = true;
        $this->baseRowInvoiced = $baseRowInvoiced;
        return $this;
    }
    /**
     * Base row total.
     *
     * @return float|null
     */
    public function getBaseRowTotal() : ?float
    {
        return $this->baseRowTotal;
    }
    /**
     * Base row total.
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
     * Base row total including tax.
     *
     * @return float|null
     */
    public function getBaseRowTotalInclTax() : ?float
    {
        return $this->baseRowTotalInclTax;
    }
    /**
     * Base row total including tax.
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
     * Base tax amount.
     *
     * @return float|null
     */
    public function getBaseTaxAmount() : ?float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Base tax amount.
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
     * Base tax before discount.
     *
     * @return float|null
     */
    public function getBaseTaxBeforeDiscount() : ?float
    {
        return $this->baseTaxBeforeDiscount;
    }
    /**
     * Base tax before discount.
     *
     * @param float|null $baseTaxBeforeDiscount
     *
     * @return self
     */
    public function setBaseTaxBeforeDiscount(?float $baseTaxBeforeDiscount) : self
    {
        $this->initialized['baseTaxBeforeDiscount'] = true;
        $this->baseTaxBeforeDiscount = $baseTaxBeforeDiscount;
        return $this;
    }
    /**
     * Base tax invoiced.
     *
     * @return float|null
     */
    public function getBaseTaxInvoiced() : ?float
    {
        return $this->baseTaxInvoiced;
    }
    /**
     * Base tax invoiced.
     *
     * @param float|null $baseTaxInvoiced
     *
     * @return self
     */
    public function setBaseTaxInvoiced(?float $baseTaxInvoiced) : self
    {
        $this->initialized['baseTaxInvoiced'] = true;
        $this->baseTaxInvoiced = $baseTaxInvoiced;
        return $this;
    }
    /**
     * Base tax refunded.
     *
     * @return float|null
     */
    public function getBaseTaxRefunded() : ?float
    {
        return $this->baseTaxRefunded;
    }
    /**
     * Base tax refunded.
     *
     * @param float|null $baseTaxRefunded
     *
     * @return self
     */
    public function setBaseTaxRefunded(?float $baseTaxRefunded) : self
    {
        $this->initialized['baseTaxRefunded'] = true;
        $this->baseTaxRefunded = $baseTaxRefunded;
        return $this;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxAppliedAmount() : ?float
    {
        return $this->baseWeeeTaxAppliedAmount;
    }
    /**
     * Base WEEE tax applied amount.
     *
     * @param float|null $baseWeeeTaxAppliedAmount
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedAmount(?float $baseWeeeTaxAppliedAmount) : self
    {
        $this->initialized['baseWeeeTaxAppliedAmount'] = true;
        $this->baseWeeeTaxAppliedAmount = $baseWeeeTaxAppliedAmount;
        return $this;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxAppliedRowAmnt() : ?float
    {
        return $this->baseWeeeTaxAppliedRowAmnt;
    }
    /**
     * Base WEEE tax applied row amount.
     *
     * @param float|null $baseWeeeTaxAppliedRowAmnt
     *
     * @return self
     */
    public function setBaseWeeeTaxAppliedRowAmnt(?float $baseWeeeTaxAppliedRowAmnt) : self
    {
        $this->initialized['baseWeeeTaxAppliedRowAmnt'] = true;
        $this->baseWeeeTaxAppliedRowAmnt = $baseWeeeTaxAppliedRowAmnt;
        return $this;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxDisposition() : ?float
    {
        return $this->baseWeeeTaxDisposition;
    }
    /**
     * Base WEEE tax disposition.
     *
     * @param float|null $baseWeeeTaxDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxDisposition(?float $baseWeeeTaxDisposition) : self
    {
        $this->initialized['baseWeeeTaxDisposition'] = true;
        $this->baseWeeeTaxDisposition = $baseWeeeTaxDisposition;
        return $this;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @return float|null
     */
    public function getBaseWeeeTaxRowDisposition() : ?float
    {
        return $this->baseWeeeTaxRowDisposition;
    }
    /**
     * Base WEEE tax row disposition.
     *
     * @param float|null $baseWeeeTaxRowDisposition
     *
     * @return self
     */
    public function setBaseWeeeTaxRowDisposition(?float $baseWeeeTaxRowDisposition) : self
    {
        $this->initialized['baseWeeeTaxRowDisposition'] = true;
        $this->baseWeeeTaxRowDisposition = $baseWeeeTaxRowDisposition;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Description.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float|null
     */
    public function getDiscountAmount() : ?float
    {
        return $this->discountAmount;
    }
    /**
     * Discount amount.
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
     * Discount invoiced.
     *
     * @return float|null
     */
    public function getDiscountInvoiced() : ?float
    {
        return $this->discountInvoiced;
    }
    /**
     * Discount invoiced.
     *
     * @param float|null $discountInvoiced
     *
     * @return self
     */
    public function setDiscountInvoiced(?float $discountInvoiced) : self
    {
        $this->initialized['discountInvoiced'] = true;
        $this->discountInvoiced = $discountInvoiced;
        return $this;
    }
    /**
     * Discount percent.
     *
     * @return float|null
     */
    public function getDiscountPercent() : ?float
    {
        return $this->discountPercent;
    }
    /**
     * Discount percent.
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
     * Discount refunded.
     *
     * @return float|null
     */
    public function getDiscountRefunded() : ?float
    {
        return $this->discountRefunded;
    }
    /**
     * Discount refunded.
     *
     * @param float|null $discountRefunded
     *
     * @return self
     */
    public function setDiscountRefunded(?float $discountRefunded) : self
    {
        $this->initialized['discountRefunded'] = true;
        $this->discountRefunded = $discountRefunded;
        return $this;
    }
    /**
     * Event ID.
     *
     * @return int|null
     */
    public function getEventId() : ?int
    {
        return $this->eventId;
    }
    /**
     * Event ID.
     *
     * @param int|null $eventId
     *
     * @return self
     */
    public function setEventId(?int $eventId) : self
    {
        $this->initialized['eventId'] = true;
        $this->eventId = $eventId;
        return $this;
    }
    /**
     * External order item ID.
     *
     * @return string|null
     */
    public function getExtOrderItemId() : ?string
    {
        return $this->extOrderItemId;
    }
    /**
     * External order item ID.
     *
     * @param string|null $extOrderItemId
     *
     * @return self
     */
    public function setExtOrderItemId(?string $extOrderItemId) : self
    {
        $this->initialized['extOrderItemId'] = true;
        $this->extOrderItemId = $extOrderItemId;
        return $this;
    }
    /**
     * Free-shipping flag value.
     *
     * @return int|null
     */
    public function getFreeShipping() : ?int
    {
        return $this->freeShipping;
    }
    /**
     * Free-shipping flag value.
     *
     * @param int|null $freeShipping
     *
     * @return self
     */
    public function setFreeShipping(?int $freeShipping) : self
    {
        $this->initialized['freeShipping'] = true;
        $this->freeShipping = $freeShipping;
        return $this;
    }
    /**
     * GW base price.
     *
     * @return float|null
     */
    public function getGwBasePrice() : ?float
    {
        return $this->gwBasePrice;
    }
    /**
     * GW base price.
     *
     * @param float|null $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(?float $gwBasePrice) : self
    {
        $this->initialized['gwBasePrice'] = true;
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     * GW base price invoiced.
     *
     * @return float|null
     */
    public function getGwBasePriceInvoiced() : ?float
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     * GW base price invoiced.
     *
     * @param float|null $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(?float $gwBasePriceInvoiced) : self
    {
        $this->initialized['gwBasePriceInvoiced'] = true;
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     * GW base price refunded.
     *
     * @return float|null
     */
    public function getGwBasePriceRefunded() : ?float
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     * GW base price refunded.
     *
     * @param float|null $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(?float $gwBasePriceRefunded) : self
    {
        $this->initialized['gwBasePriceRefunded'] = true;
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
        return $this;
    }
    /**
     * GW base tax amount.
     *
     * @return float|null
     */
    public function getGwBaseTaxAmount() : ?float
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     * GW base tax amount.
     *
     * @param float|null $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(?float $gwBaseTaxAmount) : self
    {
        $this->initialized['gwBaseTaxAmount'] = true;
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     * GW base tax amount invoiced.
     *
     * @return float|null
     */
    public function getGwBaseTaxAmountInvoiced() : ?float
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     * GW base tax amount invoiced.
     *
     * @param float|null $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(?float $gwBaseTaxAmountInvoiced) : self
    {
        $this->initialized['gwBaseTaxAmountInvoiced'] = true;
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     * GW base tax amount refunded.
     *
     * @return float|null
     */
    public function getGwBaseTaxAmountRefunded() : ?float
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     * GW base tax amount refunded.
     *
     * @param float|null $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(?float $gwBaseTaxAmountRefunded) : self
    {
        $this->initialized['gwBaseTaxAmountRefunded'] = true;
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     * GW ID.
     *
     * @return int|null
     */
    public function getGwId() : ?int
    {
        return $this->gwId;
    }
    /**
     * GW ID.
     *
     * @param int|null $gwId
     *
     * @return self
     */
    public function setGwId(?int $gwId) : self
    {
        $this->initialized['gwId'] = true;
        $this->gwId = $gwId;
        return $this;
    }
    /**
     * GW price.
     *
     * @return float|null
     */
    public function getGwPrice() : ?float
    {
        return $this->gwPrice;
    }
    /**
     * GW price.
     *
     * @param float|null $gwPrice
     *
     * @return self
     */
    public function setGwPrice(?float $gwPrice) : self
    {
        $this->initialized['gwPrice'] = true;
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     * GW price invoiced.
     *
     * @return float|null
     */
    public function getGwPriceInvoiced() : ?float
    {
        return $this->gwPriceInvoiced;
    }
    /**
     * GW price invoiced.
     *
     * @param float|null $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(?float $gwPriceInvoiced) : self
    {
        $this->initialized['gwPriceInvoiced'] = true;
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     * GW price refunded.
     *
     * @return float|null
     */
    public function getGwPriceRefunded() : ?float
    {
        return $this->gwPriceRefunded;
    }
    /**
     * GW price refunded.
     *
     * @param float|null $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(?float $gwPriceRefunded) : self
    {
        $this->initialized['gwPriceRefunded'] = true;
        $this->gwPriceRefunded = $gwPriceRefunded;
        return $this;
    }
    /**
     * GW tax amount.
     *
     * @return float|null
     */
    public function getGwTaxAmount() : ?float
    {
        return $this->gwTaxAmount;
    }
    /**
     * GW tax amount.
     *
     * @param float|null $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(?float $gwTaxAmount) : self
    {
        $this->initialized['gwTaxAmount'] = true;
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     * GW tax amount invoiced.
     *
     * @return float|null
     */
    public function getGwTaxAmountInvoiced() : ?float
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     * GW tax amount invoiced.
     *
     * @param float|null $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(?float $gwTaxAmountInvoiced) : self
    {
        $this->initialized['gwTaxAmountInvoiced'] = true;
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     * GW tax amount refunded.
     *
     * @return float|null
     */
    public function getGwTaxAmountRefunded() : ?float
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     * GW tax amount refunded.
     *
     * @param float|null $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(?float $gwTaxAmountRefunded) : self
    {
        $this->initialized['gwTaxAmountRefunded'] = true;
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationAmount() : ?float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Discount tax compensation amount.
     *
     * @param float|null $discountTaxCompensationAmount
     *
     * @return self
     */
    public function setDiscountTaxCompensationAmount(?float $discountTaxCompensationAmount) : self
    {
        $this->initialized['discountTaxCompensationAmount'] = true;
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Discount tax compensation canceled.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationCanceled() : ?float
    {
        return $this->discountTaxCompensationCanceled;
    }
    /**
     * Discount tax compensation canceled.
     *
     * @param float|null $discountTaxCompensationCanceled
     *
     * @return self
     */
    public function setDiscountTaxCompensationCanceled(?float $discountTaxCompensationCanceled) : self
    {
        $this->initialized['discountTaxCompensationCanceled'] = true;
        $this->discountTaxCompensationCanceled = $discountTaxCompensationCanceled;
        return $this;
    }
    /**
     * Discount tax compensation invoiced.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationInvoiced() : ?float
    {
        return $this->discountTaxCompensationInvoiced;
    }
    /**
     * Discount tax compensation invoiced.
     *
     * @param float|null $discountTaxCompensationInvoiced
     *
     * @return self
     */
    public function setDiscountTaxCompensationInvoiced(?float $discountTaxCompensationInvoiced) : self
    {
        $this->initialized['discountTaxCompensationInvoiced'] = true;
        $this->discountTaxCompensationInvoiced = $discountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Discount tax compensation refunded.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationRefunded() : ?float
    {
        return $this->discountTaxCompensationRefunded;
    }
    /**
     * Discount tax compensation refunded.
     *
     * @param float|null $discountTaxCompensationRefunded
     *
     * @return self
     */
    public function setDiscountTaxCompensationRefunded(?float $discountTaxCompensationRefunded) : self
    {
        $this->initialized['discountTaxCompensationRefunded'] = true;
        $this->discountTaxCompensationRefunded = $discountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Is-quantity-decimal flag value.
     *
     * @return int|null
     */
    public function getIsQtyDecimal() : ?int
    {
        return $this->isQtyDecimal;
    }
    /**
     * Is-quantity-decimal flag value.
     *
     * @param int|null $isQtyDecimal
     *
     * @return self
     */
    public function setIsQtyDecimal(?int $isQtyDecimal) : self
    {
        $this->initialized['isQtyDecimal'] = true;
        $this->isQtyDecimal = $isQtyDecimal;
        return $this;
    }
    /**
     * Is-virtual flag value.
     *
     * @return int|null
     */
    public function getIsVirtual() : ?int
    {
        return $this->isVirtual;
    }
    /**
     * Is-virtual flag value.
     *
     * @param int|null $isVirtual
     *
     * @return self
     */
    public function setIsVirtual(?int $isVirtual) : self
    {
        $this->initialized['isVirtual'] = true;
        $this->isVirtual = $isVirtual;
        return $this;
    }
    /**
     * Item ID.
     *
     * @return int|null
     */
    public function getItemId() : ?int
    {
        return $this->itemId;
    }
    /**
     * Item ID.
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
     * Locked DO invoice flag value.
     *
     * @return int|null
     */
    public function getLockedDoInvoice() : ?int
    {
        return $this->lockedDoInvoice;
    }
    /**
     * Locked DO invoice flag value.
     *
     * @param int|null $lockedDoInvoice
     *
     * @return self
     */
    public function setLockedDoInvoice(?int $lockedDoInvoice) : self
    {
        $this->initialized['lockedDoInvoice'] = true;
        $this->lockedDoInvoice = $lockedDoInvoice;
        return $this;
    }
    /**
     * Locked DO ship flag value.
     *
     * @return int|null
     */
    public function getLockedDoShip() : ?int
    {
        return $this->lockedDoShip;
    }
    /**
     * Locked DO ship flag value.
     *
     * @param int|null $lockedDoShip
     *
     * @return self
     */
    public function setLockedDoShip(?int $lockedDoShip) : self
    {
        $this->initialized['lockedDoShip'] = true;
        $this->lockedDoShip = $lockedDoShip;
        return $this;
    }
    /**
     * Name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name.
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
    /**
     * No-discount flag value.
     *
     * @return int|null
     */
    public function getNoDiscount() : ?int
    {
        return $this->noDiscount;
    }
    /**
     * No-discount flag value.
     *
     * @param int|null $noDiscount
     *
     * @return self
     */
    public function setNoDiscount(?int $noDiscount) : self
    {
        $this->initialized['noDiscount'] = true;
        $this->noDiscount = $noDiscount;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int|null
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId) : self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Original price.
     *
     * @return float|null
     */
    public function getOriginalPrice() : ?float
    {
        return $this->originalPrice;
    }
    /**
     * Original price.
     *
     * @param float|null $originalPrice
     *
     * @return self
     */
    public function setOriginalPrice(?float $originalPrice) : self
    {
        $this->initialized['originalPrice'] = true;
        $this->originalPrice = $originalPrice;
        return $this;
    }
    /**
     * Parent item ID.
     *
     * @return int|null
     */
    public function getParentItemId() : ?int
    {
        return $this->parentItemId;
    }
    /**
     * Parent item ID.
     *
     * @param int|null $parentItemId
     *
     * @return self
     */
    public function setParentItemId(?int $parentItemId) : self
    {
        $this->initialized['parentItemId'] = true;
        $this->parentItemId = $parentItemId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Price.
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
     * Price including tax.
     *
     * @return float|null
     */
    public function getPriceInclTax() : ?float
    {
        return $this->priceInclTax;
    }
    /**
     * Price including tax.
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
     * Product ID.
     *
     * @return int|null
     */
    public function getProductId() : ?int
    {
        return $this->productId;
    }
    /**
     * Product ID.
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId) : self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * Product type.
     *
     * @return string|null
     */
    public function getProductType() : ?string
    {
        return $this->productType;
    }
    /**
     * Product type.
     *
     * @param string|null $productType
     *
     * @return self
     */
    public function setProductType(?string $productType) : self
    {
        $this->initialized['productType'] = true;
        $this->productType = $productType;
        return $this;
    }
    /**
     * Quantity backordered.
     *
     * @return float|null
     */
    public function getQtyBackordered() : ?float
    {
        return $this->qtyBackordered;
    }
    /**
     * Quantity backordered.
     *
     * @param float|null $qtyBackordered
     *
     * @return self
     */
    public function setQtyBackordered(?float $qtyBackordered) : self
    {
        $this->initialized['qtyBackordered'] = true;
        $this->qtyBackordered = $qtyBackordered;
        return $this;
    }
    /**
     * Quantity canceled.
     *
     * @return float|null
     */
    public function getQtyCanceled() : ?float
    {
        return $this->qtyCanceled;
    }
    /**
     * Quantity canceled.
     *
     * @param float|null $qtyCanceled
     *
     * @return self
     */
    public function setQtyCanceled(?float $qtyCanceled) : self
    {
        $this->initialized['qtyCanceled'] = true;
        $this->qtyCanceled = $qtyCanceled;
        return $this;
    }
    /**
     * Quantity invoiced.
     *
     * @return float|null
     */
    public function getQtyInvoiced() : ?float
    {
        return $this->qtyInvoiced;
    }
    /**
     * Quantity invoiced.
     *
     * @param float|null $qtyInvoiced
     *
     * @return self
     */
    public function setQtyInvoiced(?float $qtyInvoiced) : self
    {
        $this->initialized['qtyInvoiced'] = true;
        $this->qtyInvoiced = $qtyInvoiced;
        return $this;
    }
    /**
     * Quantity ordered.
     *
     * @return float|null
     */
    public function getQtyOrdered() : ?float
    {
        return $this->qtyOrdered;
    }
    /**
     * Quantity ordered.
     *
     * @param float|null $qtyOrdered
     *
     * @return self
     */
    public function setQtyOrdered(?float $qtyOrdered) : self
    {
        $this->initialized['qtyOrdered'] = true;
        $this->qtyOrdered = $qtyOrdered;
        return $this;
    }
    /**
     * Quantity refunded.
     *
     * @return float|null
     */
    public function getQtyRefunded() : ?float
    {
        return $this->qtyRefunded;
    }
    /**
     * Quantity refunded.
     *
     * @param float|null $qtyRefunded
     *
     * @return self
     */
    public function setQtyRefunded(?float $qtyRefunded) : self
    {
        $this->initialized['qtyRefunded'] = true;
        $this->qtyRefunded = $qtyRefunded;
        return $this;
    }
    /**
     * Quantity returned.
     *
     * @return float|null
     */
    public function getQtyReturned() : ?float
    {
        return $this->qtyReturned;
    }
    /**
     * Quantity returned.
     *
     * @param float|null $qtyReturned
     *
     * @return self
     */
    public function setQtyReturned(?float $qtyReturned) : self
    {
        $this->initialized['qtyReturned'] = true;
        $this->qtyReturned = $qtyReturned;
        return $this;
    }
    /**
     * Quantity shipped.
     *
     * @return float|null
     */
    public function getQtyShipped() : ?float
    {
        return $this->qtyShipped;
    }
    /**
     * Quantity shipped.
     *
     * @param float|null $qtyShipped
     *
     * @return self
     */
    public function setQtyShipped(?float $qtyShipped) : self
    {
        $this->initialized['qtyShipped'] = true;
        $this->qtyShipped = $qtyShipped;
        return $this;
    }
    /**
     * Quote item ID.
     *
     * @return int|null
     */
    public function getQuoteItemId() : ?int
    {
        return $this->quoteItemId;
    }
    /**
     * Quote item ID.
     *
     * @param int|null $quoteItemId
     *
     * @return self
     */
    public function setQuoteItemId(?int $quoteItemId) : self
    {
        $this->initialized['quoteItemId'] = true;
        $this->quoteItemId = $quoteItemId;
        return $this;
    }
    /**
     * Row invoiced.
     *
     * @return float|null
     */
    public function getRowInvoiced() : ?float
    {
        return $this->rowInvoiced;
    }
    /**
     * Row invoiced.
     *
     * @param float|null $rowInvoiced
     *
     * @return self
     */
    public function setRowInvoiced(?float $rowInvoiced) : self
    {
        $this->initialized['rowInvoiced'] = true;
        $this->rowInvoiced = $rowInvoiced;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float|null
     */
    public function getRowTotal() : ?float
    {
        return $this->rowTotal;
    }
    /**
     * Row total.
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
     * Row total including tax.
     *
     * @return float|null
     */
    public function getRowTotalInclTax() : ?float
    {
        return $this->rowTotalInclTax;
    }
    /**
     * Row total including tax.
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
     * Row weight.
     *
     * @return float|null
     */
    public function getRowWeight() : ?float
    {
        return $this->rowWeight;
    }
    /**
     * Row weight.
     *
     * @param float|null $rowWeight
     *
     * @return self
     */
    public function setRowWeight(?float $rowWeight) : self
    {
        $this->initialized['rowWeight'] = true;
        $this->rowWeight = $rowWeight;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Store ID.
     *
     * @return int|null
     */
    public function getStoreId() : ?int
    {
        return $this->storeId;
    }
    /**
     * Store ID.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float|null
     */
    public function getTaxAmount() : ?float
    {
        return $this->taxAmount;
    }
    /**
     * Tax amount.
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
     * Tax before discount.
     *
     * @return float|null
     */
    public function getTaxBeforeDiscount() : ?float
    {
        return $this->taxBeforeDiscount;
    }
    /**
     * Tax before discount.
     *
     * @param float|null $taxBeforeDiscount
     *
     * @return self
     */
    public function setTaxBeforeDiscount(?float $taxBeforeDiscount) : self
    {
        $this->initialized['taxBeforeDiscount'] = true;
        $this->taxBeforeDiscount = $taxBeforeDiscount;
        return $this;
    }
    /**
     * Tax canceled.
     *
     * @return float|null
     */
    public function getTaxCanceled() : ?float
    {
        return $this->taxCanceled;
    }
    /**
     * Tax canceled.
     *
     * @param float|null $taxCanceled
     *
     * @return self
     */
    public function setTaxCanceled(?float $taxCanceled) : self
    {
        $this->initialized['taxCanceled'] = true;
        $this->taxCanceled = $taxCanceled;
        return $this;
    }
    /**
     * Tax invoiced.
     *
     * @return float|null
     */
    public function getTaxInvoiced() : ?float
    {
        return $this->taxInvoiced;
    }
    /**
     * Tax invoiced.
     *
     * @param float|null $taxInvoiced
     *
     * @return self
     */
    public function setTaxInvoiced(?float $taxInvoiced) : self
    {
        $this->initialized['taxInvoiced'] = true;
        $this->taxInvoiced = $taxInvoiced;
        return $this;
    }
    /**
     * Tax percent.
     *
     * @return float|null
     */
    public function getTaxPercent() : ?float
    {
        return $this->taxPercent;
    }
    /**
     * Tax percent.
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
     * Tax refunded.
     *
     * @return float|null
     */
    public function getTaxRefunded() : ?float
    {
        return $this->taxRefunded;
    }
    /**
     * Tax refunded.
     *
     * @param float|null $taxRefunded
     *
     * @return self
     */
    public function setTaxRefunded(?float $taxRefunded) : self
    {
        $this->initialized['taxRefunded'] = true;
        $this->taxRefunded = $taxRefunded;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * Updated-at timestamp.
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * WEEE tax applied.
     *
     * @return string|null
     */
    public function getWeeeTaxApplied() : ?string
    {
        return $this->weeeTaxApplied;
    }
    /**
     * WEEE tax applied.
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
     * WEEE tax applied amount.
     *
     * @return float|null
     */
    public function getWeeeTaxAppliedAmount() : ?float
    {
        return $this->weeeTaxAppliedAmount;
    }
    /**
     * WEEE tax applied amount.
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
     * WEEE tax applied row amount.
     *
     * @return float|null
     */
    public function getWeeeTaxAppliedRowAmount() : ?float
    {
        return $this->weeeTaxAppliedRowAmount;
    }
    /**
     * WEEE tax applied row amount.
     *
     * @param float|null $weeeTaxAppliedRowAmount
     *
     * @return self
     */
    public function setWeeeTaxAppliedRowAmount(?float $weeeTaxAppliedRowAmount) : self
    {
        $this->initialized['weeeTaxAppliedRowAmount'] = true;
        $this->weeeTaxAppliedRowAmount = $weeeTaxAppliedRowAmount;
        return $this;
    }
    /**
     * WEEE tax disposition.
     *
     * @return float|null
     */
    public function getWeeeTaxDisposition() : ?float
    {
        return $this->weeeTaxDisposition;
    }
    /**
     * WEEE tax disposition.
     *
     * @param float|null $weeeTaxDisposition
     *
     * @return self
     */
    public function setWeeeTaxDisposition(?float $weeeTaxDisposition) : self
    {
        $this->initialized['weeeTaxDisposition'] = true;
        $this->weeeTaxDisposition = $weeeTaxDisposition;
        return $this;
    }
    /**
     * WEEE tax row disposition.
     *
     * @return float|null
     */
    public function getWeeeTaxRowDisposition() : ?float
    {
        return $this->weeeTaxRowDisposition;
    }
    /**
     * WEEE tax row disposition.
     *
     * @param float|null $weeeTaxRowDisposition
     *
     * @return self
     */
    public function setWeeeTaxRowDisposition(?float $weeeTaxRowDisposition) : self
    {
        $this->initialized['weeeTaxRowDisposition'] = true;
        $this->weeeTaxRowDisposition = $weeeTaxRowDisposition;
        return $this;
    }
    /**
     * Weight.
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Weight.
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderItemInterface|null
     */
    public function getParentItem() : ?SalesDataOrderItemInterface
    {
        return $this->parentItem;
    }
    /**
     * Order item interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderItemInterface|null $parentItem
     *
     * @return self
     */
    public function setParentItem(?SalesDataOrderItemInterface $parentItem) : self
    {
        $this->initialized['parentItem'] = true;
        $this->parentItem = $parentItem;
        return $this;
    }
    /**
     * Product option interface
     *
     * @return CatalogDataProductOptionInterface|null
     */
    public function getProductOption() : ?CatalogDataProductOptionInterface
    {
        return $this->productOption;
    }
    /**
     * Product option interface
     *
     * @param CatalogDataProductOptionInterface|null $productOption
     *
     * @return self
     */
    public function setProductOption(?CatalogDataProductOptionInterface $productOption) : self
    {
        $this->initialized['productOption'] = true;
        $this->productOption = $productOption;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @return SalesDataOrderItemExtensionInterface|null
     */
    public function getExtensionAttributes() : ?SalesDataOrderItemExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderItemInterface
     *
     * @param SalesDataOrderItemExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataOrderItemExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}