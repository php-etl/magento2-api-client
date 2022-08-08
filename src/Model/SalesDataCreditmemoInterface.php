<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataCreditmemoInterface
{
    /**
     * Credit memo adjustment.
     *
     * @var float
     */
    protected $adjustment;
    /**
     * Credit memo negative adjustment.
     *
     * @var float
     */
    protected $adjustmentNegative;
    /**
     * Credit memo positive adjustment.
     *
     * @var float
     */
    protected $adjustmentPositive;
    /**
     * Credit memo base adjustment.
     *
     * @var float
     */
    protected $baseAdjustment;
    /**
     * Credit memo negative base adjustment.
     *
     * @var float
     */
    protected $baseAdjustmentNegative;
    /**
     * Credit memo positive base adjustment.
     *
     * @var float
     */
    protected $baseAdjustmentPositive;
    /**
     * Credit memo base currency code.
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * Credit memo base discount amount.
     *
     * @var float
     */
    protected $baseDiscountAmount;
    /**
     * Credit memo base grand total.
     *
     * @var float
     */
    protected $baseGrandTotal;
    /**
     * Credit memo base discount tax compensation amount.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Credit memo base shipping amount.
     *
     * @var float
     */
    protected $baseShippingAmount;
    /**
     * Credit memo base shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $baseShippingDiscountTaxCompensationAmnt;
    /**
     * Credit memo base shipping including tax.
     *
     * @var float
     */
    protected $baseShippingInclTax;
    /**
     * Credit memo base shipping tax amount.
     *
     * @var float
     */
    protected $baseShippingTaxAmount;
    /**
     * Credit memo base subtotal.
     *
     * @var float
     */
    protected $baseSubtotal;
    /**
     * Credit memo base subtotal including tax.
     *
     * @var float
     */
    protected $baseSubtotalInclTax;
    /**
     * Credit memo base tax amount.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Credit memo base-to-global rate.
     *
     * @var float
     */
    protected $baseToGlobalRate;
    /**
     * Credit memo base-to-order rate.
     *
     * @var float
     */
    protected $baseToOrderRate;
    /**
     * Credit memo billing address ID.
     *
     * @var int
     */
    protected $billingAddressId;
    /**
     * Credit memo created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Credit memo status.
     *
     * @var int
     */
    protected $creditmemoStatus;
    /**
     * Credit memo discount amount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Credit memo discount description.
     *
     * @var string
     */
    protected $discountDescription;
    /**
     * Credit memo email sent flag value.
     *
     * @var int
     */
    protected $emailSent;
    /**
     * Credit memo ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Credit memo global currency code.
     *
     * @var string
     */
    protected $globalCurrencyCode;
    /**
     * Credit memo grand total.
     *
     * @var float
     */
    protected $grandTotal;
    /**
     * Credit memo discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Credit memo increment ID.
     *
     * @var string
     */
    protected $incrementId;
    /**
     * Credit memo invoice ID.
     *
     * @var int
     */
    protected $invoiceId;
    /**
     * Credit memo order currency code.
     *
     * @var string
     */
    protected $orderCurrencyCode;
    /**
     * Credit memo order ID.
     *
     * @var int
     */
    protected $orderId;
    /**
     * Credit memo shipping address ID.
     *
     * @var int
     */
    protected $shippingAddressId;
    /**
     * Credit memo shipping amount.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Credit memo shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Credit memo shipping including tax.
     *
     * @var float
     */
    protected $shippingInclTax;
    /**
     * Credit memo shipping tax amount.
     *
     * @var float
     */
    protected $shippingTaxAmount;
    /**
     * Credit memo state.
     *
     * @var int
     */
    protected $state;
    /**
     * Credit memo store currency code.
     *
     * @var string
     */
    protected $storeCurrencyCode;
    /**
     * Credit memo store ID.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Credit memo store-to-base rate.
     *
     * @var float
     */
    protected $storeToBaseRate;
    /**
     * Credit memo store-to-order rate.
     *
     * @var float
     */
    protected $storeToOrderRate;
    /**
     * Credit memo subtotal.
     *
     * @var float
     */
    protected $subtotal;
    /**
     * Credit memo subtotal including tax.
     *
     * @var float
     */
    protected $subtotalInclTax;
    /**
     * Credit memo tax amount.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Credit memo transaction ID.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * Credit memo updated-at timestamp.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Array of credit memo items.
     *
     * @var SalesDataCreditmemoItemInterface[]
     */
    protected $items;
    /**
     * Array of any credit memo comments. Otherwise, null.
     *
     * @var SalesDataCreditmemoCommentInterface[]
     */
    protected $comments;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @var SalesDataCreditmemoExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Credit memo adjustment.
     *
     * @return float
     */
    public function getAdjustment(): float
    {
        return $this->adjustment;
    }
    /**
     * Credit memo adjustment.
     *
     * @param float $adjustment
     *
     * @return self
     */
    public function setAdjustment(float $adjustment): self
    {
        $this->adjustment = $adjustment;
        return $this;
    }
    /**
     * Credit memo negative adjustment.
     *
     * @return float
     */
    public function getAdjustmentNegative(): float
    {
        return $this->adjustmentNegative;
    }
    /**
     * Credit memo negative adjustment.
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
     * Credit memo positive adjustment.
     *
     * @return float
     */
    public function getAdjustmentPositive(): float
    {
        return $this->adjustmentPositive;
    }
    /**
     * Credit memo positive adjustment.
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
     * Credit memo base adjustment.
     *
     * @return float
     */
    public function getBaseAdjustment(): float
    {
        return $this->baseAdjustment;
    }
    /**
     * Credit memo base adjustment.
     *
     * @param float $baseAdjustment
     *
     * @return self
     */
    public function setBaseAdjustment(float $baseAdjustment): self
    {
        $this->baseAdjustment = $baseAdjustment;
        return $this;
    }
    /**
     * Credit memo negative base adjustment.
     *
     * @return float
     */
    public function getBaseAdjustmentNegative(): float
    {
        return $this->baseAdjustmentNegative;
    }
    /**
     * Credit memo negative base adjustment.
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
     * Credit memo positive base adjustment.
     *
     * @return float
     */
    public function getBaseAdjustmentPositive(): float
    {
        return $this->baseAdjustmentPositive;
    }
    /**
     * Credit memo positive base adjustment.
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
     * Credit memo base currency code.
     *
     * @return string
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Credit memo base currency code.
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
     * Credit memo base discount amount.
     *
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Credit memo base discount amount.
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
     * Credit memo base grand total.
     *
     * @return float
     */
    public function getBaseGrandTotal(): float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Credit memo base grand total.
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
     * Credit memo base discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseDiscountTaxCompensationAmount(): float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Credit memo base discount tax compensation amount.
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
     * Credit memo base shipping amount.
     *
     * @return float
     */
    public function getBaseShippingAmount(): float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Credit memo base shipping amount.
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
     * Credit memo base shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getBaseShippingDiscountTaxCompensationAmnt(): float
    {
        return $this->baseShippingDiscountTaxCompensationAmnt;
    }
    /**
     * Credit memo base shipping discount tax compensation amount.
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
     * Credit memo base shipping including tax.
     *
     * @return float
     */
    public function getBaseShippingInclTax(): float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Credit memo base shipping including tax.
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
     * Credit memo base shipping tax amount.
     *
     * @return float
     */
    public function getBaseShippingTaxAmount(): float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Credit memo base shipping tax amount.
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
     * Credit memo base subtotal.
     *
     * @return float
     */
    public function getBaseSubtotal(): float
    {
        return $this->baseSubtotal;
    }
    /**
     * Credit memo base subtotal.
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
     * Credit memo base subtotal including tax.
     *
     * @return float
     */
    public function getBaseSubtotalInclTax(): float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Credit memo base subtotal including tax.
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
     * Credit memo base tax amount.
     *
     * @return float
     */
    public function getBaseTaxAmount(): float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Credit memo base tax amount.
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
     * Credit memo base-to-global rate.
     *
     * @return float
     */
    public function getBaseToGlobalRate(): float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Credit memo base-to-global rate.
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
     * Credit memo base-to-order rate.
     *
     * @return float
     */
    public function getBaseToOrderRate(): float
    {
        return $this->baseToOrderRate;
    }
    /**
     * Credit memo base-to-order rate.
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
     * Credit memo billing address ID.
     *
     * @return int
     */
    public function getBillingAddressId(): int
    {
        return $this->billingAddressId;
    }
    /**
     * Credit memo billing address ID.
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
     * Credit memo created-at timestamp.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Credit memo created-at timestamp.
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
     * Credit memo status.
     *
     * @return int
     */
    public function getCreditmemoStatus(): int
    {
        return $this->creditmemoStatus;
    }
    /**
     * Credit memo status.
     *
     * @param int $creditmemoStatus
     *
     * @return self
     */
    public function setCreditmemoStatus(int $creditmemoStatus): self
    {
        $this->creditmemoStatus = $creditmemoStatus;
        return $this;
    }
    /**
     * Credit memo discount amount.
     *
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discountAmount;
    }
    /**
     * Credit memo discount amount.
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
     * Credit memo discount description.
     *
     * @return string
     */
    public function getDiscountDescription(): string
    {
        return $this->discountDescription;
    }
    /**
     * Credit memo discount description.
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
     * Credit memo email sent flag value.
     *
     * @return int
     */
    public function getEmailSent(): int
    {
        return $this->emailSent;
    }
    /**
     * Credit memo email sent flag value.
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
     * Credit memo ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Credit memo ID.
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
     * Credit memo global currency code.
     *
     * @return string
     */
    public function getGlobalCurrencyCode(): string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Credit memo global currency code.
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
     * Credit memo grand total.
     *
     * @return float
     */
    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }
    /**
     * Credit memo grand total.
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
     * Credit memo discount tax compensation amount.
     *
     * @return float
     */
    public function getDiscountTaxCompensationAmount(): float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Credit memo discount tax compensation amount.
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
     * Credit memo increment ID.
     *
     * @return string
     */
    public function getIncrementId(): string
    {
        return $this->incrementId;
    }
    /**
     * Credit memo increment ID.
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
     * Credit memo invoice ID.
     *
     * @return int
     */
    public function getInvoiceId(): int
    {
        return $this->invoiceId;
    }
    /**
     * Credit memo invoice ID.
     *
     * @param int $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * Credit memo order currency code.
     *
     * @return string
     */
    public function getOrderCurrencyCode(): string
    {
        return $this->orderCurrencyCode;
    }
    /**
     * Credit memo order currency code.
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
     * Credit memo order ID.
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Credit memo order ID.
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
     * Credit memo shipping address ID.
     *
     * @return int
     */
    public function getShippingAddressId(): int
    {
        return $this->shippingAddressId;
    }
    /**
     * Credit memo shipping address ID.
     *
     * @param int $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(int $shippingAddressId): self
    {
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * Credit memo shipping amount.
     *
     * @return float
     */
    public function getShippingAmount(): float
    {
        return $this->shippingAmount;
    }
    /**
     * Credit memo shipping amount.
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
     * Credit memo shipping discount tax compensation amount.
     *
     * @return float
     */
    public function getShippingDiscountTaxCompensationAmount(): float
    {
        return $this->shippingDiscountTaxCompensationAmount;
    }
    /**
     * Credit memo shipping discount tax compensation amount.
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
     * Credit memo shipping including tax.
     *
     * @return float
     */
    public function getShippingInclTax(): float
    {
        return $this->shippingInclTax;
    }
    /**
     * Credit memo shipping including tax.
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
     * Credit memo shipping tax amount.
     *
     * @return float
     */
    public function getShippingTaxAmount(): float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Credit memo shipping tax amount.
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
     * Credit memo state.
     *
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }
    /**
     * Credit memo state.
     *
     * @param int $state
     *
     * @return self
     */
    public function setState(int $state): self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Credit memo store currency code.
     *
     * @return string
     */
    public function getStoreCurrencyCode(): string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Credit memo store currency code.
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
     * Credit memo store ID.
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Credit memo store ID.
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
     * Credit memo store-to-base rate.
     *
     * @return float
     */
    public function getStoreToBaseRate(): float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Credit memo store-to-base rate.
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
     * Credit memo store-to-order rate.
     *
     * @return float
     */
    public function getStoreToOrderRate(): float
    {
        return $this->storeToOrderRate;
    }
    /**
     * Credit memo store-to-order rate.
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
     * Credit memo subtotal.
     *
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }
    /**
     * Credit memo subtotal.
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
     * Credit memo subtotal including tax.
     *
     * @return float
     */
    public function getSubtotalInclTax(): float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Credit memo subtotal including tax.
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
     * Credit memo tax amount.
     *
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }
    /**
     * Credit memo tax amount.
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
     * Credit memo transaction ID.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * Credit memo transaction ID.
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Credit memo updated-at timestamp.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Credit memo updated-at timestamp.
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
     * Array of credit memo items.
     *
     * @return SalesDataCreditmemoItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Array of credit memo items.
     *
     * @param SalesDataCreditmemoItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Array of any credit memo comments. Otherwise, null.
     *
     * @return SalesDataCreditmemoCommentInterface[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }
    /**
     * Array of any credit memo comments. Otherwise, null.
     *
     * @param SalesDataCreditmemoCommentInterface[] $comments
     *
     * @return self
     */
    public function setComments(array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @return SalesDataCreditmemoExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataCreditmemoExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @param SalesDataCreditmemoExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataCreditmemoExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
