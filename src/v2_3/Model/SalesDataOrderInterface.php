<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataOrderInterface
{
    /**
     * Negative adjustment value.
     *
     * @var float|null
     */
    protected $adjustmentNegative;
    /**
     * Positive adjustment value.
     *
     * @var float|null
     */
    protected $adjustmentPositive;
    /**
     * Applied rule IDs.
     *
     * @var string|null
     */
    protected $appliedRuleIds;
    /**
     * Base negative adjustment value.
     *
     * @var float|null
     */
    protected $baseAdjustmentNegative;
    /**
     * Base positive adjustment value.
     *
     * @var float|null
     */
    protected $baseAdjustmentPositive;
    /**
     * Base currency code.
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * Base discount amount.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Base discount canceled.
     *
     * @var float|null
     */
    protected $baseDiscountCanceled;
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
     * Base grand total.
     *
     * @var float|null
     */
    protected $baseGrandTotal;
    /**
     * Base shipping amount.
     *
     * @var float|null
     */
    protected $baseShippingAmount;
    /**
     * Base shipping canceled.
     *
     * @var float|null
     */
    protected $baseShippingCanceled;
    /**
     * Base shipping discount amount.
     *
     * @var float|null
     */
    protected $baseShippingDiscountAmount;
    /**
     * Base shipping discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseShippingDiscountTaxCompensationAmnt;
    /**
     * Base shipping including tax.
     *
     * @var float|null
     */
    protected $baseShippingInclTax;
    /**
     * Base shipping invoiced.
     *
     * @var float|null
     */
    protected $baseShippingInvoiced;
    /**
     * Base shipping refunded.
     *
     * @var float|null
     */
    protected $baseShippingRefunded;
    /**
     * Base shipping tax amount.
     *
     * @var float|null
     */
    protected $baseShippingTaxAmount;
    /**
     * Base shipping tax refunded.
     *
     * @var float|null
     */
    protected $baseShippingTaxRefunded;
    /**
     * Base subtotal.
     *
     * @var float|null
     */
    protected $baseSubtotal;
    /**
     * Base subtotal canceled.
     *
     * @var float|null
     */
    protected $baseSubtotalCanceled;
    /**
     * Base subtotal including tax.
     *
     * @var float|null
     */
    protected $baseSubtotalInclTax;
    /**
     * Base subtotal invoiced.
     *
     * @var float|null
     */
    protected $baseSubtotalInvoiced;
    /**
     * Base subtotal refunded.
     *
     * @var float|null
     */
    protected $baseSubtotalRefunded;
    /**
     * Base tax amount.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Base tax canceled.
     *
     * @var float|null
     */
    protected $baseTaxCanceled;
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
     * Base-to-global rate.
     *
     * @var float|null
     */
    protected $baseToGlobalRate;
    /**
     * Base-to-order rate.
     *
     * @var float|null
     */
    protected $baseToOrderRate;
    /**
     * Base total canceled.
     *
     * @var float|null
     */
    protected $baseTotalCanceled;
    /**
     * Base total due.
     *
     * @var float|null
     */
    protected $baseTotalDue;
    /**
     * Base total invoiced.
     *
     * @var float|null
     */
    protected $baseTotalInvoiced;
    /**
     * Base total invoiced cost.
     *
     * @var float|null
     */
    protected $baseTotalInvoicedCost;
    /**
     * Base total offline refunded.
     *
     * @var float|null
     */
    protected $baseTotalOfflineRefunded;
    /**
     * Base total online refunded.
     *
     * @var float|null
     */
    protected $baseTotalOnlineRefunded;
    /**
     * Base total paid.
     *
     * @var float|null
     */
    protected $baseTotalPaid;
    /**
     * Base total quantity ordered.
     *
     * @var float|null
     */
    protected $baseTotalQtyOrdered;
    /**
     * Base total refunded.
     *
     * @var float|null
     */
    protected $baseTotalRefunded;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $billingAddress;
    /**
     * Billing address ID.
     *
     * @var int|null
     */
    protected $billingAddressId;
    /**
     * Can-ship-partially flag value.
     *
     * @var int|null
     */
    protected $canShipPartially;
    /**
     * Can-ship-partially-item flag value.
     *
     * @var int|null
     */
    protected $canShipPartiallyItem;
    /**
     * Coupon code.
     *
     * @var string|null
     */
    protected $couponCode;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Customer date-of-birth (DOB).
     *
     * @var string|null
     */
    protected $customerDob;
    /**
     * Customer email address.
     *
     * @var string|null
     */
    protected $customerEmail;
    /**
     * Customer first name.
     *
     * @var string|null
     */
    protected $customerFirstname;
    /**
     * Customer gender.
     *
     * @var int|null
     */
    protected $customerGender;
    /**
     * Customer group ID.
     *
     * @var int|null
     */
    protected $customerGroupId;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Customer-is-guest flag value.
     *
     * @var int|null
     */
    protected $customerIsGuest;
    /**
     * Customer last name.
     *
     * @var string|null
     */
    protected $customerLastname;
    /**
     * Customer middle name.
     *
     * @var string|null
     */
    protected $customerMiddlename;
    /**
     * Customer note.
     *
     * @var string|null
     */
    protected $customerNote;
    /**
     * Customer-note-notify flag value.
     *
     * @var int|null
     */
    protected $customerNoteNotify;
    /**
     * Customer prefix.
     *
     * @var string|null
     */
    protected $customerPrefix;
    /**
     * Customer suffix.
     *
     * @var string|null
     */
    protected $customerSuffix;
    /**
     * Customer value-added tax (VAT).
     *
     * @var string|null
     */
    protected $customerTaxvat;
    /**
     * Discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount canceled.
     *
     * @var float|null
     */
    protected $discountCanceled;
    /**
     * Discount description.
     *
     * @var string|null
     */
    protected $discountDescription;
    /**
     * Discount invoiced.
     *
     * @var float|null
     */
    protected $discountInvoiced;
    /**
     * Discount refunded amount.
     *
     * @var float|null
     */
    protected $discountRefunded;
    /**
     * Discount tax compensation amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationAmount;
    /**
     * Discount tax compensation invoiced amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationInvoiced;
    /**
     * Discount tax compensation refunded amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationRefunded;
    /**
     * Edit increment value.
     *
     * @var int|null
     */
    protected $editIncrement;
    /**
     * Email-sent flag value.
     *
     * @var int|null
     */
    protected $emailSent;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * External customer ID.
     *
     * @var string|null
     */
    protected $extCustomerId;
    /**
     * External order ID.
     *
     * @var string|null
     */
    protected $extOrderId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @var SalesDataOrderExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @var int|null
     */
    protected $forcedShipmentWithInvoice;
    /**
     * Global currency code.
     *
     * @var string|null
     */
    protected $globalCurrencyCode;
    /**
     * Grand total.
     *
     * @var float|null
     */
    protected $grandTotal;
    /**
     * Hold before state.
     *
     * @var string|null
     */
    protected $holdBeforeState;
    /**
     * Hold before status.
     *
     * @var string|null
     */
    protected $holdBeforeStatus;
    /**
     * Increment ID.
     *
     * @var string|null
     */
    protected $incrementId;
    /**
     * Is-virtual flag value.
     *
     * @var int|null
     */
    protected $isVirtual;
    /**
     * Array of items.
     *
     * @var SalesDataOrderItemInterface[]|null
     */
    protected $items;
    /**
     * Order currency code.
     *
     * @var string|null
     */
    protected $orderCurrencyCode;
    /**
     * Original increment ID.
     *
     * @var string|null
     */
    protected $originalIncrementId;
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderPaymentInterface|null
     */
    protected $payment;
    /**
     * Payment authorization expiration date.
     *
     * @var int|null
     */
    protected $paymentAuthExpiration;
    /**
     * Payment authorization amount.
     *
     * @var float|null
     */
    protected $paymentAuthorizationAmount;
    /**
     * Protect code.
     *
     * @var string|null
     */
    protected $protectCode;
    /**
     * Quote address ID.
     *
     * @var int|null
     */
    protected $quoteAddressId;
    /**
     * Quote ID.
     *
     * @var int|null
     */
    protected $quoteId;
    /**
     * Relation child ID.
     *
     * @var string|null
     */
    protected $relationChildId;
    /**
     * Relation child real ID.
     *
     * @var string|null
     */
    protected $relationChildRealId;
    /**
     * Relation parent ID.
     *
     * @var string|null
     */
    protected $relationParentId;
    /**
     * Relation parent real ID.
     *
     * @var string|null
     */
    protected $relationParentRealId;
    /**
     * Remote IP address.
     *
     * @var string|null
     */
    protected $remoteIp;
    /**
     * Shipping amount.
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Shipping canceled amount.
     *
     * @var float|null
     */
    protected $shippingCanceled;
    /**
     * Shipping description.
     *
     * @var string|null
     */
    protected $shippingDescription;
    /**
     * Shipping discount amount.
     *
     * @var float|null
     */
    protected $shippingDiscountAmount;
    /**
     * Shipping discount tax compensation amount.
     *
     * @var float|null
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Shipping including tax amount.
     *
     * @var float|null
     */
    protected $shippingInclTax;
    /**
     * Shipping invoiced amount.
     *
     * @var float|null
     */
    protected $shippingInvoiced;
    /**
     * Shipping refunded amount.
     *
     * @var float|null
     */
    protected $shippingRefunded;
    /**
     * Shipping tax amount.
     *
     * @var float|null
     */
    protected $shippingTaxAmount;
    /**
     * Shipping tax refunded amount.
     *
     * @var float|null
     */
    protected $shippingTaxRefunded;
    /**
     * State.
     *
     * @var string|null
     */
    protected $state;
    /**
     * Status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Array of status histories.
     *
     * @var SalesDataOrderStatusHistoryInterface[]|null
     */
    protected $statusHistories;
    /**
     * Store currency code.
     *
     * @var string|null
     */
    protected $storeCurrencyCode;
    /**
     * Store ID.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Store name.
     *
     * @var string|null
     */
    protected $storeName;
    /**
     * Store-to-base rate.
     *
     * @var float|null
     */
    protected $storeToBaseRate;
    /**
     * Store-to-order rate.
     *
     * @var float|null
     */
    protected $storeToOrderRate;
    /**
     * Subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * Subtotal canceled amount.
     *
     * @var float|null
     */
    protected $subtotalCanceled;
    /**
     * Subtotal including tax amount.
     *
     * @var float|null
     */
    protected $subtotalInclTax;
    /**
     * Subtotal invoiced amount.
     *
     * @var float|null
     */
    protected $subtotalInvoiced;
    /**
     * Subtotal refunded amount.
     *
     * @var float|null
     */
    protected $subtotalRefunded;
    /**
     * Tax amount.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Tax canceled amount.
     *
     * @var float|null
     */
    protected $taxCanceled;
    /**
     * Tax invoiced amount.
     *
     * @var float|null
     */
    protected $taxInvoiced;
    /**
     * Tax refunded amount.
     *
     * @var float|null
     */
    protected $taxRefunded;
    /**
     * Total canceled.
     *
     * @var float|null
     */
    protected $totalCanceled;
    /**
     * Total due.
     *
     * @var float|null
     */
    protected $totalDue;
    /**
     * Total invoiced amount.
     *
     * @var float|null
     */
    protected $totalInvoiced;
    /**
     * Total item count.
     *
     * @var int|null
     */
    protected $totalItemCount;
    /**
     * Total offline refunded amount.
     *
     * @var float|null
     */
    protected $totalOfflineRefunded;
    /**
     * Total online refunded amount.
     *
     * @var float|null
     */
    protected $totalOnlineRefunded;
    /**
     * Total paid.
     *
     * @var float|null
     */
    protected $totalPaid;
    /**
     * Total quantity ordered.
     *
     * @var float|null
     */
    protected $totalQtyOrdered;
    /**
     * Total amount refunded.
     *
     * @var float|null
     */
    protected $totalRefunded;
    /**
     * Updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * X-Forwarded-For field value.
     *
     * @var string|null
     */
    protected $xForwardedFor;
    /**
     * Negative adjustment value.
     *
     * @return float|null
     */
    public function getAdjustmentNegative(): ?float
    {
        return $this->adjustmentNegative;
    }
    /**
     * Negative adjustment value.
     *
     * @param float|null $adjustmentNegative
     *
     * @return self
     */
    public function setAdjustmentNegative(?float $adjustmentNegative): self
    {
        $this->adjustmentNegative = $adjustmentNegative;
        return $this;
    }
    /**
     * Positive adjustment value.
     *
     * @return float|null
     */
    public function getAdjustmentPositive(): ?float
    {
        return $this->adjustmentPositive;
    }
    /**
     * Positive adjustment value.
     *
     * @param float|null $adjustmentPositive
     *
     * @return self
     */
    public function setAdjustmentPositive(?float $adjustmentPositive): self
    {
        $this->adjustmentPositive = $adjustmentPositive;
        return $this;
    }
    /**
     * Applied rule IDs.
     *
     * @return string|null
     */
    public function getAppliedRuleIds(): ?string
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
    public function setAppliedRuleIds(?string $appliedRuleIds): self
    {
        $this->appliedRuleIds = $appliedRuleIds;
        return $this;
    }
    /**
     * Base negative adjustment value.
     *
     * @return float|null
     */
    public function getBaseAdjustmentNegative(): ?float
    {
        return $this->baseAdjustmentNegative;
    }
    /**
     * Base negative adjustment value.
     *
     * @param float|null $baseAdjustmentNegative
     *
     * @return self
     */
    public function setBaseAdjustmentNegative(?float $baseAdjustmentNegative): self
    {
        $this->baseAdjustmentNegative = $baseAdjustmentNegative;
        return $this;
    }
    /**
     * Base positive adjustment value.
     *
     * @return float|null
     */
    public function getBaseAdjustmentPositive(): ?float
    {
        return $this->baseAdjustmentPositive;
    }
    /**
     * Base positive adjustment value.
     *
     * @param float|null $baseAdjustmentPositive
     *
     * @return self
     */
    public function setBaseAdjustmentPositive(?float $baseAdjustmentPositive): self
    {
        $this->baseAdjustmentPositive = $baseAdjustmentPositive;
        return $this;
    }
    /**
     * Base currency code.
     *
     * @return string|null
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code.
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * Base discount amount.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount(): ?float
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
    public function setBaseDiscountAmount(?float $baseDiscountAmount): self
    {
        $this->baseDiscountAmount = $baseDiscountAmount;
        return $this;
    }
    /**
     * Base discount canceled.
     *
     * @return float|null
     */
    public function getBaseDiscountCanceled(): ?float
    {
        return $this->baseDiscountCanceled;
    }
    /**
     * Base discount canceled.
     *
     * @param float|null $baseDiscountCanceled
     *
     * @return self
     */
    public function setBaseDiscountCanceled(?float $baseDiscountCanceled): self
    {
        $this->baseDiscountCanceled = $baseDiscountCanceled;
        return $this;
    }
    /**
     * Base discount invoiced.
     *
     * @return float|null
     */
    public function getBaseDiscountInvoiced(): ?float
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
    public function setBaseDiscountInvoiced(?float $baseDiscountInvoiced): self
    {
        $this->baseDiscountInvoiced = $baseDiscountInvoiced;
        return $this;
    }
    /**
     * Base discount refunded.
     *
     * @return float|null
     */
    public function getBaseDiscountRefunded(): ?float
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
    public function setBaseDiscountRefunded(?float $baseDiscountRefunded): self
    {
        $this->baseDiscountRefunded = $baseDiscountRefunded;
        return $this;
    }
    /**
     * Base discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationAmount(): ?float
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
    public function setBaseDiscountTaxCompensationAmount(?float $baseDiscountTaxCompensationAmount): self
    {
        $this->baseDiscountTaxCompensationAmount = $baseDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Base discount tax compensation invoiced.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationInvoiced(): ?float
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
    public function setBaseDiscountTaxCompensationInvoiced(?float $baseDiscountTaxCompensationInvoiced): self
    {
        $this->baseDiscountTaxCompensationInvoiced = $baseDiscountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Base discount tax compensation refunded.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationRefunded(): ?float
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
    public function setBaseDiscountTaxCompensationRefunded(?float $baseDiscountTaxCompensationRefunded): self
    {
        $this->baseDiscountTaxCompensationRefunded = $baseDiscountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Base grand total.
     *
     * @return float|null
     */
    public function getBaseGrandTotal(): ?float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Base grand total.
     *
     * @param float|null $baseGrandTotal
     *
     * @return self
     */
    public function setBaseGrandTotal(?float $baseGrandTotal): self
    {
        $this->baseGrandTotal = $baseGrandTotal;
        return $this;
    }
    /**
     * Base shipping amount.
     *
     * @return float|null
     */
    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Base shipping amount.
     *
     * @param float|null $baseShippingAmount
     *
     * @return self
     */
    public function setBaseShippingAmount(?float $baseShippingAmount): self
    {
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Base shipping canceled.
     *
     * @return float|null
     */
    public function getBaseShippingCanceled(): ?float
    {
        return $this->baseShippingCanceled;
    }
    /**
     * Base shipping canceled.
     *
     * @param float|null $baseShippingCanceled
     *
     * @return self
     */
    public function setBaseShippingCanceled(?float $baseShippingCanceled): self
    {
        $this->baseShippingCanceled = $baseShippingCanceled;
        return $this;
    }
    /**
     * Base shipping discount amount.
     *
     * @return float|null
     */
    public function getBaseShippingDiscountAmount(): ?float
    {
        return $this->baseShippingDiscountAmount;
    }
    /**
     * Base shipping discount amount.
     *
     * @param float|null $baseShippingDiscountAmount
     *
     * @return self
     */
    public function setBaseShippingDiscountAmount(?float $baseShippingDiscountAmount): self
    {
        $this->baseShippingDiscountAmount = $baseShippingDiscountAmount;
        return $this;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseShippingDiscountTaxCompensationAmnt(): ?float
    {
        return $this->baseShippingDiscountTaxCompensationAmnt;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @param float|null $baseShippingDiscountTaxCompensationAmnt
     *
     * @return self
     */
    public function setBaseShippingDiscountTaxCompensationAmnt(?float $baseShippingDiscountTaxCompensationAmnt): self
    {
        $this->baseShippingDiscountTaxCompensationAmnt = $baseShippingDiscountTaxCompensationAmnt;
        return $this;
    }
    /**
     * Base shipping including tax.
     *
     * @return float|null
     */
    public function getBaseShippingInclTax(): ?float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Base shipping including tax.
     *
     * @param float|null $baseShippingInclTax
     *
     * @return self
     */
    public function setBaseShippingInclTax(?float $baseShippingInclTax): self
    {
        $this->baseShippingInclTax = $baseShippingInclTax;
        return $this;
    }
    /**
     * Base shipping invoiced.
     *
     * @return float|null
     */
    public function getBaseShippingInvoiced(): ?float
    {
        return $this->baseShippingInvoiced;
    }
    /**
     * Base shipping invoiced.
     *
     * @param float|null $baseShippingInvoiced
     *
     * @return self
     */
    public function setBaseShippingInvoiced(?float $baseShippingInvoiced): self
    {
        $this->baseShippingInvoiced = $baseShippingInvoiced;
        return $this;
    }
    /**
     * Base shipping refunded.
     *
     * @return float|null
     */
    public function getBaseShippingRefunded(): ?float
    {
        return $this->baseShippingRefunded;
    }
    /**
     * Base shipping refunded.
     *
     * @param float|null $baseShippingRefunded
     *
     * @return self
     */
    public function setBaseShippingRefunded(?float $baseShippingRefunded): self
    {
        $this->baseShippingRefunded = $baseShippingRefunded;
        return $this;
    }
    /**
     * Base shipping tax amount.
     *
     * @return float|null
     */
    public function getBaseShippingTaxAmount(): ?float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Base shipping tax amount.
     *
     * @param float|null $baseShippingTaxAmount
     *
     * @return self
     */
    public function setBaseShippingTaxAmount(?float $baseShippingTaxAmount): self
    {
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }
    /**
     * Base shipping tax refunded.
     *
     * @return float|null
     */
    public function getBaseShippingTaxRefunded(): ?float
    {
        return $this->baseShippingTaxRefunded;
    }
    /**
     * Base shipping tax refunded.
     *
     * @param float|null $baseShippingTaxRefunded
     *
     * @return self
     */
    public function setBaseShippingTaxRefunded(?float $baseShippingTaxRefunded): self
    {
        $this->baseShippingTaxRefunded = $baseShippingTaxRefunded;
        return $this;
    }
    /**
     * Base subtotal.
     *
     * @return float|null
     */
    public function getBaseSubtotal(): ?float
    {
        return $this->baseSubtotal;
    }
    /**
     * Base subtotal.
     *
     * @param float|null $baseSubtotal
     *
     * @return self
     */
    public function setBaseSubtotal(?float $baseSubtotal): self
    {
        $this->baseSubtotal = $baseSubtotal;
        return $this;
    }
    /**
     * Base subtotal canceled.
     *
     * @return float|null
     */
    public function getBaseSubtotalCanceled(): ?float
    {
        return $this->baseSubtotalCanceled;
    }
    /**
     * Base subtotal canceled.
     *
     * @param float|null $baseSubtotalCanceled
     *
     * @return self
     */
    public function setBaseSubtotalCanceled(?float $baseSubtotalCanceled): self
    {
        $this->baseSubtotalCanceled = $baseSubtotalCanceled;
        return $this;
    }
    /**
     * Base subtotal including tax.
     *
     * @return float|null
     */
    public function getBaseSubtotalInclTax(): ?float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Base subtotal including tax.
     *
     * @param float|null $baseSubtotalInclTax
     *
     * @return self
     */
    public function setBaseSubtotalInclTax(?float $baseSubtotalInclTax): self
    {
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;
        return $this;
    }
    /**
     * Base subtotal invoiced.
     *
     * @return float|null
     */
    public function getBaseSubtotalInvoiced(): ?float
    {
        return $this->baseSubtotalInvoiced;
    }
    /**
     * Base subtotal invoiced.
     *
     * @param float|null $baseSubtotalInvoiced
     *
     * @return self
     */
    public function setBaseSubtotalInvoiced(?float $baseSubtotalInvoiced): self
    {
        $this->baseSubtotalInvoiced = $baseSubtotalInvoiced;
        return $this;
    }
    /**
     * Base subtotal refunded.
     *
     * @return float|null
     */
    public function getBaseSubtotalRefunded(): ?float
    {
        return $this->baseSubtotalRefunded;
    }
    /**
     * Base subtotal refunded.
     *
     * @param float|null $baseSubtotalRefunded
     *
     * @return self
     */
    public function setBaseSubtotalRefunded(?float $baseSubtotalRefunded): self
    {
        $this->baseSubtotalRefunded = $baseSubtotalRefunded;
        return $this;
    }
    /**
     * Base tax amount.
     *
     * @return float|null
     */
    public function getBaseTaxAmount(): ?float
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
    public function setBaseTaxAmount(?float $baseTaxAmount): self
    {
        $this->baseTaxAmount = $baseTaxAmount;
        return $this;
    }
    /**
     * Base tax canceled.
     *
     * @return float|null
     */
    public function getBaseTaxCanceled(): ?float
    {
        return $this->baseTaxCanceled;
    }
    /**
     * Base tax canceled.
     *
     * @param float|null $baseTaxCanceled
     *
     * @return self
     */
    public function setBaseTaxCanceled(?float $baseTaxCanceled): self
    {
        $this->baseTaxCanceled = $baseTaxCanceled;
        return $this;
    }
    /**
     * Base tax invoiced.
     *
     * @return float|null
     */
    public function getBaseTaxInvoiced(): ?float
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
    public function setBaseTaxInvoiced(?float $baseTaxInvoiced): self
    {
        $this->baseTaxInvoiced = $baseTaxInvoiced;
        return $this;
    }
    /**
     * Base tax refunded.
     *
     * @return float|null
     */
    public function getBaseTaxRefunded(): ?float
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
    public function setBaseTaxRefunded(?float $baseTaxRefunded): self
    {
        $this->baseTaxRefunded = $baseTaxRefunded;
        return $this;
    }
    /**
     * Base-to-global rate.
     *
     * @return float|null
     */
    public function getBaseToGlobalRate(): ?float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Base-to-global rate.
     *
     * @param float|null $baseToGlobalRate
     *
     * @return self
     */
    public function setBaseToGlobalRate(?float $baseToGlobalRate): self
    {
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }
    /**
     * Base-to-order rate.
     *
     * @return float|null
     */
    public function getBaseToOrderRate(): ?float
    {
        return $this->baseToOrderRate;
    }
    /**
     * Base-to-order rate.
     *
     * @param float|null $baseToOrderRate
     *
     * @return self
     */
    public function setBaseToOrderRate(?float $baseToOrderRate): self
    {
        $this->baseToOrderRate = $baseToOrderRate;
        return $this;
    }
    /**
     * Base total canceled.
     *
     * @return float|null
     */
    public function getBaseTotalCanceled(): ?float
    {
        return $this->baseTotalCanceled;
    }
    /**
     * Base total canceled.
     *
     * @param float|null $baseTotalCanceled
     *
     * @return self
     */
    public function setBaseTotalCanceled(?float $baseTotalCanceled): self
    {
        $this->baseTotalCanceled = $baseTotalCanceled;
        return $this;
    }
    /**
     * Base total due.
     *
     * @return float|null
     */
    public function getBaseTotalDue(): ?float
    {
        return $this->baseTotalDue;
    }
    /**
     * Base total due.
     *
     * @param float|null $baseTotalDue
     *
     * @return self
     */
    public function setBaseTotalDue(?float $baseTotalDue): self
    {
        $this->baseTotalDue = $baseTotalDue;
        return $this;
    }
    /**
     * Base total invoiced.
     *
     * @return float|null
     */
    public function getBaseTotalInvoiced(): ?float
    {
        return $this->baseTotalInvoiced;
    }
    /**
     * Base total invoiced.
     *
     * @param float|null $baseTotalInvoiced
     *
     * @return self
     */
    public function setBaseTotalInvoiced(?float $baseTotalInvoiced): self
    {
        $this->baseTotalInvoiced = $baseTotalInvoiced;
        return $this;
    }
    /**
     * Base total invoiced cost.
     *
     * @return float|null
     */
    public function getBaseTotalInvoicedCost(): ?float
    {
        return $this->baseTotalInvoicedCost;
    }
    /**
     * Base total invoiced cost.
     *
     * @param float|null $baseTotalInvoicedCost
     *
     * @return self
     */
    public function setBaseTotalInvoicedCost(?float $baseTotalInvoicedCost): self
    {
        $this->baseTotalInvoicedCost = $baseTotalInvoicedCost;
        return $this;
    }
    /**
     * Base total offline refunded.
     *
     * @return float|null
     */
    public function getBaseTotalOfflineRefunded(): ?float
    {
        return $this->baseTotalOfflineRefunded;
    }
    /**
     * Base total offline refunded.
     *
     * @param float|null $baseTotalOfflineRefunded
     *
     * @return self
     */
    public function setBaseTotalOfflineRefunded(?float $baseTotalOfflineRefunded): self
    {
        $this->baseTotalOfflineRefunded = $baseTotalOfflineRefunded;
        return $this;
    }
    /**
     * Base total online refunded.
     *
     * @return float|null
     */
    public function getBaseTotalOnlineRefunded(): ?float
    {
        return $this->baseTotalOnlineRefunded;
    }
    /**
     * Base total online refunded.
     *
     * @param float|null $baseTotalOnlineRefunded
     *
     * @return self
     */
    public function setBaseTotalOnlineRefunded(?float $baseTotalOnlineRefunded): self
    {
        $this->baseTotalOnlineRefunded = $baseTotalOnlineRefunded;
        return $this;
    }
    /**
     * Base total paid.
     *
     * @return float|null
     */
    public function getBaseTotalPaid(): ?float
    {
        return $this->baseTotalPaid;
    }
    /**
     * Base total paid.
     *
     * @param float|null $baseTotalPaid
     *
     * @return self
     */
    public function setBaseTotalPaid(?float $baseTotalPaid): self
    {
        $this->baseTotalPaid = $baseTotalPaid;
        return $this;
    }
    /**
     * Base total quantity ordered.
     *
     * @return float|null
     */
    public function getBaseTotalQtyOrdered(): ?float
    {
        return $this->baseTotalQtyOrdered;
    }
    /**
     * Base total quantity ordered.
     *
     * @param float|null $baseTotalQtyOrdered
     *
     * @return self
     */
    public function setBaseTotalQtyOrdered(?float $baseTotalQtyOrdered): self
    {
        $this->baseTotalQtyOrdered = $baseTotalQtyOrdered;
        return $this;
    }
    /**
     * Base total refunded.
     *
     * @return float|null
     */
    public function getBaseTotalRefunded(): ?float
    {
        return $this->baseTotalRefunded;
    }
    /**
     * Base total refunded.
     *
     * @param float|null $baseTotalRefunded
     *
     * @return self
     */
    public function setBaseTotalRefunded(?float $baseTotalRefunded): self
    {
        $this->baseTotalRefunded = $baseTotalRefunded;
        return $this;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getBillingAddress(): ?SalesDataOrderAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?SalesDataOrderAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Billing address ID.
     *
     * @return int|null
     */
    public function getBillingAddressId(): ?int
    {
        return $this->billingAddressId;
    }
    /**
     * Billing address ID.
     *
     * @param int|null $billingAddressId
     *
     * @return self
     */
    public function setBillingAddressId(?int $billingAddressId): self
    {
        $this->billingAddressId = $billingAddressId;
        return $this;
    }
    /**
     * Can-ship-partially flag value.
     *
     * @return int|null
     */
    public function getCanShipPartially(): ?int
    {
        return $this->canShipPartially;
    }
    /**
     * Can-ship-partially flag value.
     *
     * @param int|null $canShipPartially
     *
     * @return self
     */
    public function setCanShipPartially(?int $canShipPartially): self
    {
        $this->canShipPartially = $canShipPartially;
        return $this;
    }
    /**
     * Can-ship-partially-item flag value.
     *
     * @return int|null
     */
    public function getCanShipPartiallyItem(): ?int
    {
        return $this->canShipPartiallyItem;
    }
    /**
     * Can-ship-partially-item flag value.
     *
     * @param int|null $canShipPartiallyItem
     *
     * @return self
     */
    public function setCanShipPartiallyItem(?int $canShipPartiallyItem): self
    {
        $this->canShipPartiallyItem = $canShipPartiallyItem;
        return $this;
    }
    /**
     * Coupon code.
     *
     * @return string|null
     */
    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }
    /**
     * Coupon code.
     *
     * @param string|null $couponCode
     *
     * @return self
     */
    public function setCouponCode(?string $couponCode): self
    {
        $this->couponCode = $couponCode;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
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
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Customer date-of-birth (DOB).
     *
     * @return string|null
     */
    public function getCustomerDob(): ?string
    {
        return $this->customerDob;
    }
    /**
     * Customer date-of-birth (DOB).
     *
     * @param string|null $customerDob
     *
     * @return self
     */
    public function setCustomerDob(?string $customerDob): self
    {
        $this->customerDob = $customerDob;
        return $this;
    }
    /**
     * Customer email address.
     *
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }
    /**
     * Customer email address.
     *
     * @param string|null $customerEmail
     *
     * @return self
     */
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * Customer first name.
     *
     * @return string|null
     */
    public function getCustomerFirstname(): ?string
    {
        return $this->customerFirstname;
    }
    /**
     * Customer first name.
     *
     * @param string|null $customerFirstname
     *
     * @return self
     */
    public function setCustomerFirstname(?string $customerFirstname): self
    {
        $this->customerFirstname = $customerFirstname;
        return $this;
    }
    /**
     * Customer gender.
     *
     * @return int|null
     */
    public function getCustomerGender(): ?int
    {
        return $this->customerGender;
    }
    /**
     * Customer gender.
     *
     * @param int|null $customerGender
     *
     * @return self
     */
    public function setCustomerGender(?int $customerGender): self
    {
        $this->customerGender = $customerGender;
        return $this;
    }
    /**
     * Customer group ID.
     *
     * @return int|null
     */
    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer group ID.
     *
     * @param int|null $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(?int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Customer-is-guest flag value.
     *
     * @return int|null
     */
    public function getCustomerIsGuest(): ?int
    {
        return $this->customerIsGuest;
    }
    /**
     * Customer-is-guest flag value.
     *
     * @param int|null $customerIsGuest
     *
     * @return self
     */
    public function setCustomerIsGuest(?int $customerIsGuest): self
    {
        $this->customerIsGuest = $customerIsGuest;
        return $this;
    }
    /**
     * Customer last name.
     *
     * @return string|null
     */
    public function getCustomerLastname(): ?string
    {
        return $this->customerLastname;
    }
    /**
     * Customer last name.
     *
     * @param string|null $customerLastname
     *
     * @return self
     */
    public function setCustomerLastname(?string $customerLastname): self
    {
        $this->customerLastname = $customerLastname;
        return $this;
    }
    /**
     * Customer middle name.
     *
     * @return string|null
     */
    public function getCustomerMiddlename(): ?string
    {
        return $this->customerMiddlename;
    }
    /**
     * Customer middle name.
     *
     * @param string|null $customerMiddlename
     *
     * @return self
     */
    public function setCustomerMiddlename(?string $customerMiddlename): self
    {
        $this->customerMiddlename = $customerMiddlename;
        return $this;
    }
    /**
     * Customer note.
     *
     * @return string|null
     */
    public function getCustomerNote(): ?string
    {
        return $this->customerNote;
    }
    /**
     * Customer note.
     *
     * @param string|null $customerNote
     *
     * @return self
     */
    public function setCustomerNote(?string $customerNote): self
    {
        $this->customerNote = $customerNote;
        return $this;
    }
    /**
     * Customer-note-notify flag value.
     *
     * @return int|null
     */
    public function getCustomerNoteNotify(): ?int
    {
        return $this->customerNoteNotify;
    }
    /**
     * Customer-note-notify flag value.
     *
     * @param int|null $customerNoteNotify
     *
     * @return self
     */
    public function setCustomerNoteNotify(?int $customerNoteNotify): self
    {
        $this->customerNoteNotify = $customerNoteNotify;
        return $this;
    }
    /**
     * Customer prefix.
     *
     * @return string|null
     */
    public function getCustomerPrefix(): ?string
    {
        return $this->customerPrefix;
    }
    /**
     * Customer prefix.
     *
     * @param string|null $customerPrefix
     *
     * @return self
     */
    public function setCustomerPrefix(?string $customerPrefix): self
    {
        $this->customerPrefix = $customerPrefix;
        return $this;
    }
    /**
     * Customer suffix.
     *
     * @return string|null
     */
    public function getCustomerSuffix(): ?string
    {
        return $this->customerSuffix;
    }
    /**
     * Customer suffix.
     *
     * @param string|null $customerSuffix
     *
     * @return self
     */
    public function setCustomerSuffix(?string $customerSuffix): self
    {
        $this->customerSuffix = $customerSuffix;
        return $this;
    }
    /**
     * Customer value-added tax (VAT).
     *
     * @return string|null
     */
    public function getCustomerTaxvat(): ?string
    {
        return $this->customerTaxvat;
    }
    /**
     * Customer value-added tax (VAT).
     *
     * @param string|null $customerTaxvat
     *
     * @return self
     */
    public function setCustomerTaxvat(?string $customerTaxvat): self
    {
        $this->customerTaxvat = $customerTaxvat;
        return $this;
    }
    /**
     * Discount amount.
     *
     * @return float|null
     */
    public function getDiscountAmount(): ?float
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
    public function setDiscountAmount(?float $discountAmount): self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * Discount canceled.
     *
     * @return float|null
     */
    public function getDiscountCanceled(): ?float
    {
        return $this->discountCanceled;
    }
    /**
     * Discount canceled.
     *
     * @param float|null $discountCanceled
     *
     * @return self
     */
    public function setDiscountCanceled(?float $discountCanceled): self
    {
        $this->discountCanceled = $discountCanceled;
        return $this;
    }
    /**
     * Discount description.
     *
     * @return string|null
     */
    public function getDiscountDescription(): ?string
    {
        return $this->discountDescription;
    }
    /**
     * Discount description.
     *
     * @param string|null $discountDescription
     *
     * @return self
     */
    public function setDiscountDescription(?string $discountDescription): self
    {
        $this->discountDescription = $discountDescription;
        return $this;
    }
    /**
     * Discount invoiced.
     *
     * @return float|null
     */
    public function getDiscountInvoiced(): ?float
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
    public function setDiscountInvoiced(?float $discountInvoiced): self
    {
        $this->discountInvoiced = $discountInvoiced;
        return $this;
    }
    /**
     * Discount refunded amount.
     *
     * @return float|null
     */
    public function getDiscountRefunded(): ?float
    {
        return $this->discountRefunded;
    }
    /**
     * Discount refunded amount.
     *
     * @param float|null $discountRefunded
     *
     * @return self
     */
    public function setDiscountRefunded(?float $discountRefunded): self
    {
        $this->discountRefunded = $discountRefunded;
        return $this;
    }
    /**
     * Discount tax compensation amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationAmount(): ?float
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
    public function setDiscountTaxCompensationAmount(?float $discountTaxCompensationAmount): self
    {
        $this->discountTaxCompensationAmount = $discountTaxCompensationAmount;
        return $this;
    }
    /**
     * Discount tax compensation invoiced amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationInvoiced(): ?float
    {
        return $this->discountTaxCompensationInvoiced;
    }
    /**
     * Discount tax compensation invoiced amount.
     *
     * @param float|null $discountTaxCompensationInvoiced
     *
     * @return self
     */
    public function setDiscountTaxCompensationInvoiced(?float $discountTaxCompensationInvoiced): self
    {
        $this->discountTaxCompensationInvoiced = $discountTaxCompensationInvoiced;
        return $this;
    }
    /**
     * Discount tax compensation refunded amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationRefunded(): ?float
    {
        return $this->discountTaxCompensationRefunded;
    }
    /**
     * Discount tax compensation refunded amount.
     *
     * @param float|null $discountTaxCompensationRefunded
     *
     * @return self
     */
    public function setDiscountTaxCompensationRefunded(?float $discountTaxCompensationRefunded): self
    {
        $this->discountTaxCompensationRefunded = $discountTaxCompensationRefunded;
        return $this;
    }
    /**
     * Edit increment value.
     *
     * @return int|null
     */
    public function getEditIncrement(): ?int
    {
        return $this->editIncrement;
    }
    /**
     * Edit increment value.
     *
     * @param int|null $editIncrement
     *
     * @return self
     */
    public function setEditIncrement(?int $editIncrement): self
    {
        $this->editIncrement = $editIncrement;
        return $this;
    }
    /**
     * Email-sent flag value.
     *
     * @return int|null
     */
    public function getEmailSent(): ?int
    {
        return $this->emailSent;
    }
    /**
     * Email-sent flag value.
     *
     * @param int|null $emailSent
     *
     * @return self
     */
    public function setEmailSent(?int $emailSent): self
    {
        $this->emailSent = $emailSent;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Order ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * External customer ID.
     *
     * @return string|null
     */
    public function getExtCustomerId(): ?string
    {
        return $this->extCustomerId;
    }
    /**
     * External customer ID.
     *
     * @param string|null $extCustomerId
     *
     * @return self
     */
    public function setExtCustomerId(?string $extCustomerId): self
    {
        $this->extCustomerId = $extCustomerId;
        return $this;
    }
    /**
     * External order ID.
     *
     * @return string|null
     */
    public function getExtOrderId(): ?string
    {
        return $this->extOrderId;
    }
    /**
     * External order ID.
     *
     * @param string|null $extOrderId
     *
     * @return self
     */
    public function setExtOrderId(?string $extOrderId): self
    {
        $this->extOrderId = $extOrderId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @return SalesDataOrderExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataOrderExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @param SalesDataOrderExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataOrderExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @return int|null
     */
    public function getForcedShipmentWithInvoice(): ?int
    {
        return $this->forcedShipmentWithInvoice;
    }
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @param int|null $forcedShipmentWithInvoice
     *
     * @return self
     */
    public function setForcedShipmentWithInvoice(?int $forcedShipmentWithInvoice): self
    {
        $this->forcedShipmentWithInvoice = $forcedShipmentWithInvoice;
        return $this;
    }
    /**
     * Global currency code.
     *
     * @return string|null
     */
    public function getGlobalCurrencyCode(): ?string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Global currency code.
     *
     * @param string|null $globalCurrencyCode
     *
     * @return self
     */
    public function setGlobalCurrencyCode(?string $globalCurrencyCode): self
    {
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }
    /**
     * Grand total.
     *
     * @return float|null
     */
    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }
    /**
     * Grand total.
     *
     * @param float|null $grandTotal
     *
     * @return self
     */
    public function setGrandTotal(?float $grandTotal): self
    {
        $this->grandTotal = $grandTotal;
        return $this;
    }
    /**
     * Hold before state.
     *
     * @return string|null
     */
    public function getHoldBeforeState(): ?string
    {
        return $this->holdBeforeState;
    }
    /**
     * Hold before state.
     *
     * @param string|null $holdBeforeState
     *
     * @return self
     */
    public function setHoldBeforeState(?string $holdBeforeState): self
    {
        $this->holdBeforeState = $holdBeforeState;
        return $this;
    }
    /**
     * Hold before status.
     *
     * @return string|null
     */
    public function getHoldBeforeStatus(): ?string
    {
        return $this->holdBeforeStatus;
    }
    /**
     * Hold before status.
     *
     * @param string|null $holdBeforeStatus
     *
     * @return self
     */
    public function setHoldBeforeStatus(?string $holdBeforeStatus): self
    {
        $this->holdBeforeStatus = $holdBeforeStatus;
        return $this;
    }
    /**
     * Increment ID.
     *
     * @return string|null
     */
    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }
    /**
     * Increment ID.
     *
     * @param string|null $incrementId
     *
     * @return self
     */
    public function setIncrementId(?string $incrementId): self
    {
        $this->incrementId = $incrementId;
        return $this;
    }
    /**
     * Is-virtual flag value.
     *
     * @return int|null
     */
    public function getIsVirtual(): ?int
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
    public function setIsVirtual(?int $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }
    /**
     * Array of items.
     *
     * @return SalesDataOrderItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Array of items.
     *
     * @param SalesDataOrderItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Order currency code.
     *
     * @return string|null
     */
    public function getOrderCurrencyCode(): ?string
    {
        return $this->orderCurrencyCode;
    }
    /**
     * Order currency code.
     *
     * @param string|null $orderCurrencyCode
     *
     * @return self
     */
    public function setOrderCurrencyCode(?string $orderCurrencyCode): self
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
        return $this;
    }
    /**
     * Original increment ID.
     *
     * @return string|null
     */
    public function getOriginalIncrementId(): ?string
    {
        return $this->originalIncrementId;
    }
    /**
     * Original increment ID.
     *
     * @param string|null $originalIncrementId
     *
     * @return self
     */
    public function setOriginalIncrementId(?string $originalIncrementId): self
    {
        $this->originalIncrementId = $originalIncrementId;
        return $this;
    }
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderPaymentInterface|null
     */
    public function getPayment(): ?SalesDataOrderPaymentInterface
    {
        return $this->payment;
    }
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderPaymentInterface|null $payment
     *
     * @return self
     */
    public function setPayment(?SalesDataOrderPaymentInterface $payment): self
    {
        $this->payment = $payment;
        return $this;
    }
    /**
     * Payment authorization expiration date.
     *
     * @return int|null
     */
    public function getPaymentAuthExpiration(): ?int
    {
        return $this->paymentAuthExpiration;
    }
    /**
     * Payment authorization expiration date.
     *
     * @param int|null $paymentAuthExpiration
     *
     * @return self
     */
    public function setPaymentAuthExpiration(?int $paymentAuthExpiration): self
    {
        $this->paymentAuthExpiration = $paymentAuthExpiration;
        return $this;
    }
    /**
     * Payment authorization amount.
     *
     * @return float|null
     */
    public function getPaymentAuthorizationAmount(): ?float
    {
        return $this->paymentAuthorizationAmount;
    }
    /**
     * Payment authorization amount.
     *
     * @param float|null $paymentAuthorizationAmount
     *
     * @return self
     */
    public function setPaymentAuthorizationAmount(?float $paymentAuthorizationAmount): self
    {
        $this->paymentAuthorizationAmount = $paymentAuthorizationAmount;
        return $this;
    }
    /**
     * Protect code.
     *
     * @return string|null
     */
    public function getProtectCode(): ?string
    {
        return $this->protectCode;
    }
    /**
     * Protect code.
     *
     * @param string|null $protectCode
     *
     * @return self
     */
    public function setProtectCode(?string $protectCode): self
    {
        $this->protectCode = $protectCode;
        return $this;
    }
    /**
     * Quote address ID.
     *
     * @return int|null
     */
    public function getQuoteAddressId(): ?int
    {
        return $this->quoteAddressId;
    }
    /**
     * Quote address ID.
     *
     * @param int|null $quoteAddressId
     *
     * @return self
     */
    public function setQuoteAddressId(?int $quoteAddressId): self
    {
        $this->quoteAddressId = $quoteAddressId;
        return $this;
    }
    /**
     * Quote ID.
     *
     * @return int|null
     */
    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }
    /**
     * Quote ID.
     *
     * @param int|null $quoteId
     *
     * @return self
     */
    public function setQuoteId(?int $quoteId): self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Relation child ID.
     *
     * @return string|null
     */
    public function getRelationChildId(): ?string
    {
        return $this->relationChildId;
    }
    /**
     * Relation child ID.
     *
     * @param string|null $relationChildId
     *
     * @return self
     */
    public function setRelationChildId(?string $relationChildId): self
    {
        $this->relationChildId = $relationChildId;
        return $this;
    }
    /**
     * Relation child real ID.
     *
     * @return string|null
     */
    public function getRelationChildRealId(): ?string
    {
        return $this->relationChildRealId;
    }
    /**
     * Relation child real ID.
     *
     * @param string|null $relationChildRealId
     *
     * @return self
     */
    public function setRelationChildRealId(?string $relationChildRealId): self
    {
        $this->relationChildRealId = $relationChildRealId;
        return $this;
    }
    /**
     * Relation parent ID.
     *
     * @return string|null
     */
    public function getRelationParentId(): ?string
    {
        return $this->relationParentId;
    }
    /**
     * Relation parent ID.
     *
     * @param string|null $relationParentId
     *
     * @return self
     */
    public function setRelationParentId(?string $relationParentId): self
    {
        $this->relationParentId = $relationParentId;
        return $this;
    }
    /**
     * Relation parent real ID.
     *
     * @return string|null
     */
    public function getRelationParentRealId(): ?string
    {
        return $this->relationParentRealId;
    }
    /**
     * Relation parent real ID.
     *
     * @param string|null $relationParentRealId
     *
     * @return self
     */
    public function setRelationParentRealId(?string $relationParentRealId): self
    {
        $this->relationParentRealId = $relationParentRealId;
        return $this;
    }
    /**
     * Remote IP address.
     *
     * @return string|null
     */
    public function getRemoteIp(): ?string
    {
        return $this->remoteIp;
    }
    /**
     * Remote IP address.
     *
     * @param string|null $remoteIp
     *
     * @return self
     */
    public function setRemoteIp(?string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float|null
     */
    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount.
     *
     * @param float|null $shippingAmount
     *
     * @return self
     */
    public function setShippingAmount(?float $shippingAmount): self
    {
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping canceled amount.
     *
     * @return float|null
     */
    public function getShippingCanceled(): ?float
    {
        return $this->shippingCanceled;
    }
    /**
     * Shipping canceled amount.
     *
     * @param float|null $shippingCanceled
     *
     * @return self
     */
    public function setShippingCanceled(?float $shippingCanceled): self
    {
        $this->shippingCanceled = $shippingCanceled;
        return $this;
    }
    /**
     * Shipping description.
     *
     * @return string|null
     */
    public function getShippingDescription(): ?string
    {
        return $this->shippingDescription;
    }
    /**
     * Shipping description.
     *
     * @param string|null $shippingDescription
     *
     * @return self
     */
    public function setShippingDescription(?string $shippingDescription): self
    {
        $this->shippingDescription = $shippingDescription;
        return $this;
    }
    /**
     * Shipping discount amount.
     *
     * @return float|null
     */
    public function getShippingDiscountAmount(): ?float
    {
        return $this->shippingDiscountAmount;
    }
    /**
     * Shipping discount amount.
     *
     * @param float|null $shippingDiscountAmount
     *
     * @return self
     */
    public function setShippingDiscountAmount(?float $shippingDiscountAmount): self
    {
        $this->shippingDiscountAmount = $shippingDiscountAmount;
        return $this;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getShippingDiscountTaxCompensationAmount(): ?float
    {
        return $this->shippingDiscountTaxCompensationAmount;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @param float|null $shippingDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setShippingDiscountTaxCompensationAmount(?float $shippingDiscountTaxCompensationAmount): self
    {
        $this->shippingDiscountTaxCompensationAmount = $shippingDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Shipping including tax amount.
     *
     * @return float|null
     */
    public function getShippingInclTax(): ?float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax amount.
     *
     * @param float|null $shippingInclTax
     *
     * @return self
     */
    public function setShippingInclTax(?float $shippingInclTax): self
    {
        $this->shippingInclTax = $shippingInclTax;
        return $this;
    }
    /**
     * Shipping invoiced amount.
     *
     * @return float|null
     */
    public function getShippingInvoiced(): ?float
    {
        return $this->shippingInvoiced;
    }
    /**
     * Shipping invoiced amount.
     *
     * @param float|null $shippingInvoiced
     *
     * @return self
     */
    public function setShippingInvoiced(?float $shippingInvoiced): self
    {
        $this->shippingInvoiced = $shippingInvoiced;
        return $this;
    }
    /**
     * Shipping refunded amount.
     *
     * @return float|null
     */
    public function getShippingRefunded(): ?float
    {
        return $this->shippingRefunded;
    }
    /**
     * Shipping refunded amount.
     *
     * @param float|null $shippingRefunded
     *
     * @return self
     */
    public function setShippingRefunded(?float $shippingRefunded): self
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
    /**
     * Shipping tax amount.
     *
     * @return float|null
     */
    public function getShippingTaxAmount(): ?float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Shipping tax amount.
     *
     * @param float|null $shippingTaxAmount
     *
     * @return self
     */
    public function setShippingTaxAmount(?float $shippingTaxAmount): self
    {
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }
    /**
     * Shipping tax refunded amount.
     *
     * @return float|null
     */
    public function getShippingTaxRefunded(): ?float
    {
        return $this->shippingTaxRefunded;
    }
    /**
     * Shipping tax refunded amount.
     *
     * @param float|null $shippingTaxRefunded
     *
     * @return self
     */
    public function setShippingTaxRefunded(?float $shippingTaxRefunded): self
    {
        $this->shippingTaxRefunded = $shippingTaxRefunded;
        return $this;
    }
    /**
     * State.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * State.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Array of status histories.
     *
     * @return SalesDataOrderStatusHistoryInterface[]|null
     */
    public function getStatusHistories(): ?array
    {
        return $this->statusHistories;
    }
    /**
     * Array of status histories.
     *
     * @param SalesDataOrderStatusHistoryInterface[]|null $statusHistories
     *
     * @return self
     */
    public function setStatusHistories(?array $statusHistories): self
    {
        $this->statusHistories = $statusHistories;
        return $this;
    }
    /**
     * Store currency code.
     *
     * @return string|null
     */
    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Store currency code.
     *
     * @param string|null $storeCurrencyCode
     *
     * @return self
     */
    public function setStoreCurrencyCode(?string $storeCurrencyCode): self
    {
        $this->storeCurrencyCode = $storeCurrencyCode;
        return $this;
    }
    /**
     * Store ID.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
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
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Store name.
     *
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }
    /**
     * Store name.
     *
     * @param string|null $storeName
     *
     * @return self
     */
    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Store-to-base rate.
     *
     * @return float|null
     */
    public function getStoreToBaseRate(): ?float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Store-to-base rate.
     *
     * @param float|null $storeToBaseRate
     *
     * @return self
     */
    public function setStoreToBaseRate(?float $storeToBaseRate): self
    {
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }
    /**
     * Store-to-order rate.
     *
     * @return float|null
     */
    public function getStoreToOrderRate(): ?float
    {
        return $this->storeToOrderRate;
    }
    /**
     * Store-to-order rate.
     *
     * @param float|null $storeToOrderRate
     *
     * @return self
     */
    public function setStoreToOrderRate(?float $storeToOrderRate): self
    {
        $this->storeToOrderRate = $storeToOrderRate;
        return $this;
    }
    /**
     * Subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * Subtotal.
     *
     * @param float|null $subtotal
     *
     * @return self
     */
    public function setSubtotal(?float $subtotal): self
    {
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Subtotal canceled amount.
     *
     * @return float|null
     */
    public function getSubtotalCanceled(): ?float
    {
        return $this->subtotalCanceled;
    }
    /**
     * Subtotal canceled amount.
     *
     * @param float|null $subtotalCanceled
     *
     * @return self
     */
    public function setSubtotalCanceled(?float $subtotalCanceled): self
    {
        $this->subtotalCanceled = $subtotalCanceled;
        return $this;
    }
    /**
     * Subtotal including tax amount.
     *
     * @return float|null
     */
    public function getSubtotalInclTax(): ?float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax amount.
     *
     * @param float|null $subtotalInclTax
     *
     * @return self
     */
    public function setSubtotalInclTax(?float $subtotalInclTax): self
    {
        $this->subtotalInclTax = $subtotalInclTax;
        return $this;
    }
    /**
     * Subtotal invoiced amount.
     *
     * @return float|null
     */
    public function getSubtotalInvoiced(): ?float
    {
        return $this->subtotalInvoiced;
    }
    /**
     * Subtotal invoiced amount.
     *
     * @param float|null $subtotalInvoiced
     *
     * @return self
     */
    public function setSubtotalInvoiced(?float $subtotalInvoiced): self
    {
        $this->subtotalInvoiced = $subtotalInvoiced;
        return $this;
    }
    /**
     * Subtotal refunded amount.
     *
     * @return float|null
     */
    public function getSubtotalRefunded(): ?float
    {
        return $this->subtotalRefunded;
    }
    /**
     * Subtotal refunded amount.
     *
     * @param float|null $subtotalRefunded
     *
     * @return self
     */
    public function setSubtotalRefunded(?float $subtotalRefunded): self
    {
        $this->subtotalRefunded = $subtotalRefunded;
        return $this;
    }
    /**
     * Tax amount.
     *
     * @return float|null
     */
    public function getTaxAmount(): ?float
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
    public function setTaxAmount(?float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Tax canceled amount.
     *
     * @return float|null
     */
    public function getTaxCanceled(): ?float
    {
        return $this->taxCanceled;
    }
    /**
     * Tax canceled amount.
     *
     * @param float|null $taxCanceled
     *
     * @return self
     */
    public function setTaxCanceled(?float $taxCanceled): self
    {
        $this->taxCanceled = $taxCanceled;
        return $this;
    }
    /**
     * Tax invoiced amount.
     *
     * @return float|null
     */
    public function getTaxInvoiced(): ?float
    {
        return $this->taxInvoiced;
    }
    /**
     * Tax invoiced amount.
     *
     * @param float|null $taxInvoiced
     *
     * @return self
     */
    public function setTaxInvoiced(?float $taxInvoiced): self
    {
        $this->taxInvoiced = $taxInvoiced;
        return $this;
    }
    /**
     * Tax refunded amount.
     *
     * @return float|null
     */
    public function getTaxRefunded(): ?float
    {
        return $this->taxRefunded;
    }
    /**
     * Tax refunded amount.
     *
     * @param float|null $taxRefunded
     *
     * @return self
     */
    public function setTaxRefunded(?float $taxRefunded): self
    {
        $this->taxRefunded = $taxRefunded;
        return $this;
    }
    /**
     * Total canceled.
     *
     * @return float|null
     */
    public function getTotalCanceled(): ?float
    {
        return $this->totalCanceled;
    }
    /**
     * Total canceled.
     *
     * @param float|null $totalCanceled
     *
     * @return self
     */
    public function setTotalCanceled(?float $totalCanceled): self
    {
        $this->totalCanceled = $totalCanceled;
        return $this;
    }
    /**
     * Total due.
     *
     * @return float|null
     */
    public function getTotalDue(): ?float
    {
        return $this->totalDue;
    }
    /**
     * Total due.
     *
     * @param float|null $totalDue
     *
     * @return self
     */
    public function setTotalDue(?float $totalDue): self
    {
        $this->totalDue = $totalDue;
        return $this;
    }
    /**
     * Total invoiced amount.
     *
     * @return float|null
     */
    public function getTotalInvoiced(): ?float
    {
        return $this->totalInvoiced;
    }
    /**
     * Total invoiced amount.
     *
     * @param float|null $totalInvoiced
     *
     * @return self
     */
    public function setTotalInvoiced(?float $totalInvoiced): self
    {
        $this->totalInvoiced = $totalInvoiced;
        return $this;
    }
    /**
     * Total item count.
     *
     * @return int|null
     */
    public function getTotalItemCount(): ?int
    {
        return $this->totalItemCount;
    }
    /**
     * Total item count.
     *
     * @param int|null $totalItemCount
     *
     * @return self
     */
    public function setTotalItemCount(?int $totalItemCount): self
    {
        $this->totalItemCount = $totalItemCount;
        return $this;
    }
    /**
     * Total offline refunded amount.
     *
     * @return float|null
     */
    public function getTotalOfflineRefunded(): ?float
    {
        return $this->totalOfflineRefunded;
    }
    /**
     * Total offline refunded amount.
     *
     * @param float|null $totalOfflineRefunded
     *
     * @return self
     */
    public function setTotalOfflineRefunded(?float $totalOfflineRefunded): self
    {
        $this->totalOfflineRefunded = $totalOfflineRefunded;
        return $this;
    }
    /**
     * Total online refunded amount.
     *
     * @return float|null
     */
    public function getTotalOnlineRefunded(): ?float
    {
        return $this->totalOnlineRefunded;
    }
    /**
     * Total online refunded amount.
     *
     * @param float|null $totalOnlineRefunded
     *
     * @return self
     */
    public function setTotalOnlineRefunded(?float $totalOnlineRefunded): self
    {
        $this->totalOnlineRefunded = $totalOnlineRefunded;
        return $this;
    }
    /**
     * Total paid.
     *
     * @return float|null
     */
    public function getTotalPaid(): ?float
    {
        return $this->totalPaid;
    }
    /**
     * Total paid.
     *
     * @param float|null $totalPaid
     *
     * @return self
     */
    public function setTotalPaid(?float $totalPaid): self
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }
    /**
     * Total quantity ordered.
     *
     * @return float|null
     */
    public function getTotalQtyOrdered(): ?float
    {
        return $this->totalQtyOrdered;
    }
    /**
     * Total quantity ordered.
     *
     * @param float|null $totalQtyOrdered
     *
     * @return self
     */
    public function setTotalQtyOrdered(?float $totalQtyOrdered): self
    {
        $this->totalQtyOrdered = $totalQtyOrdered;
        return $this;
    }
    /**
     * Total amount refunded.
     *
     * @return float|null
     */
    public function getTotalRefunded(): ?float
    {
        return $this->totalRefunded;
    }
    /**
     * Total amount refunded.
     *
     * @param float|null $totalRefunded
     *
     * @return self
     */
    public function setTotalRefunded(?float $totalRefunded): self
    {
        $this->totalRefunded = $totalRefunded;
        return $this;
    }
    /**
     * Updated-at timestamp.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
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
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
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
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * X-Forwarded-For field value.
     *
     * @return string|null
     */
    public function getXForwardedFor(): ?string
    {
        return $this->xForwardedFor;
    }
    /**
     * X-Forwarded-For field value.
     *
     * @param string|null $xForwardedFor
     *
     * @return self
     */
    public function setXForwardedFor(?string $xForwardedFor): self
    {
        $this->xForwardedFor = $xForwardedFor;
        return $this;
    }
}
