<?php

namespace Kiboko\Magento\v2_3\Model;

class NegotiableQuoteDataNegotiableQuoteInterface
{
    /**
     * Negotiable quote ID.
     *
     * @var int
     */
    protected $quoteId;
    /**
     * Is regular quote.
     *
     * @var bool
     */
    protected $isRegularQuote;
    /**
     * Negotiable quote status.
     *
     * @var string
     */
    protected $status;
    /**
     * Negotiated price type.
     *
     * @var int
     */
    protected $negotiatedPriceType;
    /**
     * Negotiated price value.
     *
     * @var float
     */
    protected $negotiatedPriceValue;
    /**
     * Proposed shipping price.
     *
     * @var float
     */
    protected $shippingPrice;
    /**
     * Negotiable quote name.
     *
     * @var string
     */
    protected $quoteName;
    /**
     * Expiration period.
     *
     * @var string
     */
    protected $expirationPeriod;
    /**
     * Email notification status.
     *
     * @var int
     */
    protected $emailNotificationStatus;
    /**
     * Has unconfirmed changes.
     *
     * @var bool
     */
    protected $hasUnconfirmedChanges;
    /**
     * Shipping tax changes.
     *
     * @var bool
     */
    protected $isShippingTaxChanged;
    /**
     * Customer price changes.
     *
     * @var bool
     */
    protected $isCustomerPriceChanged;
    /**
     * Quote notifications.
     *
     * @var int
     */
    protected $notifications;
    /**
     * Quote rules.
     *
     * @var string
     */
    protected $appliedRuleIds;
    /**
     * Is address draft.
     *
     * @var bool
     */
    protected $isAddressDraft;
    /**
     * Deleted products sku.
     *
     * @var string
     */
    protected $deletedSku;
    /**
     * Quote creator id.
     *
     * @var int
     */
    protected $creatorId;
    /**
     * Quote creator type.
     *
     * @var int
     */
    protected $creatorType;
    /**
     * Quote original total price.
     *
     * @var float
     */
    protected $originalTotalPrice;
    /**
     * Quote original total price in base currency.
     *
     * @var float
     */
    protected $baseOriginalTotalPrice;
    /**
     * Quote negotiated total price.
     *
     * @var float
     */
    protected $negotiatedTotalPrice;
    /**
     * Quote negotiated total price in base currency.
     *
     * @var float
     */
    protected $baseNegotiatedTotalPrice;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Negotiable quote ID.
     *
     * @return int
     */
    public function getQuoteId(): int
    {
        return $this->quoteId;
    }
    /**
     * Negotiable quote ID.
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
     * Is regular quote.
     *
     * @return bool
     */
    public function getIsRegularQuote(): bool
    {
        return $this->isRegularQuote;
    }
    /**
     * Is regular quote.
     *
     * @param bool $isRegularQuote
     *
     * @return self
     */
    public function setIsRegularQuote(bool $isRegularQuote): self
    {
        $this->isRegularQuote = $isRegularQuote;
        return $this;
    }
    /**
     * Negotiable quote status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Negotiable quote status.
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
     * Negotiated price type.
     *
     * @return int
     */
    public function getNegotiatedPriceType(): int
    {
        return $this->negotiatedPriceType;
    }
    /**
     * Negotiated price type.
     *
     * @param int $negotiatedPriceType
     *
     * @return self
     */
    public function setNegotiatedPriceType(int $negotiatedPriceType): self
    {
        $this->negotiatedPriceType = $negotiatedPriceType;
        return $this;
    }
    /**
     * Negotiated price value.
     *
     * @return float
     */
    public function getNegotiatedPriceValue(): float
    {
        return $this->negotiatedPriceValue;
    }
    /**
     * Negotiated price value.
     *
     * @param float $negotiatedPriceValue
     *
     * @return self
     */
    public function setNegotiatedPriceValue(float $negotiatedPriceValue): self
    {
        $this->negotiatedPriceValue = $negotiatedPriceValue;
        return $this;
    }
    /**
     * Proposed shipping price.
     *
     * @return float
     */
    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }
    /**
     * Proposed shipping price.
     *
     * @param float $shippingPrice
     *
     * @return self
     */
    public function setShippingPrice(float $shippingPrice): self
    {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }
    /**
     * Negotiable quote name.
     *
     * @return string
     */
    public function getQuoteName(): string
    {
        return $this->quoteName;
    }
    /**
     * Negotiable quote name.
     *
     * @param string $quoteName
     *
     * @return self
     */
    public function setQuoteName(string $quoteName): self
    {
        $this->quoteName = $quoteName;
        return $this;
    }
    /**
     * Expiration period.
     *
     * @return string
     */
    public function getExpirationPeriod(): string
    {
        return $this->expirationPeriod;
    }
    /**
     * Expiration period.
     *
     * @param string $expirationPeriod
     *
     * @return self
     */
    public function setExpirationPeriod(string $expirationPeriod): self
    {
        $this->expirationPeriod = $expirationPeriod;
        return $this;
    }
    /**
     * Email notification status.
     *
     * @return int
     */
    public function getEmailNotificationStatus(): int
    {
        return $this->emailNotificationStatus;
    }
    /**
     * Email notification status.
     *
     * @param int $emailNotificationStatus
     *
     * @return self
     */
    public function setEmailNotificationStatus(int $emailNotificationStatus): self
    {
        $this->emailNotificationStatus = $emailNotificationStatus;
        return $this;
    }
    /**
     * Has unconfirmed changes.
     *
     * @return bool
     */
    public function getHasUnconfirmedChanges(): bool
    {
        return $this->hasUnconfirmedChanges;
    }
    /**
     * Has unconfirmed changes.
     *
     * @param bool $hasUnconfirmedChanges
     *
     * @return self
     */
    public function setHasUnconfirmedChanges(bool $hasUnconfirmedChanges): self
    {
        $this->hasUnconfirmedChanges = $hasUnconfirmedChanges;
        return $this;
    }
    /**
     * Shipping tax changes.
     *
     * @return bool
     */
    public function getIsShippingTaxChanged(): bool
    {
        return $this->isShippingTaxChanged;
    }
    /**
     * Shipping tax changes.
     *
     * @param bool $isShippingTaxChanged
     *
     * @return self
     */
    public function setIsShippingTaxChanged(bool $isShippingTaxChanged): self
    {
        $this->isShippingTaxChanged = $isShippingTaxChanged;
        return $this;
    }
    /**
     * Customer price changes.
     *
     * @return bool
     */
    public function getIsCustomerPriceChanged(): bool
    {
        return $this->isCustomerPriceChanged;
    }
    /**
     * Customer price changes.
     *
     * @param bool $isCustomerPriceChanged
     *
     * @return self
     */
    public function setIsCustomerPriceChanged(bool $isCustomerPriceChanged): self
    {
        $this->isCustomerPriceChanged = $isCustomerPriceChanged;
        return $this;
    }
    /**
     * Quote notifications.
     *
     * @return int
     */
    public function getNotifications(): int
    {
        return $this->notifications;
    }
    /**
     * Quote notifications.
     *
     * @param int $notifications
     *
     * @return self
     */
    public function setNotifications(int $notifications): self
    {
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * Quote rules.
     *
     * @return string
     */
    public function getAppliedRuleIds(): string
    {
        return $this->appliedRuleIds;
    }
    /**
     * Quote rules.
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
     * Is address draft.
     *
     * @return bool
     */
    public function getIsAddressDraft(): bool
    {
        return $this->isAddressDraft;
    }
    /**
     * Is address draft.
     *
     * @param bool $isAddressDraft
     *
     * @return self
     */
    public function setIsAddressDraft(bool $isAddressDraft): self
    {
        $this->isAddressDraft = $isAddressDraft;
        return $this;
    }
    /**
     * Deleted products sku.
     *
     * @return string
     */
    public function getDeletedSku(): string
    {
        return $this->deletedSku;
    }
    /**
     * Deleted products sku.
     *
     * @param string $deletedSku
     *
     * @return self
     */
    public function setDeletedSku(string $deletedSku): self
    {
        $this->deletedSku = $deletedSku;
        return $this;
    }
    /**
     * Quote creator id.
     *
     * @return int
     */
    public function getCreatorId(): int
    {
        return $this->creatorId;
    }
    /**
     * Quote creator id.
     *
     * @param int $creatorId
     *
     * @return self
     */
    public function setCreatorId(int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Quote creator type.
     *
     * @return int
     */
    public function getCreatorType(): int
    {
        return $this->creatorType;
    }
    /**
     * Quote creator type.
     *
     * @param int $creatorType
     *
     * @return self
     */
    public function setCreatorType(int $creatorType): self
    {
        $this->creatorType = $creatorType;
        return $this;
    }
    /**
     * Quote original total price.
     *
     * @return float
     */
    public function getOriginalTotalPrice(): float
    {
        return $this->originalTotalPrice;
    }
    /**
     * Quote original total price.
     *
     * @param float $originalTotalPrice
     *
     * @return self
     */
    public function setOriginalTotalPrice(float $originalTotalPrice): self
    {
        $this->originalTotalPrice = $originalTotalPrice;
        return $this;
    }
    /**
     * Quote original total price in base currency.
     *
     * @return float
     */
    public function getBaseOriginalTotalPrice(): float
    {
        return $this->baseOriginalTotalPrice;
    }
    /**
     * Quote original total price in base currency.
     *
     * @param float $baseOriginalTotalPrice
     *
     * @return self
     */
    public function setBaseOriginalTotalPrice(float $baseOriginalTotalPrice): self
    {
        $this->baseOriginalTotalPrice = $baseOriginalTotalPrice;
        return $this;
    }
    /**
     * Quote negotiated total price.
     *
     * @return float
     */
    public function getNegotiatedTotalPrice(): float
    {
        return $this->negotiatedTotalPrice;
    }
    /**
     * Quote negotiated total price.
     *
     * @param float $negotiatedTotalPrice
     *
     * @return self
     */
    public function setNegotiatedTotalPrice(float $negotiatedTotalPrice): self
    {
        $this->negotiatedTotalPrice = $negotiatedTotalPrice;
        return $this;
    }
    /**
     * Quote negotiated total price in base currency.
     *
     * @return float
     */
    public function getBaseNegotiatedTotalPrice(): float
    {
        return $this->baseNegotiatedTotalPrice;
    }
    /**
     * Quote negotiated total price in base currency.
     *
     * @param float $baseNegotiatedTotalPrice
     *
     * @return self
     */
    public function setBaseNegotiatedTotalPrice(float $baseNegotiatedTotalPrice): self
    {
        $this->baseNegotiatedTotalPrice = $baseNegotiatedTotalPrice;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
