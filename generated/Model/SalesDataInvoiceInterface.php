<?php

namespace Kiboko\Magento\Model;

class SalesDataInvoiceInterface
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
     * Base grand total.
     *
     * @var float|null
     */
    protected $baseGrandTotal;
    /**
     * Base discount tax compensation amount.
     *
     * @var float|null
     */
    protected $baseDiscountTaxCompensationAmount;
    /**
     * Base shipping amount.
     *
     * @var float|null
     */
    protected $baseShippingAmount;
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
     * Base shipping tax amount.
     *
     * @var float|null
     */
    protected $baseShippingTaxAmount;
    /**
     * Base subtotal.
     *
     * @var float|null
     */
    protected $baseSubtotal;
    /**
     * Base subtotal including tax.
     *
     * @var float|null
     */
    protected $baseSubtotalInclTax;
    /**
     * Base tax amount.
     *
     * @var float|null
     */
    protected $baseTaxAmount;
    /**
     * Base total refunded.
     *
     * @var float|null
     */
    protected $baseTotalRefunded;
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
     * Billing address ID.
     *
     * @var int|null
     */
    protected $billingAddressId;
    /**
     * Can void flag value.
     *
     * @var int|null
     */
    protected $canVoidFlag;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Discount amount.
     *
     * @var float|null
     */
    protected $discountAmount;
    /**
     * Discount description.
     *
     * @var string|null
     */
    protected $discountDescription;
    /**
     * Email-sent flag value.
     *
     * @var int|null
     */
    protected $emailSent;
    /**
     * Invoice ID.
     *
     * @var int|null
     */
    protected $entityId;
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
     * Discount tax compensation amount.
     *
     * @var float|null
     */
    protected $discountTaxCompensationAmount;
    /**
     * Increment ID.
     *
     * @var string|null
     */
    protected $incrementId;
    /**
     * Is-used-for-refund flag value.
     *
     * @var int|null
     */
    protected $isUsedForRefund;
    /**
     * Order currency code.
     *
     * @var string|null
     */
    protected $orderCurrencyCode;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Shipping address ID.
     *
     * @var int|null
     */
    protected $shippingAddressId;
    /**
     * Shipping amount.
     *
     * @var float|null
     */
    protected $shippingAmount;
    /**
     * Shipping discount tax compensation amount.
     *
     * @var float|null
     */
    protected $shippingDiscountTaxCompensationAmount;
    /**
     * Shipping including tax.
     *
     * @var float|null
     */
    protected $shippingInclTax;
    /**
     * Shipping tax amount.
     *
     * @var float|null
     */
    protected $shippingTaxAmount;
    /**
     * State.
     *
     * @var int|null
     */
    protected $state;
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
     * Subtotal including tax.
     *
     * @var float|null
     */
    protected $subtotalInclTax;
    /**
     * Tax amount.
     *
     * @var float|null
     */
    protected $taxAmount;
    /**
     * Total quantity.
     *
     * @var float|null
     */
    protected $totalQty;
    /**
     * Transaction ID.
     *
     * @var string|null
     */
    protected $transactionId;
    /**
     * Updated-at timestamp.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Array of invoice items.
     *
     * @var SalesDataInvoiceItemInterface[]|null
     */
    protected $items;
    /**
     * Array of any invoice comments. Otherwise, null.
     *
     * @var SalesDataInvoiceCommentInterface[]|null
     */
    protected $comments;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Base currency code.
     *
     * @return string|null
     */
    public function getBaseCurrencyCode() : ?string
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
    public function setBaseCurrencyCode(?string $baseCurrencyCode) : self
    {
        $this->initialized['baseCurrencyCode'] = true;
        $this->baseCurrencyCode = $baseCurrencyCode;
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
     * Base grand total.
     *
     * @return float|null
     */
    public function getBaseGrandTotal() : ?float
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
    public function setBaseGrandTotal(?float $baseGrandTotal) : self
    {
        $this->initialized['baseGrandTotal'] = true;
        $this->baseGrandTotal = $baseGrandTotal;
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
     * Base shipping amount.
     *
     * @return float|null
     */
    public function getBaseShippingAmount() : ?float
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
    public function setBaseShippingAmount(?float $baseShippingAmount) : self
    {
        $this->initialized['baseShippingAmount'] = true;
        $this->baseShippingAmount = $baseShippingAmount;
        return $this;
    }
    /**
     * Base shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getBaseShippingDiscountTaxCompensationAmnt() : ?float
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
    public function setBaseShippingDiscountTaxCompensationAmnt(?float $baseShippingDiscountTaxCompensationAmnt) : self
    {
        $this->initialized['baseShippingDiscountTaxCompensationAmnt'] = true;
        $this->baseShippingDiscountTaxCompensationAmnt = $baseShippingDiscountTaxCompensationAmnt;
        return $this;
    }
    /**
     * Base shipping including tax.
     *
     * @return float|null
     */
    public function getBaseShippingInclTax() : ?float
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
    public function setBaseShippingInclTax(?float $baseShippingInclTax) : self
    {
        $this->initialized['baseShippingInclTax'] = true;
        $this->baseShippingInclTax = $baseShippingInclTax;
        return $this;
    }
    /**
     * Base shipping tax amount.
     *
     * @return float|null
     */
    public function getBaseShippingTaxAmount() : ?float
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
    public function setBaseShippingTaxAmount(?float $baseShippingTaxAmount) : self
    {
        $this->initialized['baseShippingTaxAmount'] = true;
        $this->baseShippingTaxAmount = $baseShippingTaxAmount;
        return $this;
    }
    /**
     * Base subtotal.
     *
     * @return float|null
     */
    public function getBaseSubtotal() : ?float
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
    public function setBaseSubtotal(?float $baseSubtotal) : self
    {
        $this->initialized['baseSubtotal'] = true;
        $this->baseSubtotal = $baseSubtotal;
        return $this;
    }
    /**
     * Base subtotal including tax.
     *
     * @return float|null
     */
    public function getBaseSubtotalInclTax() : ?float
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
    public function setBaseSubtotalInclTax(?float $baseSubtotalInclTax) : self
    {
        $this->initialized['baseSubtotalInclTax'] = true;
        $this->baseSubtotalInclTax = $baseSubtotalInclTax;
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
     * Base total refunded.
     *
     * @return float|null
     */
    public function getBaseTotalRefunded() : ?float
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
    public function setBaseTotalRefunded(?float $baseTotalRefunded) : self
    {
        $this->initialized['baseTotalRefunded'] = true;
        $this->baseTotalRefunded = $baseTotalRefunded;
        return $this;
    }
    /**
     * Base-to-global rate.
     *
     * @return float|null
     */
    public function getBaseToGlobalRate() : ?float
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
    public function setBaseToGlobalRate(?float $baseToGlobalRate) : self
    {
        $this->initialized['baseToGlobalRate'] = true;
        $this->baseToGlobalRate = $baseToGlobalRate;
        return $this;
    }
    /**
     * Base-to-order rate.
     *
     * @return float|null
     */
    public function getBaseToOrderRate() : ?float
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
    public function setBaseToOrderRate(?float $baseToOrderRate) : self
    {
        $this->initialized['baseToOrderRate'] = true;
        $this->baseToOrderRate = $baseToOrderRate;
        return $this;
    }
    /**
     * Billing address ID.
     *
     * @return int|null
     */
    public function getBillingAddressId() : ?int
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
    public function setBillingAddressId(?int $billingAddressId) : self
    {
        $this->initialized['billingAddressId'] = true;
        $this->billingAddressId = $billingAddressId;
        return $this;
    }
    /**
     * Can void flag value.
     *
     * @return int|null
     */
    public function getCanVoidFlag() : ?int
    {
        return $this->canVoidFlag;
    }
    /**
     * Can void flag value.
     *
     * @param int|null $canVoidFlag
     *
     * @return self
     */
    public function setCanVoidFlag(?int $canVoidFlag) : self
    {
        $this->initialized['canVoidFlag'] = true;
        $this->canVoidFlag = $canVoidFlag;
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
     * Discount description.
     *
     * @return string|null
     */
    public function getDiscountDescription() : ?string
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
    public function setDiscountDescription(?string $discountDescription) : self
    {
        $this->initialized['discountDescription'] = true;
        $this->discountDescription = $discountDescription;
        return $this;
    }
    /**
     * Email-sent flag value.
     *
     * @return int|null
     */
    public function getEmailSent() : ?int
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
    public function setEmailSent(?int $emailSent) : self
    {
        $this->initialized['emailSent'] = true;
        $this->emailSent = $emailSent;
        return $this;
    }
    /**
     * Invoice ID.
     *
     * @return int|null
     */
    public function getEntityId() : ?int
    {
        return $this->entityId;
    }
    /**
     * Invoice ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Global currency code.
     *
     * @return string|null
     */
    public function getGlobalCurrencyCode() : ?string
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
    public function setGlobalCurrencyCode(?string $globalCurrencyCode) : self
    {
        $this->initialized['globalCurrencyCode'] = true;
        $this->globalCurrencyCode = $globalCurrencyCode;
        return $this;
    }
    /**
     * Grand total.
     *
     * @return float|null
     */
    public function getGrandTotal() : ?float
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
    public function setGrandTotal(?float $grandTotal) : self
    {
        $this->initialized['grandTotal'] = true;
        $this->grandTotal = $grandTotal;
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
     * Increment ID.
     *
     * @return string|null
     */
    public function getIncrementId() : ?string
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
    public function setIncrementId(?string $incrementId) : self
    {
        $this->initialized['incrementId'] = true;
        $this->incrementId = $incrementId;
        return $this;
    }
    /**
     * Is-used-for-refund flag value.
     *
     * @return int|null
     */
    public function getIsUsedForRefund() : ?int
    {
        return $this->isUsedForRefund;
    }
    /**
     * Is-used-for-refund flag value.
     *
     * @param int|null $isUsedForRefund
     *
     * @return self
     */
    public function setIsUsedForRefund(?int $isUsedForRefund) : self
    {
        $this->initialized['isUsedForRefund'] = true;
        $this->isUsedForRefund = $isUsedForRefund;
        return $this;
    }
    /**
     * Order currency code.
     *
     * @return string|null
     */
    public function getOrderCurrencyCode() : ?string
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
    public function setOrderCurrencyCode(?string $orderCurrencyCode) : self
    {
        $this->initialized['orderCurrencyCode'] = true;
        $this->orderCurrencyCode = $orderCurrencyCode;
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
     * Shipping address ID.
     *
     * @return int|null
     */
    public function getShippingAddressId() : ?int
    {
        return $this->shippingAddressId;
    }
    /**
     * Shipping address ID.
     *
     * @param int|null $shippingAddressId
     *
     * @return self
     */
    public function setShippingAddressId(?int $shippingAddressId) : self
    {
        $this->initialized['shippingAddressId'] = true;
        $this->shippingAddressId = $shippingAddressId;
        return $this;
    }
    /**
     * Shipping amount.
     *
     * @return float|null
     */
    public function getShippingAmount() : ?float
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
    public function setShippingAmount(?float $shippingAmount) : self
    {
        $this->initialized['shippingAmount'] = true;
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Shipping discount tax compensation amount.
     *
     * @return float|null
     */
    public function getShippingDiscountTaxCompensationAmount() : ?float
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
    public function setShippingDiscountTaxCompensationAmount(?float $shippingDiscountTaxCompensationAmount) : self
    {
        $this->initialized['shippingDiscountTaxCompensationAmount'] = true;
        $this->shippingDiscountTaxCompensationAmount = $shippingDiscountTaxCompensationAmount;
        return $this;
    }
    /**
     * Shipping including tax.
     *
     * @return float|null
     */
    public function getShippingInclTax() : ?float
    {
        return $this->shippingInclTax;
    }
    /**
     * Shipping including tax.
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
     * Shipping tax amount.
     *
     * @return float|null
     */
    public function getShippingTaxAmount() : ?float
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
    public function setShippingTaxAmount(?float $shippingTaxAmount) : self
    {
        $this->initialized['shippingTaxAmount'] = true;
        $this->shippingTaxAmount = $shippingTaxAmount;
        return $this;
    }
    /**
     * State.
     *
     * @return int|null
     */
    public function getState() : ?int
    {
        return $this->state;
    }
    /**
     * State.
     *
     * @param int|null $state
     *
     * @return self
     */
    public function setState(?int $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Store currency code.
     *
     * @return string|null
     */
    public function getStoreCurrencyCode() : ?string
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
    public function setStoreCurrencyCode(?string $storeCurrencyCode) : self
    {
        $this->initialized['storeCurrencyCode'] = true;
        $this->storeCurrencyCode = $storeCurrencyCode;
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
     * Store-to-base rate.
     *
     * @return float|null
     */
    public function getStoreToBaseRate() : ?float
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
    public function setStoreToBaseRate(?float $storeToBaseRate) : self
    {
        $this->initialized['storeToBaseRate'] = true;
        $this->storeToBaseRate = $storeToBaseRate;
        return $this;
    }
    /**
     * Store-to-order rate.
     *
     * @return float|null
     */
    public function getStoreToOrderRate() : ?float
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
    public function setStoreToOrderRate(?float $storeToOrderRate) : self
    {
        $this->initialized['storeToOrderRate'] = true;
        $this->storeToOrderRate = $storeToOrderRate;
        return $this;
    }
    /**
     * Subtotal.
     *
     * @return float|null
     */
    public function getSubtotal() : ?float
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
    public function setSubtotal(?float $subtotal) : self
    {
        $this->initialized['subtotal'] = true;
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Subtotal including tax.
     *
     * @return float|null
     */
    public function getSubtotalInclTax() : ?float
    {
        return $this->subtotalInclTax;
    }
    /**
     * Subtotal including tax.
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
     * Total quantity.
     *
     * @return float|null
     */
    public function getTotalQty() : ?float
    {
        return $this->totalQty;
    }
    /**
     * Total quantity.
     *
     * @param float|null $totalQty
     *
     * @return self
     */
    public function setTotalQty(?float $totalQty) : self
    {
        $this->initialized['totalQty'] = true;
        $this->totalQty = $totalQty;
        return $this;
    }
    /**
     * Transaction ID.
     *
     * @return string|null
     */
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    /**
     * Transaction ID.
     *
     * @param string|null $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId) : self
    {
        $this->initialized['transactionId'] = true;
        $this->transactionId = $transactionId;
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
     * Array of invoice items.
     *
     * @return SalesDataInvoiceItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Array of invoice items.
     *
     * @param SalesDataInvoiceItemInterface[]|null $items
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
     * Array of any invoice comments. Otherwise, null.
     *
     * @return SalesDataInvoiceCommentInterface[]|null
     */
    public function getComments() : ?array
    {
        return $this->comments;
    }
    /**
     * Array of any invoice comments. Otherwise, null.
     *
     * @param SalesDataInvoiceCommentInterface[]|null $comments
     *
     * @return self
     */
    public function setComments(?array $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}