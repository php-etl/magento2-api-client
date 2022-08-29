<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataInvoiceInterface
{
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
     * Base grand total.
     *
     * @var float
     */
    protected $baseGrandTotal;
    /**
     * Base discount tax compensation amount.
     *
     * @var float
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base shipping amount.
     *
     * @var float
     */
    protected $baseShippingAmount;
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
     * Base shipping tax amount.
     *
     * @var float
     */
    protected $baseShippingTaxAmount;
    /**
     * Base subtotal.
     *
     * @var float
     */
    protected $baseSubtotal;
    /**
     * Base subtotal including tax.
     *
     * @var float
     */
    protected $baseSubtotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float
     */
    protected $baseTaxAmount;
    /**
     * Base total refunded.
     *
     * @var float
     */
    protected $baseTotalRefunded;
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
     * Billing address ID.
     *
     * @var int
     */
    protected $billingAddressId;
    /**
     * Can void flag value.
     *
     * @var int
     */
    protected $canVoidFlag;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Discount amount.
     *
     * @var float
     */
    protected $discountAmount;
    /**
     * Discount description.
     *
     * @var string
     */
    protected $discountDescription;
    /**
     * Email-sent flag value.
     *
     * @var int
     */
    protected $emailSent;
    /**
     * Invoice ID.
     *
     * @var int
     */
    protected $entityId;
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
     * Discount tax compensation amount.
     *
     * @var float
     */
    protected $discountTaxCompensationAmount;
    /**
     * Increment ID.
     *
     * @var string
     */
    protected $incrementId;
    /**
     * Is-used-for-refund flag value.
     *
     * @var int
     */
    protected $isUsedForRefund;
    /**
     * Order currency code.
     *
     * @var string
     */
    protected $orderCurrencyCode;
    /**
     * Order ID.
     *
     * @var int
     */
    protected $orderId;
    /**
     * Shipping address ID.
     *
     * @var int
     */
    protected $shippingAddressId;
    /**
     * Shipping amount.
     *
     * @var float
     */
    protected $shippingAmount;
    /**
     * Shipping discount tax compensation amount.
     *
     * @var float
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Shipping including tax.
     *
     * @var float
     */
    protected $shippingInclTax;
    /**
     * Shipping tax amount.
     *
     * @var float
     */
    protected $shippingTaxAmount;
    /**
     * State.
     *
     * @var int
     */
    protected $state;
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
     * Subtotal including tax.
     *
     * @var float
     */
    protected $subtotalInclTax;
    /**
     * Tax amount.
     *
     * @var float
     */
    protected $taxAmount;
    /**
     * Total quantity.
     *
     * @var float
     */
    protected $totalQty;
    /**
     * Transaction ID.
     *
     * @var string
     */
    protected $transactionId;
    /**
     * Updated-at timestamp.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Array of invoice items.
     *
     * @var SalesDataInvoiceItemInterface[]
     */
    protected $items;
    /**
     * Array of any invoice comments. Otherwise, null.
     *
     * @var SalesDataInvoiceCommentInterface[]
     */
    protected $comments;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @var SalesDataInvoiceExtensionInterface
     */
    protected $extensionAttributes;
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
     * Can void flag value.
     *
     * @return int
     */
    public function getCanVoidFlag(): int
    {
        return $this->canVoidFlag;
    }
    /**
     * Can void flag value.
     *
     * @param int $canVoidFlag
     *
     * @return self
     */
    public function setCanVoidFlag(int $canVoidFlag): self
    {
        $this->canVoidFlag = $canVoidFlag;
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
     * Invoice ID.
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     * Invoice ID.
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
     * Is-used-for-refund flag value.
     *
     * @return int
     */
    public function getIsUsedForRefund(): int
    {
        return $this->isUsedForRefund;
    }
    /**
     * Is-used-for-refund flag value.
     *
     * @param int $isUsedForRefund
     *
     * @return self
     */
    public function setIsUsedForRefund(int $isUsedForRefund): self
    {
        $this->isUsedForRefund = $isUsedForRefund;
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
     * Shipping address ID.
     *
     * @return int
     */
    public function getShippingAddressId(): int
    {
        return $this->shippingAddressId;
    }
    /**
     * Shipping address ID.
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
     * Shipping including tax.
     *
     * @return float
     */
    public function getShippingInclTax(): float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax.
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
     * State.
     *
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }
    /**
     * State.
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
     * Subtotal including tax.
     *
     * @return float
     */
    public function getSubtotalInclTax(): float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax.
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
     * Total quantity.
     *
     * @return float
     */
    public function getTotalQty(): float
    {
        return $this->totalQty;
    }
    /**
     * Total quantity.
     *
     * @param float $totalQty
     *
     * @return self
     */
    public function setTotalQty(float $totalQty): self
    {
        $this->totalQty = $totalQty;
        return $this;
    }
    /**
     * Transaction ID.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }
    /**
     * Transaction ID.
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
     * Array of invoice items.
     *
     * @return SalesDataInvoiceItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Array of invoice items.
     *
     * @param SalesDataInvoiceItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Array of any invoice comments. Otherwise, null.
     *
     * @return SalesDataInvoiceCommentInterface[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }
    /**
     * Array of any invoice comments. Otherwise, null.
     *
     * @param SalesDataInvoiceCommentInterface[] $comments
     *
     * @return self
     */
    public function setComments(array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @return SalesDataInvoiceExtensionInterface
     */
    public function getExtensionAttributes(): SalesDataInvoiceExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @param SalesDataInvoiceExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataInvoiceExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
