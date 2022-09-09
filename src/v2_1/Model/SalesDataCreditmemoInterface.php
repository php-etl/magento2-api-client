<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataCreditmemoInterface
{
    /**
     * Credit memo adjustment.
     *
     * @var float|null
     */
    protected $adjustment;
    /**
     * Credit memo negative adjustment.
     *
     * @var float|null
     */
    protected $adjustmentNegative;
    /**
     * Credit memo positive adjustment.
     *
     * @var float|null
     */
    protected $adjustmentPositive;
    /**
     * Credit memo base adjustment.
     *
     * @var float|null
     */
    protected $baseAdjustment;
    /**
     * Credit memo negative base adjustment.
     *
     * @var float|null
     */
    protected $baseAdjustmentNegative;
    /**
     * Credit memo positive base adjustment.
     *
     * @var float|null
     */
    protected $baseAdjustmentPositive;
    /**
     * Credit memo base currency code.
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * Credit memo base discount amount.
     *
     * @var float|null
     */
    protected $baseDiscountAmount;
    /**
     * Credit memo base discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Credit memo base grand total.
     *
     * @var float|null
     */
    protected $baseGrandTotal;
    /**
     * Credit memo base shipping amount.
     *
     * @var float|null
     */
    protected $baseShippingAmount;
    /**
     * Credit memo base shipping discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseShippingDiscountTaxCompensationAmnt;
    /**
     * Credit memo base shipping including tax.
     *
     * @var float|null
     */
    protected $baseShippingInclTax;
    /**
     * Credit memo base shipping tax amount.
     *
     * @var float|null
     */
    protected $baseShippingTaxAmount;
    /**
     * Credit memo base subtotal.
     *
     * @var float|null
     */
    protected $baseSubtotal;
    /**
     * Credit memo base subtotal including tax.
     *
     * @var float|null
     */
    protected $baseSubtotalInclTax;
    /**
     * Credit memo base tax amount.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Credit memo base-to-global rate.
     *
     * @var float|null
     */
    protected $baseToGlobalRate;
    /**
     * Credit memo base-to-order rate.
     *
     * @var float|null
     */
    protected $baseToOrderRate;
    /**
     * Credit memo billing address ID.
     *
     * @var int|null
     */
    protected $billingAddressId;
    /**
     * Array of any credit memo comments. Otherwise, null.
     *
     * @var SalesDataCreditmemoCommentInterface[]|null
     */
    protected $comments;
    /**
     * Credit memo created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Credit memo status.
     *
     * @var int|null
     */
    protected $creditmemoStatus;
    /**
     * Credit memo discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Credit memo discount description.
     *
     * @var string|null
     */
    protected $discountDescription;
    /**
     * Credit memo discount tax compensation amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationAmount;
    /**
     * Credit memo email sent flag value.
     *
     * @var int|null
     */
    protected $emailSent;
    /**
     * Credit memo ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @var SalesDataCreditmemoExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Credit memo global currency code.
     *
     * @var string|null
     */
    protected $globalCurrencyCode;
    /**
     * Credit memo grand total.
     *
     * @var float|null
     */
    protected $grandTotal;
    /**
     * Credit memo increment ID.
     *
     * @var string|null
     */
    protected $incrementId;
    /**
     * Credit memo invoice ID.
     *
     * @var int|null
     */
    protected $invoiceId;
    /**
     * Array of credit memo items.
     *
     * @var SalesDataCreditmemoItemInterface[]|null
     */
    protected $items;
    /**
     * Credit memo order currency code.
     *
     * @var string|null
     */
    protected $orderCurrencyCode;
    /**
     * Credit memo order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Credit memo shipping address ID.
     *
     * @var int|null
     */
    protected $shippingAddressId;
    /**
     * Credit memo shipping amount.
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Credit memo shipping discount tax compensation amount.
     *
     * @var float|null
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Credit memo shipping including tax.
     *
     * @var float|null
     */
    protected $shippingInclTax;
    /**
     * Credit memo shipping tax amount.
     *
     * @var float|null
     */
    protected $shippingTaxAmount;
    /**
     * Credit memo state.
     *
     * @var int|null
     */
    protected $state;
    /**
     * Credit memo store currency code.
     *
     * @var string|null
     */
    protected $storeCurrencyCode;
    /**
     * Credit memo store ID.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Credit memo store-to-base rate.
     *
     * @var float|null
     */
    protected $storeToBaseRate;
    /**
     * Credit memo store-to-order rate.
     *
     * @var float|null
     */
    protected $storeToOrderRate;
    /**
     * Credit memo subtotal.
     *
     * @var float|null
     */
    protected $subtotal;
    /**
     * Credit memo subtotal including tax.
     *
     * @var float|null
     */
    protected $subtotalInclTax;
    /**
     * Credit memo tax amount.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Credit memo transaction ID.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * Credit memo updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Credit memo adjustment.
     *
     * @return float|null
     */
    public function getAdjustment(): ?float
    {
        return $this->adjustment;
    }
    /**
     * Credit memo adjustment.
     *
     * @param float|null $adjustment
     *
     * @return self
     */
    public function setAdjustment(?float $adjustment): self
    {
        $this->adjustment = $adjustment;
        return $this;
    }
    /**
     * Credit memo negative adjustment.
     *
     * @return float|null
     */
    public function getAdjustmentNegative(): ?float
    {
        return $this->adjustmentNegative;
    }
    /**
     * Credit memo negative adjustment.
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
     * Credit memo positive adjustment.
     *
     * @return float|null
     */
    public function getAdjustmentPositive(): ?float
    {
        return $this->adjustmentPositive;
    }
    /**
     * Credit memo positive adjustment.
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
     * Credit memo base adjustment.
     *
     * @return float|null
     */
    public function getBaseAdjustment(): ?float
    {
        return $this->baseAdjustment;
    }
    /**
     * Credit memo base adjustment.
     *
     * @param float|null $baseAdjustment
     *
     * @return self
     */
    public function setBaseAdjustment(?float $baseAdjustment): self
    {
        $this->baseAdjustment = $baseAdjustment;
        return $this;
    }
    /**
     * Credit memo negative base adjustment.
     *
     * @return float|null
     */
    public function getBaseAdjustmentNegative(): ?float
    {
        return $this->baseAdjustmentNegative;
    }
    /**
     * Credit memo negative base adjustment.
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
     * Credit memo positive base adjustment.
     *
     * @return float|null
     */
    public function getBaseAdjustmentPositive(): ?float
    {
        return $this->baseAdjustmentPositive;
    }
    /**
     * Credit memo positive base adjustment.
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
     * Credit memo base currency code.
     *
     * @return string|null
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * Credit memo base currency code.
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
     * Credit memo base discount amount.
     *
     * @return float|null
     */
    public function getBaseDiscountAmount(): ?float
    {
        return $this->baseDiscountAmount;
    }
    /**
     * Credit memo base discount amount.
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
     * Credit memo base discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseDiscountTaxCompensationAmount(): ?float
    {
        return $this->baseDiscountTaxCompensationAmount;
    }
    /**
     * Credit memo base discount tax compensation amount.
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
     * Credit memo base grand total.
     *
     * @return float|null
     */
    public function getBaseGrandTotal(): ?float
    {
        return $this->baseGrandTotal;
    }
    /**
     * Credit memo base grand total.
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
     * Credit memo base shipping amount.
     *
     * @return float|null
     */
    public function getBaseShippingAmount(): ?float
    {
        return $this->baseShippingAmount;
    }
    /**
     * Credit memo base shipping amount.
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
     * Credit memo base shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseShippingDiscountTaxCompensationAmnt(): ?float
    {
        return $this->baseShippingDiscountTaxCompensationAmnt;
    }
    /**
     * Credit memo base shipping discount tax compensation amount.
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
     * Credit memo base shipping including tax.
     *
     * @return float|null
     */
    public function getBaseShippingInclTax(): ?float
    {
        return $this->baseShippingInclTax;
    }
    /**
     * Credit memo base shipping including tax.
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
     * Credit memo base shipping tax amount.
     *
     * @return float|null
     */
    public function getBaseShippingTaxAmount(): ?float
    {
        return $this->baseShippingTaxAmount;
    }
    /**
     * Credit memo base shipping tax amount.
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
     * Credit memo base subtotal.
     *
     * @return float|null
     */
    public function getBaseSubtotal(): ?float
    {
        return $this->baseSubtotal;
    }
    /**
     * Credit memo base subtotal.
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
     * Credit memo base subtotal including tax.
     *
     * @return float|null
     */
    public function getBaseSubtotalInclTax(): ?float
    {
        return $this->baseSubtotalInclTax;
    }
    /**
     * Credit memo base subtotal including tax.
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
     * Credit memo base tax amount.
     *
     * @return float|null
     */
    public function getBaseTaxAmount(): ?float
    {
        return $this->baseTaxAmount;
    }
    /**
     * Credit memo base tax amount.
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
     * Credit memo base-to-global rate.
     *
     * @return float|null
     */
    public function getBaseToGlobalRate(): ?float
    {
        return $this->baseToGlobalRate;
    }
    /**
     * Credit memo base-to-global rate.
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
     * Credit memo base-to-order rate.
     *
     * @return float|null
     */
    public function getBaseToOrderRate(): ?float
    {
        return $this->baseToOrderRate;
    }
    /**
     * Credit memo base-to-order rate.
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
     * Credit memo billing address ID.
     *
     * @return int|null
     */
    public function getBillingAddressId(): ?int
    {
        return $this->billingAddressId;
    }
    /**
     * Credit memo billing address ID.
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
     * Array of any credit memo comments. Otherwise, null.
     *
     * @return SalesDataCreditmemoCommentInterface[]|null
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }
    /**
     * Array of any credit memo comments. Otherwise, null.
     *
     * @param SalesDataCreditmemoCommentInterface[]|null $comments
     *
     * @return self
     */
    public function setComments(?array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * Credit memo created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Credit memo created-at timestamp.
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
     * Credit memo status.
     *
     * @return int|null
     */
    public function getCreditmemoStatus(): ?int
    {
        return $this->creditmemoStatus;
    }
    /**
     * Credit memo status.
     *
     * @param int|null $creditmemoStatus
     *
     * @return self
     */
    public function setCreditmemoStatus(?int $creditmemoStatus): self
    {
        $this->creditmemoStatus = $creditmemoStatus;
        return $this;
    }
    /**
     * Credit memo discount amount.
     *
     * @return float|null
     */
    public function getDiscountAmount(): ?float
    {
        return $this->discountAmount;
    }
    /**
     * Credit memo discount amount.
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
     * Credit memo discount description.
     *
     * @return string|null
     */
    public function getDiscountDescription(): ?string
    {
        return $this->discountDescription;
    }
    /**
     * Credit memo discount description.
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
     * Credit memo discount tax compensation amount.
     *
     * @return float|null
     */
    public function getDiscountTaxCompensationAmount(): ?float
    {
        return $this->discountTaxCompensationAmount;
    }
    /**
     * Credit memo discount tax compensation amount.
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
     * Credit memo email sent flag value.
     *
     * @return int|null
     */
    public function getEmailSent(): ?int
    {
        return $this->emailSent;
    }
    /**
     * Credit memo email sent flag value.
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
     * Credit memo ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Credit memo ID.
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @return SalesDataCreditmemoExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataCreditmemoExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\CreditmemoInterface
     *
     * @param SalesDataCreditmemoExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataCreditmemoExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Credit memo global currency code.
     *
     * @return string|null
     */
    public function getGlobalCurrencyCode(): ?string
    {
        return $this->globalCurrencyCode;
    }
    /**
     * Credit memo global currency code.
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
     * Credit memo grand total.
     *
     * @return float|null
     */
    public function getGrandTotal(): ?float
    {
        return $this->grandTotal;
    }
    /**
     * Credit memo grand total.
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
     * Credit memo increment ID.
     *
     * @return string|null
     */
    public function getIncrementId(): ?string
    {
        return $this->incrementId;
    }
    /**
     * Credit memo increment ID.
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
     * Credit memo invoice ID.
     *
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Credit memo invoice ID.
     *
     * @param int|null $invoiceId
     *
     * @return self
     */
    public function setInvoiceId(?int $invoiceId): self
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }
    /**
     * Array of credit memo items.
     *
     * @return SalesDataCreditmemoItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Array of credit memo items.
     *
     * @param SalesDataCreditmemoItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Credit memo order currency code.
     *
     * @return string|null
     */
    public function getOrderCurrencyCode(): ?string
    {
        return $this->orderCurrencyCode;
    }
    /**
     * Credit memo order currency code.
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
     * Credit memo order ID.
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Credit memo order ID.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Credit memo shipping address ID.
     *
     * @return int|null
     */
    public function getShippingAddressId(): ?int
    {
        return $this->shippingAddressId;
    }
    /**
     * Credit memo shipping address ID.
     *
     * @param int|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?int $shippingAddressId): self
    {
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * Credit memo shipping amount.
     *
     * @return float|null
     */
    public function getShippingAmount(): ?float
    {
        return $this->shippingAmount;
    }
    /**
     * Credit memo shipping amount.
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
     * Credit memo shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getShippingDiscountTaxCompensationAmount(): ?float
    {
        return $this->shippingDiscountTaxCompensationAmount;
    }
    /**
     * Credit memo shipping discount tax compensation amount.
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
     * Credit memo shipping including tax.
     *
     * @return float|null
     */
    public function getShippingInclTax(): ?float
    {
        return $this->shippingInclTax;
    }
    /**
     * Credit memo shipping including tax.
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
     * Credit memo shipping tax amount.
     *
     * @return float|null
     */
    public function getShippingTaxAmount(): ?float
    {
        return $this->shippingTaxAmount;
    }
    /**
     * Credit memo shipping tax amount.
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
     * Credit memo state.
     *
     * @return int|null
     */
    public function getState(): ?int
    {
        return $this->state;
    }
    /**
     * Credit memo state.
     *
     * @param int|null $state
     *
     * @return self
     */
    public function setState(?int $state): self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Credit memo store currency code.
     *
     * @return string|null
     */
    public function getStoreCurrencyCode(): ?string
    {
        return $this->storeCurrencyCode;
    }
    /**
     * Credit memo store currency code.
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
     * Credit memo store ID.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Credit memo store ID.
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
     * Credit memo store-to-base rate.
     *
     * @return float|null
     */
    public function getStoreToBaseRate(): ?float
    {
        return $this->storeToBaseRate;
    }
    /**
     * Credit memo store-to-base rate.
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
     * Credit memo store-to-order rate.
     *
     * @return float|null
     */
    public function getStoreToOrderRate(): ?float
    {
        return $this->storeToOrderRate;
    }
    /**
     * Credit memo store-to-order rate.
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
     * Credit memo subtotal.
     *
     * @return float|null
     */
    public function getSubtotal(): ?float
    {
        return $this->subtotal;
    }
    /**
     * Credit memo subtotal.
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
     * Credit memo subtotal including tax.
     *
     * @return float|null
     */
    public function getSubtotalInclTax(): ?float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Credit memo subtotal including tax.
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
     * Credit memo tax amount.
     *
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Credit memo tax amount.
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
     * Credit memo transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Credit memo transaction ID.
     *
     * @param string|null $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Credit memo updated-at timestamp.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Credit memo updated-at timestamp.
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
}
