<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataOrderInterface
{
    /**
     * Negative adjustment value.
     *
     * @var float
     */
    protected $adjustmentNegative;
    /**
     * Positive adjustment value.
     *
     * @var float
     */
    protected $adjustmentPositive;
    /**
     * Applied rule IDs.
     *
     * @var string
     */
    protected $appliedRuleIds;
    /**
     * Base negative adjustment value.
     *
     * @var float
     */
    protected $baseAdjustmentNegative;
    /**
     * Base positive adjustment value.
     *
     * @var float
     */
    protected $baseAdjustmentPositive;
    /**
     * Base currency code.
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * Base discount amount.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Base discount canceled.
     *
     * @var float
     */
    protected $baseDiscountCanceled;
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
     * Base grand total.
     *
     * @var float
     */
    protected $baseGrandTotal;
    /**
     * Base shipping amount.
     *
     * @var float
     */
    protected $baseShippingAmount;
    /**
     * Base shipping canceled.
     *
     * @var float
     */
    protected $baseShippingCanceled;
    /**
     * Base shipping discount amount.
     *
     * @var float
     */
    protected $baseShippingDiscountAmount;
    /**
     * Base shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $baseShippingDiscountTaxCompensationAmnt;
    /**
     * Base shipping including tax.
     *
     * @var float
     */
    protected $baseShippingInclTax;
    /**
     * Base shipping invoiced.
     *
     * @var float
     */
    protected $baseShippingInvoiced;
    /**
     * Base shipping refunded.
     *
     * @var float
     */
    protected $baseShippingRefunded;
    /**
     * Base shipping tax amount.
     *
     * @var float
     */
    protected $baseShippingTaxAmount;
    /**
     * Base shipping tax refunded.
     *
     * @var float
     */
    protected $baseShippingTaxRefunded;
    /**
     * Base subtotal.
     *
     * @var float
     */
    protected $baseSubtotal;
    /**
     * Base subtotal canceled.
     *
     * @var float
     */
    protected $baseSubtotalCanceled;
    /**
     * Base subtotal including tax.
     *
     * @var float
     */
    protected $baseSubtotalInclTax;
    /**
     * Base subtotal invoiced.
     *
     * @var float
     */
    protected $baseSubtotalInvoiced;
    /**
     * Base subtotal refunded.
     *
     * @var float
     */
    protected $baseSubtotalRefunded;
    /**
     * Base tax amount.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Base tax canceled.
     *
     * @var float
     */
    protected $baseTaxCanceled;
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
     * Base-to-global rate.
     *
     * @var float
     */
    protected $baseToGlobalRate;
    /**
     * Base-to-order rate.
     *
     * @var float
     */
    protected $baseToOrderRate;
    /**
     * Base total canceled.
     *
     * @var float
     */
    protected $baseTotalCanceled;
    /**
     * Base total due.
     *
     * @var float
     */
    protected $baseTotalDue;
    /**
     * Base total invoiced.
     *
     * @var float
     */
    protected $baseTotalInvoiced;
    /**
     * Base total invoiced cost.
     *
     * @var float
     */
    protected $baseTotalInvoicedCost;
    /**
     * Base total offline refunded.
     *
     * @var float
     */
    protected $baseTotalOfflineRefunded;
    /**
     * Base total online refunded.
     *
     * @var float
     */
    protected $baseTotalOnlineRefunded;
    /**
     * Base total paid.
     *
     * @var float
     */
    protected $baseTotalPaid;
    /**
     * Base total quantity ordered.
     *
     * @var float
     */
    protected $baseTotalQtyOrdered;
    /**
     * Base total refunded.
     *
     * @var float
     */
    protected $baseTotalRefunded;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface
     */
    protected $billingAddress;
    /**
     * Billing address ID.
     *
     * @var int
     */
    protected $billingAddressId;
    /**
     * Can-ship-partially flag value.
     *
     * @var int
     */
    protected $canShipPartially;
    /**
     * Can-ship-partially-item flag value.
     *
     * @var int
     */
    protected $canShipPartiallyItem;
    /**
     * Coupon code.
     *
     * @var string
     */
    protected $couponCode;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Customer date-of-birth (DOB).
     *
     * @var string
     */
    protected $customerDob;
    /**
     * Customer email address.
     *
     * @var string
     */
    protected $customerEmail;
    /**
     * Customer first name.
     *
     * @var string
     */
    protected $customerFirstname;
    /**
     * Customer gender.
     *
     * @var int
     */
    protected $customerGender;
    /**
     * Customer group ID.
     *
     * @var int
     */
    protected $customerGroupId;
    /**
     * Customer ID.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Customer-is-guest flag value.
     *
     * @var int
     */
    protected $customerIsGuest;
    /**
     * Customer last name.
     *
     * @var string
     */
    protected $customerLastname;
    /**
     * Customer middle name.
     *
     * @var string
     */
    protected $customerMiddlename;
    /**
     * Customer note.
     *
     * @var string
     */
    protected $customerNote;
    /**
     * Customer-note-notify flag value.
     *
     * @var int
     */
    protected $customerNoteNotify;
    /**
     * Customer prefix.
     *
     * @var string
     */
    protected $customerPrefix;
    /**
     * Customer suffix.
     *
     * @var string
     */
    protected $customerSuffix;
    /**
     * Customer value-added tax (VAT).
     *
     * @var string
     */
    protected $customerTaxvat;
    /**
     * Discount amount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Discount canceled.
     *
     * @var float
     */
    protected $discountCanceled;
    /**
     * Discount description.
     *
     * @var string
     */
    protected $discountDescription;
    /**
     * Discount invoiced.
     *
     * @var float
     */
    protected $discountInvoiced;
    /**
     * Discount refunded amount.
     *
     * @var float
     */
    protected $discountRefunded;
    /**
     * Discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Discount tax compensation invoiced amount.
     *
     * @var float
     */
    protected $discountTaxCompensationInvoiced;
    /**
     * Discount tax compensation refunded amount.
     *
     * @var float
     */
    protected $discountTaxCompensationRefunded;
    /**
     * Edit increment value.
     *
     * @var int
     */
    protected $editIncrement;
    /**
     * Email-sent flag value.
     *
     * @var int
     */
    protected $emailSent;
    /**
     * Order ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * External customer ID.
     *
     * @var string
     */
    protected $extCustomerId;
    /**
     * External order ID.
     *
     * @var string
     */
    protected $extOrderId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @var SalesDataOrderExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @var int
     */
    protected $forcedShipmentWithInvoice;
    /**
     * Global currency code.
     *
     * @var string
     */
    protected $globalCurrencyCode;
    /**
     * Grand total.
     *
     * @var float
     */
    protected $grandTotal;
    /**
     * Hold before state.
     *
     * @var string
     */
    protected $holdBeforeState;
    /**
     * Hold before status.
     *
     * @var string
     */
    protected $holdBeforeStatus;
    /**
     * Increment ID.
     *
     * @var string
     */
    protected $incrementId;
    /**
     * Is-virtual flag value.
     *
     * @var int
     */
    protected $isVirtual;
    /**
     * Array of items.
     *
     * @var SalesDataOrderItemInterface[]
     */
    protected $items;
    /**
     * Order currency code.
     *
     * @var string
     */
    protected $orderCurrencyCode;
    /**
     * Original increment ID.
     *
     * @var string
     */
    protected $originalIncrementId;
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderPaymentInterface
     */
    protected $payment;
    /**
     * Payment authorization expiration date.
     *
     * @var int
     */
    protected $paymentAuthExpiration;
    /**
     * Payment authorization amount.
     *
     * @var float
     */
    protected $paymentAuthorizationAmount;
    /**
     * Protect code.
     *
     * @var string
     */
    protected $protectCode;
    /**
     * Quote address ID.
     *
     * @var int
     */
    protected $quoteAddressId;
    /**
     * Quote ID.
     *
     * @var int
     */
    protected $quoteId;
    /**
     * Relation child ID.
     *
     * @var string
     */
    protected $relationChildId;
    /**
     * Relation child real ID.
     *
     * @var string
     */
    protected $relationChildRealId;
    /**
     * Relation parent ID.
     *
     * @var string
     */
    protected $relationParentId;
    /**
     * Relation parent real ID.
     *
     * @var string
     */
    protected $relationParentRealId;
    /**
     * Remote IP address.
     *
     * @var string
     */
    protected $remoteIp;
    /**
     * Shipping amount.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Shipping canceled amount.
     *
     * @var float
     */
    protected $shippingCanceled;
    /**
     * Shipping description.
     *
     * @var string
     */
    protected $shippingDescription;
    /**
     * Shipping discount amount.
     *
     * @var float
     */
    protected $shippingDiscountAmount;
    /**
     * Shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Shipping including tax amount.
     *
     * @var float
     */
    protected $shippingInclTax;
    /**
     * Shipping invoiced amount.
     *
     * @var float
     */
    protected $shippingInvoiced;
    /**
     * Shipping refunded amount.
     *
     * @var float
     */
    protected $shippingRefunded;
    /**
     * Shipping tax amount.
     *
     * @var float
     */
    protected $shippingTaxAmount;
    /**
     * Shipping tax refunded amount.
     *
     * @var float
     */
    protected $shippingTaxRefunded;
    /**
     * State.
     *
     * @var string
     */
    protected $state;
    /**
     * Status.
     *
     * @var string
     */
    protected $status;
    /**
     * Array of status histories.
     *
     * @var SalesDataOrderStatusHistoryInterface[]
     */
    protected $statusHistories;
    /**
     * Store currency code.
     *
     * @var string
     */
    protected $storeCurrencyCode;
    /**
     * Store ID.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Store name.
     *
     * @var string
     */
    protected $storeName;
    /**
     * Store-to-base rate.
     *
     * @var float
     */
    protected $storeToBaseRate;
    /**
     * Store-to-order rate.
     *
     * @var float
     */
    protected $storeToOrderRate;
    /**
     * Subtotal.
     *
     * @var float
     */
    protected $subtotal;
    /**
     * Subtotal canceled amount.
     *
     * @var float
     */
    protected $subtotalCanceled;
    /**
     * Subtotal including tax amount.
     *
     * @var float
     */
    protected $subtotalInclTax;
    /**
     * Subtotal invoiced amount.
     *
     * @var float
     */
    protected $subtotalInvoiced;
    /**
     * Subtotal refunded amount.
     *
     * @var float
     */
    protected $subtotalRefunded;
    /**
     * Tax amount.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Tax canceled amount.
     *
     * @var float
     */
    protected $taxCanceled;
    /**
     * Tax invoiced amount.
     *
     * @var float
     */
    protected $taxInvoiced;
    /**
     * Tax refunded amount.
     *
     * @var float
     */
    protected $taxRefunded;
    /**
     * Total canceled.
     *
     * @var float
     */
    protected $totalCanceled;
    /**
     * Total due.
     *
     * @var float
     */
    protected $totalDue;
    /**
     * Total invoiced amount.
     *
     * @var float
     */
    protected $totalInvoiced;
    /**
     * Total item count.
     *
     * @var int
     */
    protected $totalItemCount;
    /**
     * Total offline refunded amount.
     *
     * @var float
     */
    protected $totalOfflineRefunded;
    /**
     * Total online refunded amount.
     *
     * @var float
     */
    protected $totalOnlineRefunded;
    /**
     * Total paid.
     *
     * @var float
     */
    protected $totalPaid;
    /**
     * Total quantity ordered.
     *
     * @var float
     */
    protected $totalQtyOrdered;
    /**
     * Total amount refunded.
     *
     * @var float
     */
    protected $totalRefunded;
    /**
     * Updated-at timestamp.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Weight.
     *
     * @var float
     */
    protected $weight;
    /**
     * X-Forwarded-For field value.
     *
     * @var string
     */
    protected $xForwardedFor;
    /**
     * Negative adjustment value.
     *
     * @return float
     */
    public function getAdjustmentNegative(): float
    {
        return $this->adjustmentNegative;
    }
    /**
     * Negative adjustment value.
     *
     * @param float $adjustmentNegative
     *
     * @return self
     */
    public function setAdjustmentNegative(float $adjustmentNegative): self
    {
        $this->adjustmentNegative = $adjustmentNegative;
        return $this;
    }
    /**
     * Positive adjustment value.
     *
     * @return float
     */
    public function getAdjustmentPositive(): float
    {
        return $this->adjustmentPositive;
    }
    /**
     * Positive adjustment value.
     *
     * @param float $adjustmentPositive
     *
     * @return self
     */
    public function setAdjustmentPositive(float $adjustmentPositive): self
    {
        $this->adjustmentPositive = $adjustmentPositive;
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
     * Base negative adjustment value.
     *
     * @return float
     */
    public function getBaseAdjustmentNegative(): float
    {
        return $this->baseAdjustmentNegative;
    }
    /**
     * Base negative adjustment value.
     *
     * @param float $baseAdjustmentNegative
     *
     * @return self
     */
    public function setBaseAdjustmentNegative(float $baseAdjustmentNegative): self
    {
        $this->baseAdjustmentNegative = $baseAdjustmentNegative;
        return $this;
    }
    /**
     * Base positive adjustment value.
     *
     * @return float
     */
    public function getBaseAdjustmentPositive(): float
    {
        return $this->baseAdjustmentPositive;
    }
    /**
     * Base positive adjustment value.
     *
     * @param float $baseAdjustmentPositive
     *
     * @return self
     */
    public function setBaseAdjustmentPositive(float $baseAdjustmentPositive): self
    {
        $this->baseAdjustmentPositive = $baseAdjustmentPositive;
        return $this;
    }
    /**
     * Base currency code.
     *
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Base currency code.
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
     * Base discount canceled.
     *
     * @return float
     */
    public function getBaseDiscountCanceled(): float
    {
        return $this->baseDiscountCanceled;
    }
    /**
     * Base discount canceled.
     *
     * @param float $baseDiscountCanceled
     *
     * @return self
     */
    public function setBaseDiscountCanceled(float $baseDiscountCanceled): self
    {
        $this->baseDiscountCanceled = $baseDiscountCanceled;
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
     * Base grand total.
     *
     * @return float
     */
    public function getBaseGrandTotal(): float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Base grand total.
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
     * Base shipping amount.
     *
     * @return float
     */
    public function getBaseShippingAmount(): float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Base shipping amount.
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
     * Base shipping canceled.
     *
     * @return float
     */
    public function getBaseShippingCanceled(): float
    {
        return $this->baseShippingCanceled;
    }
    /**
     * Base shipping canceled.
     *
     * @param float $baseShippingCanceled
     *
     * @return self
     */
    public function setBaseShippingCanceled(float $baseShippingCanceled): self
    {
        $this->baseShippingCanceled = $baseShippingCanceled;
        return $this;
    }
    /**
     * Base shipping discount amount.
     *
     * @return float
     */
    public function getBaseShippingDiscountAmount(): float
    {
        return $this->baseShippingDiscountAmount;
    }
    /**
     * Base shipping discount amount.
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
     * Base shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseShippingDiscountTaxCompensationAmnt(): float
    {
        return $this->baseShippingDiscountTaxCompensationAmnt;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @param float $baseShippingDiscountTaxCompensationAmnt
     *
     * @return self
     */
    public function setBaseShippingDiscountTaxCompensationAmnt(float $baseShippingDiscountTaxCompensationAmnt): self
    {
        $this->baseShippingDiscountTaxCompensationAmnt = $baseShippingDiscountTaxCompensationAmnt;
        return $this;
    }
    /**
     * Base shipping including tax.
     *
     * @return float
     */
    public function getBaseShippingInclTax(): float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Base shipping including tax.
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
     * Base shipping invoiced.
     *
     * @return float
     */
    public function getBaseShippingInvoiced(): float
    {
        return $this->baseShippingInvoiced;
    }
    /**
     * Base shipping invoiced.
     *
     * @param float $baseShippingInvoiced
     *
     * @return self
     */
    public function setBaseShippingInvoiced(float $baseShippingInvoiced): self
    {
        $this->baseShippingInvoiced = $baseShippingInvoiced;
        return $this;
    }
    /**
     * Base shipping refunded.
     *
     * @return float
     */
    public function getBaseShippingRefunded(): float
    {
        return $this->baseShippingRefunded;
    }
    /**
     * Base shipping refunded.
     *
     * @param float $baseShippingRefunded
     *
     * @return self
     */
    public function setBaseShippingRefunded(float $baseShippingRefunded): self
    {
        $this->baseShippingRefunded = $baseShippingRefunded;
        return $this;
    }
    /**
     * Base shipping tax amount.
     *
     * @return float
     */
    public function getBaseShippingTaxAmount(): float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Base shipping tax amount.
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
     * Base shipping tax refunded.
     *
     * @return float
     */
    public function getBaseShippingTaxRefunded(): float
    {
        return $this->baseShippingTaxRefunded;
    }
    /**
     * Base shipping tax refunded.
     *
     * @param float $baseShippingTaxRefunded
     *
     * @return self
     */
    public function setBaseShippingTaxRefunded(float $baseShippingTaxRefunded): self
    {
        $this->baseShippingTaxRefunded = $baseShippingTaxRefunded;
        return $this;
    }
    /**
     * Base subtotal.
     *
     * @return float
     */
    public function getBaseSubtotal(): float
    {
        return $this->baseSubtotal;
    }
    /**
     * Base subtotal.
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
     * Base subtotal canceled.
     *
     * @return float
     */
    public function getBaseSubtotalCanceled(): float
    {
        return $this->baseSubtotalCanceled;
    }
    /**
     * Base subtotal canceled.
     *
     * @param float $baseSubtotalCanceled
     *
     * @return self
     */
    public function setBaseSubtotalCanceled(float $baseSubtotalCanceled): self
    {
        $this->baseSubtotalCanceled = $baseSubtotalCanceled;
        return $this;
    }
    /**
     * Base subtotal including tax.
     *
     * @return float
     */
    public function getBaseSubtotalInclTax(): float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Base subtotal including tax.
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
     * Base subtotal invoiced.
     *
     * @return float
     */
    public function getBaseSubtotalInvoiced(): float
    {
        return $this->baseSubtotalInvoiced;
    }
    /**
     * Base subtotal invoiced.
     *
     * @param float $baseSubtotalInvoiced
     *
     * @return self
     */
    public function setBaseSubtotalInvoiced(float $baseSubtotalInvoiced): self
    {
        $this->baseSubtotalInvoiced = $baseSubtotalInvoiced;
        return $this;
    }
    /**
     * Base subtotal refunded.
     *
     * @return float
     */
    public function getBaseSubtotalRefunded(): float
    {
        return $this->baseSubtotalRefunded;
    }
    /**
     * Base subtotal refunded.
     *
     * @param float $baseSubtotalRefunded
     *
     * @return self
     */
    public function setBaseSubtotalRefunded(float $baseSubtotalRefunded): self
    {
        $this->baseSubtotalRefunded = $baseSubtotalRefunded;
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
     * Base tax canceled.
     *
     * @return float
     */
    public function getBaseTaxCanceled(): float
    {
        return $this->baseTaxCanceled;
    }
    /**
     * Base tax canceled.
     *
     * @param float $baseTaxCanceled
     *
     * @return self
     */
    public function setBaseTaxCanceled(float $baseTaxCanceled): self
    {
        $this->baseTaxCanceled = $baseTaxCanceled;
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
     * Base-to-global rate.
     *
     * @return float
     */
    public function getBaseToGlobalRate(): float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Base-to-global rate.
     *
     * @param float $baseToGlobalRate
     *
     * @return self
     */
    public function setBaseToGlobalRate(float $baseToGlobalRate): self
    {
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }
    /**
     * Base-to-order rate.
     *
     * @return float
     */
    public function getBaseToOrderRate(): float
    {
        return $this->baseToOrderRate;
    }
    /**
     * Base-to-order rate.
     *
     * @param float $baseToOrderRate
     *
     * @return self
     */
    public function setBaseToOrderRate(float $baseToOrderRate): self
    {
        $this->baseToOrderRate = $baseToOrderRate;
        return $this;
    }
    /**
     * Base total canceled.
     *
     * @return float
     */
    public function getBaseTotalCanceled(): float
    {
        return $this->baseTotalCanceled;
    }
    /**
     * Base total canceled.
     *
     * @param float $baseTotalCanceled
     *
     * @return self
     */
    public function setBaseTotalCanceled(float $baseTotalCanceled): self
    {
        $this->baseTotalCanceled = $baseTotalCanceled;
        return $this;
    }
    /**
     * Base total due.
     *
     * @return float
     */
    public function getBaseTotalDue(): float
    {
        return $this->baseTotalDue;
    }
    /**
     * Base total due.
     *
     * @param float $baseTotalDue
     *
     * @return self
     */
    public function setBaseTotalDue(float $baseTotalDue): self
    {
        $this->baseTotalDue = $baseTotalDue;
        return $this;
    }
    /**
     * Base total invoiced.
     *
     * @return float
     */
    public function getBaseTotalInvoiced(): float
    {
        return $this->baseTotalInvoiced;
    }
    /**
     * Base total invoiced.
     *
     * @param float $baseTotalInvoiced
     *
     * @return self
     */
    public function setBaseTotalInvoiced(float $baseTotalInvoiced): self
    {
        $this->baseTotalInvoiced = $baseTotalInvoiced;
        return $this;
    }
    /**
     * Base total invoiced cost.
     *
     * @return float
     */
    public function getBaseTotalInvoicedCost(): float
    {
        return $this->baseTotalInvoicedCost;
    }
    /**
     * Base total invoiced cost.
     *
     * @param float $baseTotalInvoicedCost
     *
     * @return self
     */
    public function setBaseTotalInvoicedCost(float $baseTotalInvoicedCost): self
    {
        $this->baseTotalInvoicedCost = $baseTotalInvoicedCost;
        return $this;
    }
    /**
     * Base total offline refunded.
     *
     * @return float
     */
    public function getBaseTotalOfflineRefunded(): float
    {
        return $this->baseTotalOfflineRefunded;
    }
    /**
     * Base total offline refunded.
     *
     * @param float $baseTotalOfflineRefunded
     *
     * @return self
     */
    public function setBaseTotalOfflineRefunded(float $baseTotalOfflineRefunded): self
    {
        $this->baseTotalOfflineRefunded = $baseTotalOfflineRefunded;
        return $this;
    }
    /**
     * Base total online refunded.
     *
     * @return float
     */
    public function getBaseTotalOnlineRefunded(): float
    {
        return $this->baseTotalOnlineRefunded;
    }
    /**
     * Base total online refunded.
     *
     * @param float $baseTotalOnlineRefunded
     *
     * @return self
     */
    public function setBaseTotalOnlineRefunded(float $baseTotalOnlineRefunded): self
    {
        $this->baseTotalOnlineRefunded = $baseTotalOnlineRefunded;
        return $this;
    }
    /**
     * Base total paid.
     *
     * @return float
     */
    public function getBaseTotalPaid(): float
    {
        return $this->baseTotalPaid;
    }
    /**
     * Base total paid.
     *
     * @param float $baseTotalPaid
     *
     * @return self
     */
    public function setBaseTotalPaid(float $baseTotalPaid): self
    {
        $this->baseTotalPaid = $baseTotalPaid;
        return $this;
    }
    /**
     * Base total quantity ordered.
     *
     * @return float
     */
    public function getBaseTotalQtyOrdered(): float
    {
        return $this->baseTotalQtyOrdered;
    }
    /**
     * Base total quantity ordered.
     *
     * @param float $baseTotalQtyOrdered
     *
     * @return self
     */
    public function setBaseTotalQtyOrdered(float $baseTotalQtyOrdered): self
    {
        $this->baseTotalQtyOrdered = $baseTotalQtyOrdered;
        return $this;
    }
    /**
     * Base total refunded.
     *
     * @return float
     */
    public function getBaseTotalRefunded(): float
    {
        return $this->baseTotalRefunded;
    }
    /**
     * Base total refunded.
     *
     * @param float $baseTotalRefunded
     *
     * @return self
     */
    public function setBaseTotalRefunded(float $baseTotalRefunded): self
    {
        $this->baseTotalRefunded = $baseTotalRefunded;
        return $this;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface
     */
    public function getBillingAddress(): SalesDataOrderAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(SalesDataOrderAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Billing address ID.
     *
     * @return int
     */
    public function getBillingAddressId(): int
    {
        return $this->billingAddressId;
    }
    /**
     * Billing address ID.
     *
     * @param int $billingAddressId
     *
     * @return self
     */
    public function setBillingAddressId(int $billingAddressId): self
    {
        $this->billingAddressId = $billingAddressId;
        return $this;
    }
    /**
     * Can-ship-partially flag value.
     *
     * @return int
     */
    public function getCanShipPartially(): int
    {
        return $this->canShipPartially;
    }
    /**
     * Can-ship-partially flag value.
     *
     * @param int $canShipPartially
     *
     * @return self
     */
    public function setCanShipPartially(int $canShipPartially): self
    {
        $this->canShipPartially = $canShipPartially;
        return $this;
    }
    /**
     * Can-ship-partially-item flag value.
     *
     * @return int
     */
    public function getCanShipPartiallyItem(): int
    {
        return $this->canShipPartiallyItem;
    }
    /**
     * Can-ship-partially-item flag value.
     *
     * @param int $canShipPartiallyItem
     *
     * @return self
     */
    public function setCanShipPartiallyItem(int $canShipPartiallyItem): self
    {
        $this->canShipPartiallyItem = $canShipPartiallyItem;
        return $this;
    }
    /**
     * Coupon code.
     *
     * @return string
     */
    public function getCouponCode(): string
    {
        return $this->couponCode;
    }
    /**
     * Coupon code.
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
     * Customer date-of-birth (DOB).
     *
     * @return string
     */
    public function getCustomerDob(): string
    {
        return $this->customerDob;
    }
    /**
     * Customer date-of-birth (DOB).
     *
     * @param string $customerDob
     *
     * @return self
     */
    public function setCustomerDob(string $customerDob): self
    {
        $this->customerDob = $customerDob;
        return $this;
    }
    /**
     * Customer email address.
     *
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }
    /**
     * Customer email address.
     *
     * @param string $customerEmail
     *
     * @return self
     */
    public function setCustomerEmail(string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * Customer first name.
     *
     * @return string
     */
    public function getCustomerFirstname(): string
    {
        return $this->customerFirstname;
    }
    /**
     * Customer first name.
     *
     * @param string $customerFirstname
     *
     * @return self
     */
    public function setCustomerFirstname(string $customerFirstname): self
    {
        $this->customerFirstname = $customerFirstname;
        return $this;
    }
    /**
     * Customer gender.
     *
     * @return int
     */
    public function getCustomerGender(): int
    {
        return $this->customerGender;
    }
    /**
     * Customer gender.
     *
     * @param int $customerGender
     *
     * @return self
     */
    public function setCustomerGender(int $customerGender): self
    {
        $this->customerGender = $customerGender;
        return $this;
    }
    /**
     * Customer group ID.
     *
     * @return int
     */
    public function getCustomerGroupId(): int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer group ID.
     *
     * @param int $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Customer-is-guest flag value.
     *
     * @return int
     */
    public function getCustomerIsGuest(): int
    {
        return $this->customerIsGuest;
    }
    /**
     * Customer-is-guest flag value.
     *
     * @param int $customerIsGuest
     *
     * @return self
     */
    public function setCustomerIsGuest(int $customerIsGuest): self
    {
        $this->customerIsGuest = $customerIsGuest;
        return $this;
    }
    /**
     * Customer last name.
     *
     * @return string
     */
    public function getCustomerLastname(): string
    {
        return $this->customerLastname;
    }
    /**
     * Customer last name.
     *
     * @param string $customerLastname
     *
     * @return self
     */
    public function setCustomerLastname(string $customerLastname): self
    {
        $this->customerLastname = $customerLastname;
        return $this;
    }
    /**
     * Customer middle name.
     *
     * @return string
     */
    public function getCustomerMiddlename(): string
    {
        return $this->customerMiddlename;
    }
    /**
     * Customer middle name.
     *
     * @param string $customerMiddlename
     *
     * @return self
     */
    public function setCustomerMiddlename(string $customerMiddlename): self
    {
        $this->customerMiddlename = $customerMiddlename;
        return $this;
    }
    /**
     * Customer note.
     *
     * @return string
     */
    public function getCustomerNote(): string
    {
        return $this->customerNote;
    }
    /**
     * Customer note.
     *
     * @param string $customerNote
     *
     * @return self
     */
    public function setCustomerNote(string $customerNote): self
    {
        $this->customerNote = $customerNote;
        return $this;
    }
    /**
     * Customer-note-notify flag value.
     *
     * @return int
     */
    public function getCustomerNoteNotify(): int
    {
        return $this->customerNoteNotify;
    }
    /**
     * Customer-note-notify flag value.
     *
     * @param int $customerNoteNotify
     *
     * @return self
     */
    public function setCustomerNoteNotify(int $customerNoteNotify): self
    {
        $this->customerNoteNotify = $customerNoteNotify;
        return $this;
    }
    /**
     * Customer prefix.
     *
     * @return string
     */
    public function getCustomerPrefix(): string
    {
        return $this->customerPrefix;
    }
    /**
     * Customer prefix.
     *
     * @param string $customerPrefix
     *
     * @return self
     */
    public function setCustomerPrefix(string $customerPrefix): self
    {
        $this->customerPrefix = $customerPrefix;
        return $this;
    }
    /**
     * Customer suffix.
     *
     * @return string
     */
    public function getCustomerSuffix(): string
    {
        return $this->customerSuffix;
    }
    /**
     * Customer suffix.
     *
     * @param string $customerSuffix
     *
     * @return self
     */
    public function setCustomerSuffix(string $customerSuffix): self
    {
        $this->customerSuffix = $customerSuffix;
        return $this;
    }
    /**
     * Customer value-added tax (VAT).
     *
     * @return string
     */
    public function getCustomerTaxvat(): string
    {
        return $this->customerTaxvat;
    }
    /**
     * Customer value-added tax (VAT).
     *
     * @param string $customerTaxvat
     *
     * @return self
     */
    public function setCustomerTaxvat(string $customerTaxvat): self
    {
        $this->customerTaxvat = $customerTaxvat;
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
     * Discount canceled.
     *
     * @return float
     */
    public function getDiscountCanceled(): float
    {
        return $this->discountCanceled;
    }
    /**
     * Discount canceled.
     *
     * @param float $discountCanceled
     *
     * @return self
     */
    public function setDiscountCanceled(float $discountCanceled): self
    {
        $this->discountCanceled = $discountCanceled;
        return $this;
    }
    /**
     * Discount description.
     *
     * @return string
     */
    public function getDiscountDescription(): string
    {
        return $this->discountDescription;
    }
    /**
     * Discount description.
     *
     * @param string $discountDescription
     *
     * @return self
     */
    public function setDiscountDescription(string $discountDescription): self
    {
        $this->discountDescription = $discountDescription;
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
     * Discount refunded amount.
     *
     * @return float
     */
    public function getDiscountRefunded(): float
    {
        return $this->discountRefunded;
    }
    /**
     * Discount refunded amount.
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
     * Discount tax compensation invoiced amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationInvoiced(): float
    {
        return $this->discountTaxCompensationInvoiced;
    }
    /**
     * Discount tax compensation invoiced amount.
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
     * Discount tax compensation refunded amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationRefunded(): float
    {
        return $this->discountTaxCompensationRefunded;
    }
    /**
     * Discount tax compensation refunded amount.
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
     * Edit increment value.
     *
     * @return int
     */
    public function getEditIncrement(): int
    {
        return $this->editIncrement;
    }
    /**
     * Edit increment value.
     *
     * @param int $editIncrement
     *
     * @return self
     */
    public function setEditIncrement(int $editIncrement): self
    {
        $this->editIncrement = $editIncrement;
        return $this;
    }
    /**
     * Email-sent flag value.
     *
     * @return int
     */
    public function getEmailSent(): int
    {
        return $this->emailSent;
    }
    /**
     * Email-sent flag value.
     *
     * @param int $emailSent
     *
     * @return self
     */
    public function setEmailSent(int $emailSent): self
    {
        $this->emailSent = $emailSent;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Order ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * External customer ID.
     *
     * @return string
     */
    public function getExtCustomerId(): string
    {
        return $this->extCustomerId;
    }
    /**
     * External customer ID.
     *
     * @param string $extCustomerId
     *
     * @return self
     */
    public function setExtCustomerId(string $extCustomerId): self
    {
        $this->extCustomerId = $extCustomerId;
        return $this;
    }
    /**
     * External order ID.
     *
     * @return string
     */
    public function getExtOrderId(): string
    {
        return $this->extOrderId;
    }
    /**
     * External order ID.
     *
     * @param string $extOrderId
     *
     * @return self
     */
    public function setExtOrderId(string $extOrderId): self
    {
        $this->extOrderId = $extOrderId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @return SalesDataOrderExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataOrderExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
     *
     * @param SalesDataOrderExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataOrderExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @return int
     */
    public function getForcedShipmentWithInvoice(): int
    {
        return $this->forcedShipmentWithInvoice;
    }
    /**
     * Forced-shipment-with-invoice flag value.
     *
     * @param int $forcedShipmentWithInvoice
     *
     * @return self
     */
    public function setForcedShipmentWithInvoice(int $forcedShipmentWithInvoice): self
    {
        $this->forcedShipmentWithInvoice = $forcedShipmentWithInvoice;
        return $this;
    }
    /**
     * Global currency code.
     *
     * @return string
     */
    public function getGlobalCurrencyCode(): string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Global currency code.
     *
     * @param string $globalCurrencyCode
     *
     * @return self
     */
    public function setGlobalCurrencyCode(string $globalCurrencyCode): self
    {
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }
    /**
     * Grand total.
     *
     * @return float
     */
    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }
    /**
     * Grand total.
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
     * Hold before state.
     *
     * @return string
     */
    public function getHoldBeforeState(): string
    {
        return $this->holdBeforeState;
    }
    /**
     * Hold before state.
     *
     * @param string $holdBeforeState
     *
     * @return self
     */
    public function setHoldBeforeState(string $holdBeforeState): self
    {
        $this->holdBeforeState = $holdBeforeState;
        return $this;
    }
    /**
     * Hold before status.
     *
     * @return string
     */
    public function getHoldBeforeStatus(): string
    {
        return $this->holdBeforeStatus;
    }
    /**
     * Hold before status.
     *
     * @param string $holdBeforeStatus
     *
     * @return self
     */
    public function setHoldBeforeStatus(string $holdBeforeStatus): self
    {
        $this->holdBeforeStatus = $holdBeforeStatus;
        return $this;
    }
    /**
     * Increment ID.
     *
     * @return string
     */
    public function getIncrementId(): string
    {
        return $this->incrementId;
    }
    /**
     * Increment ID.
     *
     * @param string $incrementId
     *
     * @return self
     */
    public function setIncrementId(string $incrementId): self
    {
        $this->incrementId = $incrementId;
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
     * Array of items.
     *
     * @return SalesDataOrderItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Array of items.
     *
     * @param SalesDataOrderItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Order currency code.
     *
     * @return string
     */
    public function getOrderCurrencyCode(): string
    {
        return $this->orderCurrencyCode;
    }
    /**
     * Order currency code.
     *
     * @param string $orderCurrencyCode
     *
     * @return self
     */
    public function setOrderCurrencyCode(string $orderCurrencyCode): self
    {
        $this->orderCurrencyCode = $orderCurrencyCode;
        return $this;
    }
    /**
     * Original increment ID.
     *
     * @return string
     */
    public function getOriginalIncrementId(): string
    {
        return $this->originalIncrementId;
    }
    /**
     * Original increment ID.
     *
     * @param string $originalIncrementId
     *
     * @return self
     */
    public function setOriginalIncrementId(string $originalIncrementId): self
    {
        $this->originalIncrementId = $originalIncrementId;
        return $this;
    }
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderPaymentInterface
     */
    public function getPayment(): SalesDataOrderPaymentInterface
    {
        return $this->payment;
    }
    /**
     * Order payment interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderPaymentInterface $payment
     *
     * @return self
     */
    public function setPayment(SalesDataOrderPaymentInterface $payment): self
    {
        $this->payment = $payment;
        return $this;
    }
    /**
     * Payment authorization expiration date.
     *
     * @return int
     */
    public function getPaymentAuthExpiration(): int
    {
        return $this->paymentAuthExpiration;
    }
    /**
     * Payment authorization expiration date.
     *
     * @param int $paymentAuthExpiration
     *
     * @return self
     */
    public function setPaymentAuthExpiration(int $paymentAuthExpiration): self
    {
        $this->paymentAuthExpiration = $paymentAuthExpiration;
        return $this;
    }
    /**
     * Payment authorization amount.
     *
     * @return float
     */
    public function getPaymentAuthorizationAmount(): float
    {
        return $this->paymentAuthorizationAmount;
    }
    /**
     * Payment authorization amount.
     *
     * @param float $paymentAuthorizationAmount
     *
     * @return self
     */
    public function setPaymentAuthorizationAmount(float $paymentAuthorizationAmount): self
    {
        $this->paymentAuthorizationAmount = $paymentAuthorizationAmount;
        return $this;
    }
    /**
     * Protect code.
     *
     * @return string
     */
    public function getProtectCode(): string
    {
        return $this->protectCode;
    }
    /**
     * Protect code.
     *
     * @param string $protectCode
     *
     * @return self
     */
    public function setProtectCode(string $protectCode): self
    {
        $this->protectCode = $protectCode;
        return $this;
    }
    /**
     * Quote address ID.
     *
     * @return int
     */
    public function getQuoteAddressId(): int
    {
        return $this->quoteAddressId;
    }
    /**
     * Quote address ID.
     *
     * @param int $quoteAddressId
     *
     * @return self
     */
    public function setQuoteAddressId(int $quoteAddressId): self
    {
        $this->quoteAddressId = $quoteAddressId;
        return $this;
    }
    /**
     * Quote ID.
     *
     * @return int
     */
    public function getQuoteId(): int
    {
        return $this->quoteId;
    }
    /**
     * Quote ID.
     *
     * @param int $quoteId
     *
     * @return self
     */
    public function setQuoteId(int $quoteId): self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Relation child ID.
     *
     * @return string
     */
    public function getRelationChildId(): string
    {
        return $this->relationChildId;
    }
    /**
     * Relation child ID.
     *
     * @param string $relationChildId
     *
     * @return self
     */
    public function setRelationChildId(string $relationChildId): self
    {
        $this->relationChildId = $relationChildId;
        return $this;
    }
    /**
     * Relation child real ID.
     *
     * @return string
     */
    public function getRelationChildRealId(): string
    {
        return $this->relationChildRealId;
    }
    /**
     * Relation child real ID.
     *
     * @param string $relationChildRealId
     *
     * @return self
     */
    public function setRelationChildRealId(string $relationChildRealId): self
    {
        $this->relationChildRealId = $relationChildRealId;
        return $this;
    }
    /**
     * Relation parent ID.
     *
     * @return string
     */
    public function getRelationParentId(): string
    {
        return $this->relationParentId;
    }
    /**
     * Relation parent ID.
     *
     * @param string $relationParentId
     *
     * @return self
     */
    public function setRelationParentId(string $relationParentId): self
    {
        $this->relationParentId = $relationParentId;
        return $this;
    }
    /**
     * Relation parent real ID.
     *
     * @return string
     */
    public function getRelationParentRealId(): string
    {
        return $this->relationParentRealId;
    }
    /**
     * Relation parent real ID.
     *
     * @param string $relationParentRealId
     *
     * @return self
     */
    public function setRelationParentRealId(string $relationParentRealId): self
    {
        $this->relationParentRealId = $relationParentRealId;
        return $this;
    }
    /**
     * Remote IP address.
     *
     * @return string
     */
    public function getRemoteIp(): string
    {
        return $this->remoteIp;
    }
    /**
     * Remote IP address.
     *
     * @param string $remoteIp
     *
     * @return self
     */
    public function setRemoteIp(string $remoteIp): self
    {
        $this->remoteIp = $remoteIp;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }
    /**
     * Shipping amount.
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
     * Shipping canceled amount.
     *
     * @return float
     */
    public function getShippingCanceled(): float
    {
        return $this->shippingCanceled;
    }
    /**
     * Shipping canceled amount.
     *
     * @param float $shippingCanceled
     *
     * @return self
     */
    public function setShippingCanceled(float $shippingCanceled): self
    {
        $this->shippingCanceled = $shippingCanceled;
        return $this;
    }
    /**
     * Shipping description.
     *
     * @return string
     */
    public function getShippingDescription(): string
    {
        return $this->shippingDescription;
    }
    /**
     * Shipping description.
     *
     * @param string $shippingDescription
     *
     * @return self
     */
    public function setShippingDescription(string $shippingDescription): self
    {
        $this->shippingDescription = $shippingDescription;
        return $this;
    }
    /**
     * Shipping discount amount.
     *
     * @return float
     */
    public function getShippingDiscountAmount(): float
    {
        return $this->shippingDiscountAmount;
    }
    /**
     * Shipping discount amount.
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
     * Shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getShippingDiscountTaxCompensationAmount(): float
    {
        return $this->shippingDiscountTaxCompensationAmount;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @param float $shippingDiscountTaxCompensationAmount
     *
     * @return self
     */
    public function setShippingDiscountTaxCompensationAmount(float $shippingDiscountTaxCompensationAmount): self
    {
        $this->shippingDiscountTaxCompensationAmount = $shippingDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Shipping including tax amount.
     *
     * @return float
     */
    public function getShippingInclTax(): float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax amount.
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
     * Shipping invoiced amount.
     *
     * @return float
     */
    public function getShippingInvoiced(): float
    {
        return $this->shippingInvoiced;
    }
    /**
     * Shipping invoiced amount.
     *
     * @param float $shippingInvoiced
     *
     * @return self
     */
    public function setShippingInvoiced(float $shippingInvoiced): self
    {
        $this->shippingInvoiced = $shippingInvoiced;
        return $this;
    }
    /**
     * Shipping refunded amount.
     *
     * @return float
     */
    public function getShippingRefunded(): float
    {
        return $this->shippingRefunded;
    }
    /**
     * Shipping refunded amount.
     *
     * @param float $shippingRefunded
     *
     * @return self
     */
    public function setShippingRefunded(float $shippingRefunded): self
    {
        $this->shippingRefunded = $shippingRefunded;
        return $this;
    }
    /**
     * Shipping tax amount.
     *
     * @return float
     */
    public function getShippingTaxAmount(): float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Shipping tax amount.
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
     * Shipping tax refunded amount.
     *
     * @return float
     */
    public function getShippingTaxRefunded(): float
    {
        return $this->shippingTaxRefunded;
    }
    /**
     * Shipping tax refunded amount.
     *
     * @param float $shippingTaxRefunded
     *
     * @return self
     */
    public function setShippingTaxRefunded(float $shippingTaxRefunded): self
    {
        $this->shippingTaxRefunded = $shippingTaxRefunded;
        return $this;
    }
    /**
     * State.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Array of status histories.
     *
     * @return SalesDataOrderStatusHistoryInterface[]
     */
    public function getStatusHistories(): array
    {
        return $this->statusHistories;
    }
    /**
     * Array of status histories.
     *
     * @param SalesDataOrderStatusHistoryInterface[] $statusHistories
     *
     * @return self
     */
    public function setStatusHistories(array $statusHistories): self
    {
        $this->statusHistories = $statusHistories;
        return $this;
    }
    /**
     * Store currency code.
     *
     * @return string
     */
    public function getStoreCurrencyCode(): string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Store currency code.
     *
     * @param string $storeCurrencyCode
     *
     * @return self
     */
    public function setStoreCurrencyCode(string $storeCurrencyCode): self
    {
        $this->storeCurrencyCode = $storeCurrencyCode;
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
     * Store name.
     *
     * @return string
     */
    public function getStoreName(): string
    {
        return $this->storeName;
    }
    /**
     * Store name.
     *
     * @param string $storeName
     *
     * @return self
     */
    public function setStoreName(string $storeName): self
    {
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Store-to-base rate.
     *
     * @return float
     */
    public function getStoreToBaseRate(): float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Store-to-base rate.
     *
     * @param float $storeToBaseRate
     *
     * @return self
     */
    public function setStoreToBaseRate(float $storeToBaseRate): self
    {
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }
    /**
     * Store-to-order rate.
     *
     * @return float
     */
    public function getStoreToOrderRate(): float
    {
        return $this->storeToOrderRate;
    }
    /**
     * Store-to-order rate.
     *
     * @param float $storeToOrderRate
     *
     * @return self
     */
    public function setStoreToOrderRate(float $storeToOrderRate): self
    {
        $this->storeToOrderRate = $storeToOrderRate;
        return $this;
    }
    /**
     * Subtotal.
     *
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }
    /**
     * Subtotal.
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
     * Subtotal canceled amount.
     *
     * @return float
     */
    public function getSubtotalCanceled(): float
    {
        return $this->subtotalCanceled;
    }
    /**
     * Subtotal canceled amount.
     *
     * @param float $subtotalCanceled
     *
     * @return self
     */
    public function setSubtotalCanceled(float $subtotalCanceled): self
    {
        $this->subtotalCanceled = $subtotalCanceled;
        return $this;
    }
    /**
     * Subtotal including tax amount.
     *
     * @return float
     */
    public function getSubtotalInclTax(): float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax amount.
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
     * Subtotal invoiced amount.
     *
     * @return float
     */
    public function getSubtotalInvoiced(): float
    {
        return $this->subtotalInvoiced;
    }
    /**
     * Subtotal invoiced amount.
     *
     * @param float $subtotalInvoiced
     *
     * @return self
     */
    public function setSubtotalInvoiced(float $subtotalInvoiced): self
    {
        $this->subtotalInvoiced = $subtotalInvoiced;
        return $this;
    }
    /**
     * Subtotal refunded amount.
     *
     * @return float
     */
    public function getSubtotalRefunded(): float
    {
        return $this->subtotalRefunded;
    }
    /**
     * Subtotal refunded amount.
     *
     * @param float $subtotalRefunded
     *
     * @return self
     */
    public function setSubtotalRefunded(float $subtotalRefunded): self
    {
        $this->subtotalRefunded = $subtotalRefunded;
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
     * Tax canceled amount.
     *
     * @return float
     */
    public function getTaxCanceled(): float
    {
        return $this->taxCanceled;
    }
    /**
     * Tax canceled amount.
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
     * Tax invoiced amount.
     *
     * @return float
     */
    public function getTaxInvoiced(): float
    {
        return $this->taxInvoiced;
    }
    /**
     * Tax invoiced amount.
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
     * Tax refunded amount.
     *
     * @return float
     */
    public function getTaxRefunded(): float
    {
        return $this->taxRefunded;
    }
    /**
     * Tax refunded amount.
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
     * Total canceled.
     *
     * @return float
     */
    public function getTotalCanceled(): float
    {
        return $this->totalCanceled;
    }
    /**
     * Total canceled.
     *
     * @param float $totalCanceled
     *
     * @return self
     */
    public function setTotalCanceled(float $totalCanceled): self
    {
        $this->totalCanceled = $totalCanceled;
        return $this;
    }
    /**
     * Total due.
     *
     * @return float
     */
    public function getTotalDue(): float
    {
        return $this->totalDue;
    }
    /**
     * Total due.
     *
     * @param float $totalDue
     *
     * @return self
     */
    public function setTotalDue(float $totalDue): self
    {
        $this->totalDue = $totalDue;
        return $this;
    }
    /**
     * Total invoiced amount.
     *
     * @return float
     */
    public function getTotalInvoiced(): float
    {
        return $this->totalInvoiced;
    }
    /**
     * Total invoiced amount.
     *
     * @param float $totalInvoiced
     *
     * @return self
     */
    public function setTotalInvoiced(float $totalInvoiced): self
    {
        $this->totalInvoiced = $totalInvoiced;
        return $this;
    }
    /**
     * Total item count.
     *
     * @return int
     */
    public function getTotalItemCount(): int
    {
        return $this->totalItemCount;
    }
    /**
     * Total item count.
     *
     * @param int $totalItemCount
     *
     * @return self
     */
    public function setTotalItemCount(int $totalItemCount): self
    {
        $this->totalItemCount = $totalItemCount;
        return $this;
    }
    /**
     * Total offline refunded amount.
     *
     * @return float
     */
    public function getTotalOfflineRefunded(): float
    {
        return $this->totalOfflineRefunded;
    }
    /**
     * Total offline refunded amount.
     *
     * @param float $totalOfflineRefunded
     *
     * @return self
     */
    public function setTotalOfflineRefunded(float $totalOfflineRefunded): self
    {
        $this->totalOfflineRefunded = $totalOfflineRefunded;
        return $this;
    }
    /**
     * Total online refunded amount.
     *
     * @return float
     */
    public function getTotalOnlineRefunded(): float
    {
        return $this->totalOnlineRefunded;
    }
    /**
     * Total online refunded amount.
     *
     * @param float $totalOnlineRefunded
     *
     * @return self
     */
    public function setTotalOnlineRefunded(float $totalOnlineRefunded): self
    {
        $this->totalOnlineRefunded = $totalOnlineRefunded;
        return $this;
    }
    /**
     * Total paid.
     *
     * @return float
     */
    public function getTotalPaid(): float
    {
        return $this->totalPaid;
    }
    /**
     * Total paid.
     *
     * @param float $totalPaid
     *
     * @return self
     */
    public function setTotalPaid(float $totalPaid): self
    {
        $this->totalPaid = $totalPaid;
        return $this;
    }
    /**
     * Total quantity ordered.
     *
     * @return float
     */
    public function getTotalQtyOrdered(): float
    {
        return $this->totalQtyOrdered;
    }
    /**
     * Total quantity ordered.
     *
     * @param float $totalQtyOrdered
     *
     * @return self
     */
    public function setTotalQtyOrdered(float $totalQtyOrdered): self
    {
        $this->totalQtyOrdered = $totalQtyOrdered;
        return $this;
    }
    /**
     * Total amount refunded.
     *
     * @return float
     */
    public function getTotalRefunded(): float
    {
        return $this->totalRefunded;
    }
    /**
     * Total amount refunded.
     *
     * @param float $totalRefunded
     *
     * @return self
     */
    public function setTotalRefunded(float $totalRefunded): self
    {
        $this->totalRefunded = $totalRefunded;
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
     * X-Forwarded-For field value.
     *
     * @return string
     */
    public function getXForwardedFor(): string
    {
        return $this->xForwardedFor;
    }
    /**
     * X-Forwarded-For field value.
     *
     * @param string $xForwardedFor
     *
     * @return self
     */
    public function setXForwardedFor(string $xForwardedFor): self
    {
        $this->xForwardedFor = $xForwardedFor;
        return $this;
    }
}
