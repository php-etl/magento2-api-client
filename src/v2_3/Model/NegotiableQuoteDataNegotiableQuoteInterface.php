<?php

namespace Kiboko\Magento\V2_3\Model;

class NegotiableQuoteDataNegotiableQuoteInterface
{
    /**
     * Quote rules.
     *
     * @var string|null
     */
    protected $appliedRuleIds;
    /**
     * Quote negotiated total price in base currency.
     *
     * @var float|null
     */
    protected $baseNegotiatedTotalPrice;
    /**
     * Quote original total price in base currency.
     *
     * @var float|null
     */
    protected $baseOriginalTotalPrice;
    /**
     * Quote creator id.
     *
     * @var int|null
     */
    protected $creatorId;
    /**
     * Quote creator type.
     *
     * @var int|null
     */
    protected $creatorType;
    /**
     * Deleted products sku.
     *
     * @var string|null
     */
    protected $deletedSku;
    /**
     * Email notification status.
     *
     * @var int|null
     */
    protected $emailNotificationStatus;
    /**
     * Expiration period.
     *
     * @var string|null
     */
    protected $expirationPeriod;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\NegotiableQuoteInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Has unconfirmed changes.
     *
     * @var bool|null
     */
    protected $hasUnconfirmedChanges;
    /**
     * Is address draft.
     *
     * @var bool|null
     */
    protected $isAddressDraft;
    /**
     * Customer price changes.
     *
     * @var bool|null
     */
    protected $isCustomerPriceChanged;
    /**
     * Is regular quote.
     *
     * @var bool|null
     */
    protected $isRegularQuote;
    /**
     * Shipping tax changes.
     *
     * @var bool|null
     */
    protected $isShippingTaxChanged;
    /**
     * Negotiated price type.
     *
     * @var int|null
     */
    protected $negotiatedPriceType;
    /**
     * Negotiated price value.
     *
     * @var float|null
     */
    protected $negotiatedPriceValue;
    /**
     * Quote negotiated total price.
     *
     * @var float|null
     */
    protected $negotiatedTotalPrice;
    /**
     * Quote notifications.
     *
     * @var int|null
     */
    protected $notifications;
    /**
     * Quote original total price.
     *
     * @var float|null
     */
    protected $originalTotalPrice;
    /**
     * Negotiable quote ID.
     *
     * @var int|null
     */
    protected $quoteId;
    /**
     * Negotiable quote name.
     *
     * @var string|null
     */
    protected $quoteName;
    /**
     * Proposed shipping price.
     *
     * @var float|null
     */
    protected $shippingPrice;
    /**
     * Negotiable quote status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Quote rules.
     *
     * @return string|null
     */
    public function getAppliedRuleIds(): ?string
    {
        return $this->appliedRuleIds;
    }
    /**
     * Quote rules.
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
     * Quote negotiated total price in base currency.
     *
     * @return float|null
     */
    public function getBaseNegotiatedTotalPrice(): ?float
    {
        return $this->baseNegotiatedTotalPrice;
    }
    /**
     * Quote negotiated total price in base currency.
     *
     * @param float|null $baseNegotiatedTotalPrice
     *
     * @return self
     */
    public function setBaseNegotiatedTotalPrice(?float $baseNegotiatedTotalPrice): self
    {
        $this->baseNegotiatedTotalPrice = $baseNegotiatedTotalPrice;
        return $this;
    }
    /**
     * Quote original total price in base currency.
     *
     * @return float|null
     */
    public function getBaseOriginalTotalPrice(): ?float
    {
        return $this->baseOriginalTotalPrice;
    }
    /**
     * Quote original total price in base currency.
     *
     * @param float|null $baseOriginalTotalPrice
     *
     * @return self
     */
    public function setBaseOriginalTotalPrice(?float $baseOriginalTotalPrice): self
    {
        $this->baseOriginalTotalPrice = $baseOriginalTotalPrice;
        return $this;
    }
    /**
     * Quote creator id.
     *
     * @return int|null
     */
    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }
    /**
     * Quote creator id.
     *
     * @param int|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Quote creator type.
     *
     * @return int|null
     */
    public function getCreatorType(): ?int
    {
        return $this->creatorType;
    }
    /**
     * Quote creator type.
     *
     * @param int|null $creatorType
     *
     * @return self
     */
    public function setCreatorType(?int $creatorType): self
    {
        $this->creatorType = $creatorType;
        return $this;
    }
    /**
     * Deleted products sku.
     *
     * @return string|null
     */
    public function getDeletedSku(): ?string
    {
        return $this->deletedSku;
    }
    /**
     * Deleted products sku.
     *
     * @param string|null $deletedSku
     *
     * @return self
     */
    public function setDeletedSku(?string $deletedSku): self
    {
        $this->deletedSku = $deletedSku;
        return $this;
    }
    /**
     * Email notification status.
     *
     * @return int|null
     */
    public function getEmailNotificationStatus(): ?int
    {
        return $this->emailNotificationStatus;
    }
    /**
     * Email notification status.
     *
     * @param int|null $emailNotificationStatus
     *
     * @return self
     */
    public function setEmailNotificationStatus(?int $emailNotificationStatus): self
    {
        $this->emailNotificationStatus = $emailNotificationStatus;
        return $this;
    }
    /**
     * Expiration period.
     *
     * @return string|null
     */
    public function getExpirationPeriod(): ?string
    {
        return $this->expirationPeriod;
    }
    /**
     * Expiration period.
     *
     * @param string|null $expirationPeriod
     *
     * @return self
     */
    public function setExpirationPeriod(?string $expirationPeriod): self
    {
        $this->expirationPeriod = $expirationPeriod;
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
    /**
     * Has unconfirmed changes.
     *
     * @return bool|null
     */
    public function getHasUnconfirmedChanges(): ?bool
    {
        return $this->hasUnconfirmedChanges;
    }
    /**
     * Has unconfirmed changes.
     *
     * @param bool|null $hasUnconfirmedChanges
     *
     * @return self
     */
    public function setHasUnconfirmedChanges(?bool $hasUnconfirmedChanges): self
    {
        $this->hasUnconfirmedChanges = $hasUnconfirmedChanges;
        return $this;
    }
    /**
     * Is address draft.
     *
     * @return bool|null
     */
    public function getIsAddressDraft(): ?bool
    {
        return $this->isAddressDraft;
    }
    /**
     * Is address draft.
     *
     * @param bool|null $isAddressDraft
     *
     * @return self
     */
    public function setIsAddressDraft(?bool $isAddressDraft): self
    {
        $this->isAddressDraft = $isAddressDraft;
        return $this;
    }
    /**
     * Customer price changes.
     *
     * @return bool|null
     */
    public function getIsCustomerPriceChanged(): ?bool
    {
        return $this->isCustomerPriceChanged;
    }
    /**
     * Customer price changes.
     *
     * @param bool|null $isCustomerPriceChanged
     *
     * @return self
     */
    public function setIsCustomerPriceChanged(?bool $isCustomerPriceChanged): self
    {
        $this->isCustomerPriceChanged = $isCustomerPriceChanged;
        return $this;
    }
    /**
     * Is regular quote.
     *
     * @return bool|null
     */
    public function getIsRegularQuote(): ?bool
    {
        return $this->isRegularQuote;
    }
    /**
     * Is regular quote.
     *
     * @param bool|null $isRegularQuote
     *
     * @return self
     */
    public function setIsRegularQuote(?bool $isRegularQuote): self
    {
        $this->isRegularQuote = $isRegularQuote;
        return $this;
    }
    /**
     * Shipping tax changes.
     *
     * @return bool|null
     */
    public function getIsShippingTaxChanged(): ?bool
    {
        return $this->isShippingTaxChanged;
    }
    /**
     * Shipping tax changes.
     *
     * @param bool|null $isShippingTaxChanged
     *
     * @return self
     */
    public function setIsShippingTaxChanged(?bool $isShippingTaxChanged): self
    {
        $this->isShippingTaxChanged = $isShippingTaxChanged;
        return $this;
    }
    /**
     * Negotiated price type.
     *
     * @return int|null
     */
    public function getNegotiatedPriceType(): ?int
    {
        return $this->negotiatedPriceType;
    }
    /**
     * Negotiated price type.
     *
     * @param int|null $negotiatedPriceType
     *
     * @return self
     */
    public function setNegotiatedPriceType(?int $negotiatedPriceType): self
    {
        $this->negotiatedPriceType = $negotiatedPriceType;
        return $this;
    }
    /**
     * Negotiated price value.
     *
     * @return float|null
     */
    public function getNegotiatedPriceValue(): ?float
    {
        return $this->negotiatedPriceValue;
    }
    /**
     * Negotiated price value.
     *
     * @param float|null $negotiatedPriceValue
     *
     * @return self
     */
    public function setNegotiatedPriceValue(?float $negotiatedPriceValue): self
    {
        $this->negotiatedPriceValue = $negotiatedPriceValue;
        return $this;
    }
    /**
     * Quote negotiated total price.
     *
     * @return float|null
     */
    public function getNegotiatedTotalPrice(): ?float
    {
        return $this->negotiatedTotalPrice;
    }
    /**
     * Quote negotiated total price.
     *
     * @param float|null $negotiatedTotalPrice
     *
     * @return self
     */
    public function setNegotiatedTotalPrice(?float $negotiatedTotalPrice): self
    {
        $this->negotiatedTotalPrice = $negotiatedTotalPrice;
        return $this;
    }
    /**
     * Quote notifications.
     *
     * @return int|null
     */
    public function getNotifications(): ?int
    {
        return $this->notifications;
    }
    /**
     * Quote notifications.
     *
     * @param int|null $notifications
     *
     * @return self
     */
    public function setNotifications(?int $notifications): self
    {
        $this->notifications = $notifications;
        return $this;
    }
    /**
     * Quote original total price.
     *
     * @return float|null
     */
    public function getOriginalTotalPrice(): ?float
    {
        return $this->originalTotalPrice;
    }
    /**
     * Quote original total price.
     *
     * @param float|null $originalTotalPrice
     *
     * @return self
     */
    public function setOriginalTotalPrice(?float $originalTotalPrice): self
    {
        $this->originalTotalPrice = $originalTotalPrice;
        return $this;
    }
    /**
     * Negotiable quote ID.
     *
     * @return int|null
     */
    public function getQuoteId(): ?int
    {
        return $this->quoteId;
    }
    /**
     * Negotiable quote ID.
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
     * Negotiable quote name.
     *
     * @return string|null
     */
    public function getQuoteName(): ?string
    {
        return $this->quoteName;
    }
    /**
     * Negotiable quote name.
     *
     * @param string|null $quoteName
     *
     * @return self
     */
    public function setQuoteName(?string $quoteName): self
    {
        $this->quoteName = $quoteName;
        return $this;
    }
    /**
     * Proposed shipping price.
     *
     * @return float|null
     */
    public function getShippingPrice(): ?float
    {
        return $this->shippingPrice;
    }
    /**
     * Proposed shipping price.
     *
     * @param float|null $shippingPrice
     *
     * @return self
     */
    public function setShippingPrice(?float $shippingPrice): self
    {
        $this->shippingPrice = $shippingPrice;
        return $this;
    }
    /**
     * Negotiable quote status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Negotiable quote status.
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
}
