<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataCartInterface
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $billingAddress;
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @var string|null
     */
    protected $convertedAt;
    /**
     * Cart creation date and time. Otherwise, null.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Interface CurrencyInterface
     *
     * @var QuoteDataCurrencyInterface|null
     */
    protected $currency;
    /**
     * Customer interface.
     *
     * @var CustomerDataCustomerInterface|null
     */
    protected $customer;
    /**
     * For guest customers, false for logged in customers
     *
     * @var bool|null
     */
    protected $customerIsGuest;
    /**
     * Notice text
     *
     * @var string|null
     */
    protected $customerNote;
    /**
     * Customer notification flag
     *
     * @var bool|null
     */
    protected $customerNoteNotify;
    /**
     * Customer tax class ID.
     *
     * @var int|null
     */
    protected $customerTaxClassId;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @var QuoteDataCartExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Cart/quote ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Active status flag value. Otherwise, null.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @var bool|null
     */
    protected $isVirtual;
    /**
     * Array of items. Otherwise, null.
     *
     * @var QuoteDataCartItemInterface[]|null
     */
    protected $items;
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @var int|null
     */
    protected $itemsCount;
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @var float|null
     */
    protected $itemsQty;
    /**
     * Original order ID. Otherwise, null.
     *
     * @var int|null
     */
    protected $origOrderId;
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @var string|null
     */
    protected $reservedOrderId;
    /**
     * Store identifier
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Cart last update date and time. Otherwise, null.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getBillingAddress(): ?QuoteDataAddressInterface
    {
        return $this->billingAddress;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface|null $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(?QuoteDataAddressInterface $billingAddress): self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @return string|null
     */
    public function getConvertedAt(): ?string
    {
        return $this->convertedAt;
    }
    /**
     * Cart conversion date and time. Otherwise, null.
     *
     * @param string|null $convertedAt
     *
     * @return self
     */
    public function setConvertedAt(?string $convertedAt): self
    {
        $this->convertedAt = $convertedAt;
        return $this;
    }
    /**
     * Cart creation date and time. Otherwise, null.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Cart creation date and time. Otherwise, null.
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
     * Interface CurrencyInterface
     *
     * @return QuoteDataCurrencyInterface|null
     */
    public function getCurrency(): ?QuoteDataCurrencyInterface
    {
        return $this->currency;
    }
    /**
     * Interface CurrencyInterface
     *
     * @param QuoteDataCurrencyInterface|null $currency
     *
     * @return self
     */
    public function setCurrency(?QuoteDataCurrencyInterface $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     * Customer interface.
     *
     * @return CustomerDataCustomerInterface|null
     */
    public function getCustomer(): ?CustomerDataCustomerInterface
    {
        return $this->customer;
    }
    /**
     * Customer interface.
     *
     * @param CustomerDataCustomerInterface|null $customer
     *
     * @return self
     */
    public function setCustomer(?CustomerDataCustomerInterface $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * For guest customers, false for logged in customers
     *
     * @return bool|null
     */
    public function getCustomerIsGuest(): ?bool
    {
        return $this->customerIsGuest;
    }
    /**
     * For guest customers, false for logged in customers
     *
     * @param bool|null $customerIsGuest
     *
     * @return self
     */
    public function setCustomerIsGuest(?bool $customerIsGuest): self
    {
        $this->customerIsGuest = $customerIsGuest;
        return $this;
    }
    /**
     * Notice text
     *
     * @return string|null
     */
    public function getCustomerNote(): ?string
    {
        return $this->customerNote;
    }
    /**
     * Notice text
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
     * Customer notification flag
     *
     * @return bool|null
     */
    public function getCustomerNoteNotify(): ?bool
    {
        return $this->customerNoteNotify;
    }
    /**
     * Customer notification flag
     *
     * @param bool|null $customerNoteNotify
     *
     * @return self
     */
    public function setCustomerNoteNotify(?bool $customerNoteNotify): self
    {
        $this->customerNoteNotify = $customerNoteNotify;
        return $this;
    }
    /**
     * Customer tax class ID.
     *
     * @return int|null
     */
    public function getCustomerTaxClassId(): ?int
    {
        return $this->customerTaxClassId;
    }
    /**
     * Customer tax class ID.
     *
     * @param int|null $customerTaxClassId
     *
     * @return self
     */
    public function setCustomerTaxClassId(?int $customerTaxClassId): self
    {
        $this->customerTaxClassId = $customerTaxClassId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @return QuoteDataCartExtensionInterface|null
     */
    public function getExtensionAttributes(): ?QuoteDataCartExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
     *
     * @param QuoteDataCartExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataCartExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Cart/quote ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Cart/quote ID.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Active status flag value. Otherwise, null.
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Active status flag value. Otherwise, null.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @return bool|null
     */
    public function getIsVirtual(): ?bool
    {
        return $this->isVirtual;
    }
    /**
     * Virtual flag value. Otherwise, null.
     *
     * @param bool|null $isVirtual
     *
     * @return self
     */
    public function setIsVirtual(?bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }
    /**
     * Array of items. Otherwise, null.
     *
     * @return QuoteDataCartItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Array of items. Otherwise, null.
     *
     * @param QuoteDataCartItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @return int|null
     */
    public function getItemsCount(): ?int
    {
        return $this->itemsCount;
    }
    /**
     * Number of different items or products in the cart. Otherwise, null.
     *
     * @param int|null $itemsCount
     *
     * @return self
     */
    public function setItemsCount(?int $itemsCount): self
    {
        $this->itemsCount = $itemsCount;
        return $this;
    }
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @return float|null
     */
    public function getItemsQty(): ?float
    {
        return $this->itemsQty;
    }
    /**
     * Total quantity of all cart items. Otherwise, null.
     *
     * @param float|null $itemsQty
     *
     * @return self
     */
    public function setItemsQty(?float $itemsQty): self
    {
        $this->itemsQty = $itemsQty;
        return $this;
    }
    /**
     * Original order ID. Otherwise, null.
     *
     * @return int|null
     */
    public function getOrigOrderId(): ?int
    {
        return $this->origOrderId;
    }
    /**
     * Original order ID. Otherwise, null.
     *
     * @param int|null $origOrderId
     *
     * @return self
     */
    public function setOrigOrderId(?int $origOrderId): self
    {
        $this->origOrderId = $origOrderId;
        return $this;
    }
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @return string|null
     */
    public function getReservedOrderId(): ?string
    {
        return $this->reservedOrderId;
    }
    /**
     * Reserved order ID. Otherwise, null.
     *
     * @param string|null $reservedOrderId
     *
     * @return self
     */
    public function setReservedOrderId(?string $reservedOrderId): self
    {
        $this->reservedOrderId = $reservedOrderId;
        return $this;
    }
    /**
     * Store identifier
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store identifier
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
     * Cart last update date and time. Otherwise, null.
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Cart last update date and time. Otherwise, null.
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
