<?php

namespace Kiboko\Magento\v2_4\Model;

class QuoteDataCartInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $billingAddress;
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @var string
     */
    protected $convertedAt;
    /**
     * Cart creation date and time. Otherwise, null.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Interface CurrencyInterface
     *
     * @var QuoteDataCurrencyInterface
     */
    protected $currency;
    /**
     * Customer interface.
     *
     * @var CustomerDataCustomerInterface
     */
    protected $customer;
    /**
     * For guest customers, false for logged in customers
     *
     * @var bool
     */
    protected $customerIsGuest;
    /**
     * Notice text
     *
     * @var string
     */
    protected $customerNote;
    /**
     * Customer notification flag
     *
     * @var bool
     */
    protected $customerNoteNotify;
    /**
     * Customer tax class ID.
     *
     * @var int
     */
    protected $customerTaxClassId;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @var QuoteDataCartExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Cart/quote ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Active status flag value. Otherwise, null.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @var bool
     */
    protected $isVirtual;
    /**
     * Array of items. Otherwise, null.
     *
     * @var QuoteDataCartItemInterface[]
     */
    protected $items;
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @var int
     */
    protected $itemsCount;
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @var float
     */
    protected $itemsQty;
    /**
     * Original order ID. Otherwise, null.
     *
     * @var int
     */
    protected $origOrderId;
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @var string
     */
    protected $reservedOrderId;
    /**
     * Store identifier
     *
     * @var int
     */
    protected $storeId;
    /**
     * Cart last update date and time. Otherwise, null.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getBillingAddress(): QuoteDataAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(QuoteDataAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @return string
     */
    public function getConvertedAt(): string
    {
        return $this->convertedAt;
    }
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @param string $convertedAt
     *
     * @return self
     */
    public function setConvertedAt(string $convertedAt): self
    {
        $this->convertedAt = $convertedAt;
        return $this;
    }
    /**
     * Cart creation date and time. Otherwise, null.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Cart creation date and time. Otherwise, null.
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
     * Interface CurrencyInterface
     *
     * @return QuoteDataCurrencyInterface
     */
    public function getCurrency(): QuoteDataCurrencyInterface
    {
        return $this->currency;
    }
    /**
     * Interface CurrencyInterface
     *
     * @param QuoteDataCurrencyInterface $currency
     *
     * @return self
     */
    public function setCurrency(QuoteDataCurrencyInterface $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Customer interface.
     *
     * @return CustomerDataCustomerInterface
     */
    public function getCustomer(): CustomerDataCustomerInterface
    {
        return $this->customer;
    }
    /**
     * Customer interface.
     *
     * @param CustomerDataCustomerInterface $customer
     *
     * @return self
     */
    public function setCustomer(CustomerDataCustomerInterface $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * For guest customers, false for logged in customers
     *
     * @return bool
     */
    public function getCustomerIsGuest(): bool
    {
        return $this->customerIsGuest;
    }
    /**
     * For guest customers, false for logged in customers
     *
     * @param bool $customerIsGuest
     *
     * @return self
     */
    public function setCustomerIsGuest(bool $customerIsGuest): self
    {
        $this->customerIsGuest = $customerIsGuest;
        return $this;
    }
    /**
     * Notice text
     *
     * @return string
     */
    public function getCustomerNote(): string
    {
        return $this->customerNote;
    }
    /**
     * Notice text
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
     * Customer notification flag
     *
     * @return bool
     */
    public function getCustomerNoteNotify(): bool
    {
        return $this->customerNoteNotify;
    }
    /**
     * Customer notification flag
     *
     * @param bool $customerNoteNotify
     *
     * @return self
     */
    public function setCustomerNoteNotify(bool $customerNoteNotify): self
    {
        $this->customerNoteNotify = $customerNoteNotify;
        return $this;
    }
    /**
     * Customer tax class ID.
     *
     * @return int
     */
    public function getCustomerTaxClassId(): int
    {
        return $this->customerTaxClassId;
    }
    /**
     * Customer tax class ID.
     *
     * @param int $customerTaxClassId
     *
     * @return self
     */
    public function setCustomerTaxClassId(int $customerTaxClassId): self
    {
        $this->customerTaxClassId = $customerTaxClassId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @return QuoteDataCartExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataCartExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @param QuoteDataCartExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataCartExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Cart/quote ID.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Cart/quote ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Active status flag value. Otherwise, null.
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }
    /**
     * Active status flag value. Otherwise, null.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @return bool
     */
    public function getIsVirtual(): bool
    {
        return $this->isVirtual;
    }
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @param bool $isVirtual
     *
     * @return self
     */
    public function setIsVirtual(bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }
    /**
     * Array of items. Otherwise, null.
     *
     * @return QuoteDataCartItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Array of items. Otherwise, null.
     *
     * @param QuoteDataCartItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @return int
     */
    public function getItemsCount(): int
    {
        return $this->itemsCount;
    }
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @param int $itemsCount
     *
     * @return self
     */
    public function setItemsCount(int $itemsCount): self
    {
        $this->itemsCount = $itemsCount;
        return $this;
    }
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @return float
     */
    public function getItemsQty(): float
    {
        return $this->itemsQty;
    }
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @param float $itemsQty
     *
     * @return self
     */
    public function setItemsQty(float $itemsQty): self
    {
        $this->itemsQty = $itemsQty;
        return $this;
    }
    /**
     * Original order ID. Otherwise, null.
     *
     * @return int
     */
    public function getOrigOrderId(): int
    {
        return $this->origOrderId;
    }
    /**
     * Original order ID. Otherwise, null.
     *
     * @param int $origOrderId
     *
     * @return self
     */
    public function setOrigOrderId(int $origOrderId): self
    {
        $this->origOrderId = $origOrderId;
        return $this;
    }
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @return string
     */
    public function getReservedOrderId(): string
    {
        return $this->reservedOrderId;
    }
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @param string $reservedOrderId
     *
     * @return self
     */
    public function setReservedOrderId(string $reservedOrderId): self
    {
        $this->reservedOrderId = $reservedOrderId;
        return $this;
    }
    /**
     * Store identifier
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store identifier
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
     * Cart last update date and time. Otherwise, null.
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Cart last update date and time. Otherwise, null.
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
}
