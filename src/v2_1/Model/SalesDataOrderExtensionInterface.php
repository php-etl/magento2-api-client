<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataOrderExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    protected $appliedTaxes;
    /**
     *
     *
     * @var float|null
     */
    protected $baseCustomerBalanceAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $baseCustomerBalanceInvoiced;
    /**
     *
     *
     * @var float|null
     */
    protected $baseCustomerBalanceRefunded;
    /**
     *
     *
     * @var float|null
     */
    protected $baseCustomerBalanceTotalRefunded;
    /**
     *
     *
     * @var float|null
     */
    protected $baseGiftCardsAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $baseGiftCardsInvoiced;
    /**
     *
     *
     * @var float|null
     */
    protected $baseGiftCardsRefunded;
    /**
     *
     *
     * @var float|null
     */
    protected $baseRewardCurrencyAmount;
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @var CompanyDataCompanyOrderInterface|null
     */
    protected $companyOrderAttributes;
    /**
     *
     *
     * @var bool|null
     */
    protected $convertingFromQuote;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceInvoiced;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceRefunded;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceTotalRefunded;
    /**
     *
     *
     * @var GiftCardAccountDataGiftCardInterface[]|null
     */
    protected $giftCards;
    /**
     *
     *
     * @var float|null
     */
    protected $giftCardsAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $giftCardsInvoiced;
    /**
     *
     *
     * @var float|null
     */
    protected $giftCardsRefunded;
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface|null
     */
    protected $giftMessage;
    /**
     *
     *
     * @var string|null
     */
    protected $gwAddCard;
    /**
     *
     *
     * @var string|null
     */
    protected $gwAllowGiftReceipt;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBasePriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBaseTaxAmountInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBasePriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBasePriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBasePriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBaseTaxInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardBaseTaxRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardPriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardPriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardPriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardTaxInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwCardTaxRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwId;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBasePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBasePriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBasePriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBasePriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBaseTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBaseTaxInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsBaseTaxRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsPriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsPriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsPriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsTaxInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwItemsTaxRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPrice;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPriceInclTax;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPriceInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwPriceRefunded;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmountInvoiced;
    /**
     *
     *
     * @var string|null
     */
    protected $gwTaxAmountRefunded;
    /**
     *
     *
     * @var TaxDataOrderTaxDetailsItemInterface[]|null
     */
    protected $itemAppliedTaxes;
    /**
     *
     *
     * @var PaymentDataPaymentAdditionalInfoInterface[]|null
     */
    protected $paymentAdditionalInfo;
    /**
     *
     *
     * @var float|null
     */
    protected $rewardCurrencyAmount;
    /**
     *
     *
     * @var int|null
     */
    protected $rewardPointsBalance;
    /**
     *
     *
     * @var SalesDataShippingAssignmentInterface[]|null
     */
    protected $shippingAssignments;
    /**
     *
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId(): ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     *
     *
     * @param string|null $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(?string $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     *
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes(): ?array
    {
        return $this->appliedTaxes;
    }
    /**
     *
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxInterface[]|null $appliedTaxes
     *
     * @return self
     */
    public function setAppliedTaxes(?array $appliedTaxes): self
    {
        $this->appliedTaxes = $appliedTaxes;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseCustomerBalanceAmount(): ?float
    {
        return $this->baseCustomerBalanceAmount;
    }
    /**
     *
     *
     * @param float|null $baseCustomerBalanceAmount
     *
     * @return self
     */
    public function setBaseCustomerBalanceAmount(?float $baseCustomerBalanceAmount): self
    {
        $this->baseCustomerBalanceAmount = $baseCustomerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseCustomerBalanceInvoiced(): ?float
    {
        return $this->baseCustomerBalanceInvoiced;
    }
    /**
     *
     *
     * @param float|null $baseCustomerBalanceInvoiced
     *
     * @return self
     */
    public function setBaseCustomerBalanceInvoiced(?float $baseCustomerBalanceInvoiced): self
    {
        $this->baseCustomerBalanceInvoiced = $baseCustomerBalanceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseCustomerBalanceRefunded(): ?float
    {
        return $this->baseCustomerBalanceRefunded;
    }
    /**
     *
     *
     * @param float|null $baseCustomerBalanceRefunded
     *
     * @return self
     */
    public function setBaseCustomerBalanceRefunded(?float $baseCustomerBalanceRefunded): self
    {
        $this->baseCustomerBalanceRefunded = $baseCustomerBalanceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseCustomerBalanceTotalRefunded(): ?float
    {
        return $this->baseCustomerBalanceTotalRefunded;
    }
    /**
     *
     *
     * @param float|null $baseCustomerBalanceTotalRefunded
     *
     * @return self
     */
    public function setBaseCustomerBalanceTotalRefunded(?float $baseCustomerBalanceTotalRefunded): self
    {
        $this->baseCustomerBalanceTotalRefunded = $baseCustomerBalanceTotalRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseGiftCardsAmount(): ?float
    {
        return $this->baseGiftCardsAmount;
    }
    /**
     *
     *
     * @param float|null $baseGiftCardsAmount
     *
     * @return self
     */
    public function setBaseGiftCardsAmount(?float $baseGiftCardsAmount): self
    {
        $this->baseGiftCardsAmount = $baseGiftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseGiftCardsInvoiced(): ?float
    {
        return $this->baseGiftCardsInvoiced;
    }
    /**
     *
     *
     * @param float|null $baseGiftCardsInvoiced
     *
     * @return self
     */
    public function setBaseGiftCardsInvoiced(?float $baseGiftCardsInvoiced): self
    {
        $this->baseGiftCardsInvoiced = $baseGiftCardsInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseGiftCardsRefunded(): ?float
    {
        return $this->baseGiftCardsRefunded;
    }
    /**
     *
     *
     * @param float|null $baseGiftCardsRefunded
     *
     * @return self
     */
    public function setBaseGiftCardsRefunded(?float $baseGiftCardsRefunded): self
    {
        $this->baseGiftCardsRefunded = $baseGiftCardsRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBaseRewardCurrencyAmount(): ?float
    {
        return $this->baseRewardCurrencyAmount;
    }
    /**
     *
     *
     * @param float|null $baseRewardCurrencyAmount
     *
     * @return self
     */
    public function setBaseRewardCurrencyAmount(?float $baseRewardCurrencyAmount): self
    {
        $this->baseRewardCurrencyAmount = $baseRewardCurrencyAmount;
        return $this;
    }
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @return CompanyDataCompanyOrderInterface|null
     */
    public function getCompanyOrderAttributes(): ?CompanyDataCompanyOrderInterface
    {
        return $this->companyOrderAttributes;
    }
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @param CompanyDataCompanyOrderInterface|null $companyOrderAttributes
     *
     * @return self
     */
    public function setCompanyOrderAttributes(?CompanyDataCompanyOrderInterface $companyOrderAttributes): self
    {
        $this->companyOrderAttributes = $companyOrderAttributes;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getConvertingFromQuote(): ?bool
    {
        return $this->convertingFromQuote;
    }
    /**
     *
     *
     * @param bool|null $convertingFromQuote
     *
     * @return self
     */
    public function setConvertingFromQuote(?bool $convertingFromQuote): self
    {
        $this->convertingFromQuote = $convertingFromQuote;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCustomerBalanceAmount(): ?float
    {
        return $this->customerBalanceAmount;
    }
    /**
     *
     *
     * @param float|null $customerBalanceAmount
     *
     * @return self
     */
    public function setCustomerBalanceAmount(?float $customerBalanceAmount): self
    {
        $this->customerBalanceAmount = $customerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCustomerBalanceInvoiced(): ?float
    {
        return $this->customerBalanceInvoiced;
    }
    /**
     *
     *
     * @param float|null $customerBalanceInvoiced
     *
     * @return self
     */
    public function setCustomerBalanceInvoiced(?float $customerBalanceInvoiced): self
    {
        $this->customerBalanceInvoiced = $customerBalanceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCustomerBalanceRefunded(): ?float
    {
        return $this->customerBalanceRefunded;
    }
    /**
     *
     *
     * @param float|null $customerBalanceRefunded
     *
     * @return self
     */
    public function setCustomerBalanceRefunded(?float $customerBalanceRefunded): self
    {
        $this->customerBalanceRefunded = $customerBalanceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCustomerBalanceTotalRefunded(): ?float
    {
        return $this->customerBalanceTotalRefunded;
    }
    /**
     *
     *
     * @param float|null $customerBalanceTotalRefunded
     *
     * @return self
     */
    public function setCustomerBalanceTotalRefunded(?float $customerBalanceTotalRefunded): self
    {
        $this->customerBalanceTotalRefunded = $customerBalanceTotalRefunded;
        return $this;
    }
    /**
     *
     *
     * @return GiftCardAccountDataGiftCardInterface[]|null
     */
    public function getGiftCards(): ?array
    {
        return $this->giftCards;
    }
    /**
     *
     *
     * @param GiftCardAccountDataGiftCardInterface[]|null $giftCards
     *
     * @return self
     */
    public function setGiftCards(?array $giftCards): self
    {
        $this->giftCards = $giftCards;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getGiftCardsAmount(): ?float
    {
        return $this->giftCardsAmount;
    }
    /**
     *
     *
     * @param float|null $giftCardsAmount
     *
     * @return self
     */
    public function setGiftCardsAmount(?float $giftCardsAmount): self
    {
        $this->giftCardsAmount = $giftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getGiftCardsInvoiced(): ?float
    {
        return $this->giftCardsInvoiced;
    }
    /**
     *
     *
     * @param float|null $giftCardsInvoiced
     *
     * @return self
     */
    public function setGiftCardsInvoiced(?float $giftCardsInvoiced): self
    {
        $this->giftCardsInvoiced = $giftCardsInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getGiftCardsRefunded(): ?float
    {
        return $this->giftCardsRefunded;
    }
    /**
     *
     *
     * @param float|null $giftCardsRefunded
     *
     * @return self
     */
    public function setGiftCardsRefunded(?float $giftCardsRefunded): self
    {
        $this->giftCardsRefunded = $giftCardsRefunded;
        return $this;
    }
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface|null
     */
    public function getGiftMessage(): ?GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface|null $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(?GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwAddCard(): ?string
    {
        return $this->gwAddCard;
    }
    /**
     *
     *
     * @param string|null $gwAddCard
     *
     * @return self
     */
    public function setGwAddCard(?string $gwAddCard): self
    {
        $this->gwAddCard = $gwAddCard;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwAllowGiftReceipt(): ?string
    {
        return $this->gwAllowGiftReceipt;
    }
    /**
     *
     *
     * @param string|null $gwAllowGiftReceipt
     *
     * @return self
     */
    public function setGwAllowGiftReceipt(?string $gwAllowGiftReceipt): self
    {
        $this->gwAllowGiftReceipt = $gwAllowGiftReceipt;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePrice(): ?string
    {
        return $this->gwBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(?string $gwBasePrice): self
    {
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePriceInclTax(): ?string
    {
        return $this->gwBasePriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwBasePriceInclTax
     *
     * @return self
     */
    public function setGwBasePriceInclTax(?string $gwBasePriceInclTax): self
    {
        $this->gwBasePriceInclTax = $gwBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePriceInvoiced(): ?string
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(?string $gwBasePriceInvoiced): self
    {
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBasePriceRefunded(): ?string
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(?string $gwBasePriceRefunded): self
    {
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBaseTaxAmount(): ?string
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(?string $gwBaseTaxAmount): self
    {
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBaseTaxAmountInvoiced(): ?string
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(?string $gwBaseTaxAmountInvoiced): self
    {
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwBaseTaxAmountRefunded(): ?string
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string|null $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(?string $gwBaseTaxAmountRefunded): self
    {
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBasePrice(): ?string
    {
        return $this->gwCardBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwCardBasePrice
     *
     * @return self
     */
    public function setGwCardBasePrice(?string $gwCardBasePrice): self
    {
        $this->gwCardBasePrice = $gwCardBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBasePriceInclTax(): ?string
    {
        return $this->gwCardBasePriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwCardBasePriceInclTax
     *
     * @return self
     */
    public function setGwCardBasePriceInclTax(?string $gwCardBasePriceInclTax): self
    {
        $this->gwCardBasePriceInclTax = $gwCardBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBasePriceInvoiced(): ?string
    {
        return $this->gwCardBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwCardBasePriceInvoiced
     *
     * @return self
     */
    public function setGwCardBasePriceInvoiced(?string $gwCardBasePriceInvoiced): self
    {
        $this->gwCardBasePriceInvoiced = $gwCardBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBasePriceRefunded(): ?string
    {
        return $this->gwCardBasePriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwCardBasePriceRefunded
     *
     * @return self
     */
    public function setGwCardBasePriceRefunded(?string $gwCardBasePriceRefunded): self
    {
        $this->gwCardBasePriceRefunded = $gwCardBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBaseTaxAmount(): ?string
    {
        return $this->gwCardBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwCardBaseTaxAmount
     *
     * @return self
     */
    public function setGwCardBaseTaxAmount(?string $gwCardBaseTaxAmount): self
    {
        $this->gwCardBaseTaxAmount = $gwCardBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBaseTaxInvoiced(): ?string
    {
        return $this->gwCardBaseTaxInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwCardBaseTaxInvoiced
     *
     * @return self
     */
    public function setGwCardBaseTaxInvoiced(?string $gwCardBaseTaxInvoiced): self
    {
        $this->gwCardBaseTaxInvoiced = $gwCardBaseTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardBaseTaxRefunded(): ?string
    {
        return $this->gwCardBaseTaxRefunded;
    }
    /**
     *
     *
     * @param string|null $gwCardBaseTaxRefunded
     *
     * @return self
     */
    public function setGwCardBaseTaxRefunded(?string $gwCardBaseTaxRefunded): self
    {
        $this->gwCardBaseTaxRefunded = $gwCardBaseTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardPrice(): ?string
    {
        return $this->gwCardPrice;
    }
    /**
     *
     *
     * @param string|null $gwCardPrice
     *
     * @return self
     */
    public function setGwCardPrice(?string $gwCardPrice): self
    {
        $this->gwCardPrice = $gwCardPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardPriceInclTax(): ?string
    {
        return $this->gwCardPriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwCardPriceInclTax
     *
     * @return self
     */
    public function setGwCardPriceInclTax(?string $gwCardPriceInclTax): self
    {
        $this->gwCardPriceInclTax = $gwCardPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardPriceInvoiced(): ?string
    {
        return $this->gwCardPriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwCardPriceInvoiced
     *
     * @return self
     */
    public function setGwCardPriceInvoiced(?string $gwCardPriceInvoiced): self
    {
        $this->gwCardPriceInvoiced = $gwCardPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardPriceRefunded(): ?string
    {
        return $this->gwCardPriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwCardPriceRefunded
     *
     * @return self
     */
    public function setGwCardPriceRefunded(?string $gwCardPriceRefunded): self
    {
        $this->gwCardPriceRefunded = $gwCardPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardTaxAmount(): ?string
    {
        return $this->gwCardTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwCardTaxAmount
     *
     * @return self
     */
    public function setGwCardTaxAmount(?string $gwCardTaxAmount): self
    {
        $this->gwCardTaxAmount = $gwCardTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardTaxInvoiced(): ?string
    {
        return $this->gwCardTaxInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwCardTaxInvoiced
     *
     * @return self
     */
    public function setGwCardTaxInvoiced(?string $gwCardTaxInvoiced): self
    {
        $this->gwCardTaxInvoiced = $gwCardTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwCardTaxRefunded(): ?string
    {
        return $this->gwCardTaxRefunded;
    }
    /**
     *
     *
     * @param string|null $gwCardTaxRefunded
     *
     * @return self
     */
    public function setGwCardTaxRefunded(?string $gwCardTaxRefunded): self
    {
        $this->gwCardTaxRefunded = $gwCardTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwId(): ?string
    {
        return $this->gwId;
    }
    /**
     *
     *
     * @param string|null $gwId
     *
     * @return self
     */
    public function setGwId(?string $gwId): self
    {
        $this->gwId = $gwId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBasePrice(): ?string
    {
        return $this->gwItemsBasePrice;
    }
    /**
     *
     *
     * @param string|null $gwItemsBasePrice
     *
     * @return self
     */
    public function setGwItemsBasePrice(?string $gwItemsBasePrice): self
    {
        $this->gwItemsBasePrice = $gwItemsBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBasePriceInclTax(): ?string
    {
        return $this->gwItemsBasePriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwItemsBasePriceInclTax
     *
     * @return self
     */
    public function setGwItemsBasePriceInclTax(?string $gwItemsBasePriceInclTax): self
    {
        $this->gwItemsBasePriceInclTax = $gwItemsBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBasePriceInvoiced(): ?string
    {
        return $this->gwItemsBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwItemsBasePriceInvoiced
     *
     * @return self
     */
    public function setGwItemsBasePriceInvoiced(?string $gwItemsBasePriceInvoiced): self
    {
        $this->gwItemsBasePriceInvoiced = $gwItemsBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBasePriceRefunded(): ?string
    {
        return $this->gwItemsBasePriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwItemsBasePriceRefunded
     *
     * @return self
     */
    public function setGwItemsBasePriceRefunded(?string $gwItemsBasePriceRefunded): self
    {
        $this->gwItemsBasePriceRefunded = $gwItemsBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBaseTaxAmount(): ?string
    {
        return $this->gwItemsBaseTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwItemsBaseTaxAmount
     *
     * @return self
     */
    public function setGwItemsBaseTaxAmount(?string $gwItemsBaseTaxAmount): self
    {
        $this->gwItemsBaseTaxAmount = $gwItemsBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBaseTaxInvoiced(): ?string
    {
        return $this->gwItemsBaseTaxInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwItemsBaseTaxInvoiced
     *
     * @return self
     */
    public function setGwItemsBaseTaxInvoiced(?string $gwItemsBaseTaxInvoiced): self
    {
        $this->gwItemsBaseTaxInvoiced = $gwItemsBaseTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsBaseTaxRefunded(): ?string
    {
        return $this->gwItemsBaseTaxRefunded;
    }
    /**
     *
     *
     * @param string|null $gwItemsBaseTaxRefunded
     *
     * @return self
     */
    public function setGwItemsBaseTaxRefunded(?string $gwItemsBaseTaxRefunded): self
    {
        $this->gwItemsBaseTaxRefunded = $gwItemsBaseTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsPrice(): ?string
    {
        return $this->gwItemsPrice;
    }
    /**
     *
     *
     * @param string|null $gwItemsPrice
     *
     * @return self
     */
    public function setGwItemsPrice(?string $gwItemsPrice): self
    {
        $this->gwItemsPrice = $gwItemsPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsPriceInclTax(): ?string
    {
        return $this->gwItemsPriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwItemsPriceInclTax
     *
     * @return self
     */
    public function setGwItemsPriceInclTax(?string $gwItemsPriceInclTax): self
    {
        $this->gwItemsPriceInclTax = $gwItemsPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsPriceInvoiced(): ?string
    {
        return $this->gwItemsPriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwItemsPriceInvoiced
     *
     * @return self
     */
    public function setGwItemsPriceInvoiced(?string $gwItemsPriceInvoiced): self
    {
        $this->gwItemsPriceInvoiced = $gwItemsPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsPriceRefunded(): ?string
    {
        return $this->gwItemsPriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwItemsPriceRefunded
     *
     * @return self
     */
    public function setGwItemsPriceRefunded(?string $gwItemsPriceRefunded): self
    {
        $this->gwItemsPriceRefunded = $gwItemsPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsTaxAmount(): ?string
    {
        return $this->gwItemsTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwItemsTaxAmount
     *
     * @return self
     */
    public function setGwItemsTaxAmount(?string $gwItemsTaxAmount): self
    {
        $this->gwItemsTaxAmount = $gwItemsTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsTaxInvoiced(): ?string
    {
        return $this->gwItemsTaxInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwItemsTaxInvoiced
     *
     * @return self
     */
    public function setGwItemsTaxInvoiced(?string $gwItemsTaxInvoiced): self
    {
        $this->gwItemsTaxInvoiced = $gwItemsTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwItemsTaxRefunded(): ?string
    {
        return $this->gwItemsTaxRefunded;
    }
    /**
     *
     *
     * @param string|null $gwItemsTaxRefunded
     *
     * @return self
     */
    public function setGwItemsTaxRefunded(?string $gwItemsTaxRefunded): self
    {
        $this->gwItemsTaxRefunded = $gwItemsTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPrice(): ?string
    {
        return $this->gwPrice;
    }
    /**
     *
     *
     * @param string|null $gwPrice
     *
     * @return self
     */
    public function setGwPrice(?string $gwPrice): self
    {
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPriceInclTax(): ?string
    {
        return $this->gwPriceInclTax;
    }
    /**
     *
     *
     * @param string|null $gwPriceInclTax
     *
     * @return self
     */
    public function setGwPriceInclTax(?string $gwPriceInclTax): self
    {
        $this->gwPriceInclTax = $gwPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPriceInvoiced(): ?string
    {
        return $this->gwPriceInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(?string $gwPriceInvoiced): self
    {
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwPriceRefunded(): ?string
    {
        return $this->gwPriceRefunded;
    }
    /**
     *
     *
     * @param string|null $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(?string $gwPriceRefunded): self
    {
        $this->gwPriceRefunded = $gwPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwTaxAmount(): ?string
    {
        return $this->gwTaxAmount;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(?string $gwTaxAmount): self
    {
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwTaxAmountInvoiced(): ?string
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(?string $gwTaxAmountInvoiced): self
    {
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGwTaxAmountRefunded(): ?string
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string|null $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(?string $gwTaxAmountRefunded): self
    {
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return TaxDataOrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes(): ?array
    {
        return $this->itemAppliedTaxes;
    }
    /**
     *
     *
     * @param TaxDataOrderTaxDetailsItemInterface[]|null $itemAppliedTaxes
     *
     * @return self
     */
    public function setItemAppliedTaxes(?array $itemAppliedTaxes): self
    {
        $this->itemAppliedTaxes = $itemAppliedTaxes;
        return $this;
    }
    /**
     *
     *
     * @return PaymentDataPaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo(): ?array
    {
        return $this->paymentAdditionalInfo;
    }
    /**
     *
     *
     * @param PaymentDataPaymentAdditionalInfoInterface[]|null $paymentAdditionalInfo
     *
     * @return self
     */
    public function setPaymentAdditionalInfo(?array $paymentAdditionalInfo): self
    {
        $this->paymentAdditionalInfo = $paymentAdditionalInfo;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getRewardCurrencyAmount(): ?float
    {
        return $this->rewardCurrencyAmount;
    }
    /**
     *
     *
     * @param float|null $rewardCurrencyAmount
     *
     * @return self
     */
    public function setRewardCurrencyAmount(?float $rewardCurrencyAmount): self
    {
        $this->rewardCurrencyAmount = $rewardCurrencyAmount;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getRewardPointsBalance(): ?int
    {
        return $this->rewardPointsBalance;
    }
    /**
     *
     *
     * @param int|null $rewardPointsBalance
     *
     * @return self
     */
    public function setRewardPointsBalance(?int $rewardPointsBalance): self
    {
        $this->rewardPointsBalance = $rewardPointsBalance;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments(): ?array
    {
        return $this->shippingAssignments;
    }
    /**
     *
     *
     * @param SalesDataShippingAssignmentInterface[]|null $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(?array $shippingAssignments): self
    {
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
}
