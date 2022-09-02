<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataOrderExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @var TaxDataOrderTaxDetailsAppliedTaxInterface[]
     */
    protected $appliedTaxes;
    /**
     *
     *
     * @var float
     */
    protected $baseCustomerBalanceAmount;
    /**
     *
     *
     * @var float
     */
    protected $baseCustomerBalanceInvoiced;
    /**
     *
     *
     * @var float
     */
    protected $baseCustomerBalanceRefunded;
    /**
     *
     *
     * @var float
     */
    protected $baseCustomerBalanceTotalRefunded;
    /**
     *
     *
     * @var float
     */
    protected $baseGiftCardsAmount;
    /**
     *
     *
     * @var float
     */
    protected $baseGiftCardsInvoiced;
    /**
     *
     *
     * @var float
     */
    protected $baseGiftCardsRefunded;
    /**
     *
     *
     * @var float
     */
    protected $baseRewardCurrencyAmount;
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @var CompanyDataCompanyOrderInterface
     */
    protected $companyOrderAttributes;
    /**
     *
     *
     * @var bool
     */
    protected $convertingFromQuote;
    /**
     *
     *
     * @var float
     */
    protected $customerBalanceAmount;
    /**
     *
     *
     * @var float
     */
    protected $customerBalanceInvoiced;
    /**
     *
     *
     * @var float
     */
    protected $customerBalanceRefunded;
    /**
     *
     *
     * @var float
     */
    protected $customerBalanceTotalRefunded;
    /**
     *
     *
     * @var GiftCardAccountDataGiftCardInterface[]
     */
    protected $giftCards;
    /**
     *
     *
     * @var float
     */
    protected $giftCardsAmount;
    /**
     *
     *
     * @var float
     */
    protected $giftCardsInvoiced;
    /**
     *
     *
     * @var float
     */
    protected $giftCardsRefunded;
    /**
     * Interface MessageInterface
     *
     * @var GiftMessageDataMessageInterface
     */
    protected $giftMessage;
    /**
     *
     *
     * @var string
     */
    protected $gwAddCard;
    /**
     *
     *
     * @var string
     */
    protected $gwAllowGiftReceipt;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePrice;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwBasePriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmountInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwBaseTaxAmountRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBasePrice;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBasePriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBasePriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBasePriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBaseTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBaseTaxInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwCardBaseTaxRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwCardPrice;
    /**
     *
     *
     * @var string
     */
    protected $gwCardPriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwCardPriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwCardPriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwCardTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwCardTaxInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwCardTaxRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwId;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBasePrice;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBasePriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBasePriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBasePriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBaseTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBaseTaxInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsBaseTaxRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsPrice;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsPriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsPriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsPriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsTaxInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwItemsTaxRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwPrice;
    /**
     *
     *
     * @var string
     */
    protected $gwPriceInclTax;
    /**
     *
     *
     * @var string
     */
    protected $gwPriceInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwPriceRefunded;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmountInvoiced;
    /**
     *
     *
     * @var string
     */
    protected $gwTaxAmountRefunded;
    /**
     *
     *
     * @var TaxDataOrderTaxDetailsItemInterface[]
     */
    protected $itemAppliedTaxes;
    /**
     *
     *
     * @var PaymentDataPaymentAdditionalInfoInterface[]
     */
    protected $paymentAdditionalInfo;
    /**
     *
     *
     * @var float
     */
    protected $rewardCurrencyAmount;
    /**
     *
     *
     * @var int
     */
    protected $rewardPointsBalance;
    /**
     *
     *
     * @var SalesDataShippingAssignmentInterface[]
     */
    protected $shippingAssignments;
    /**
     *
     *
     * @return string
     */
    public function getAmazonOrderReferenceId(): string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(string $amazonOrderReferenceId): self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     *
     *
     * @return TaxDataOrderTaxDetailsAppliedTaxInterface[]
     */
    public function getAppliedTaxes(): array
    {
        return $this->appliedTaxes;
    }
    /**
     *
     *
     * @param TaxDataOrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     *
     * @return self
     */
    public function setAppliedTaxes(array $appliedTaxes): self
    {
        $this->appliedTaxes = $appliedTaxes;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseCustomerBalanceAmount(): float
    {
        return $this->baseCustomerBalanceAmount;
    }
    /**
     *
     *
     * @param float $baseCustomerBalanceAmount
     *
     * @return self
     */
    public function setBaseCustomerBalanceAmount(float $baseCustomerBalanceAmount): self
    {
        $this->baseCustomerBalanceAmount = $baseCustomerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseCustomerBalanceInvoiced(): float
    {
        return $this->baseCustomerBalanceInvoiced;
    }
    /**
     *
     *
     * @param float $baseCustomerBalanceInvoiced
     *
     * @return self
     */
    public function setBaseCustomerBalanceInvoiced(float $baseCustomerBalanceInvoiced): self
    {
        $this->baseCustomerBalanceInvoiced = $baseCustomerBalanceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseCustomerBalanceRefunded(): float
    {
        return $this->baseCustomerBalanceRefunded;
    }
    /**
     *
     *
     * @param float $baseCustomerBalanceRefunded
     *
     * @return self
     */
    public function setBaseCustomerBalanceRefunded(float $baseCustomerBalanceRefunded): self
    {
        $this->baseCustomerBalanceRefunded = $baseCustomerBalanceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseCustomerBalanceTotalRefunded(): float
    {
        return $this->baseCustomerBalanceTotalRefunded;
    }
    /**
     *
     *
     * @param float $baseCustomerBalanceTotalRefunded
     *
     * @return self
     */
    public function setBaseCustomerBalanceTotalRefunded(float $baseCustomerBalanceTotalRefunded): self
    {
        $this->baseCustomerBalanceTotalRefunded = $baseCustomerBalanceTotalRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseGiftCardsAmount(): float
    {
        return $this->baseGiftCardsAmount;
    }
    /**
     *
     *
     * @param float $baseGiftCardsAmount
     *
     * @return self
     */
    public function setBaseGiftCardsAmount(float $baseGiftCardsAmount): self
    {
        $this->baseGiftCardsAmount = $baseGiftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseGiftCardsInvoiced(): float
    {
        return $this->baseGiftCardsInvoiced;
    }
    /**
     *
     *
     * @param float $baseGiftCardsInvoiced
     *
     * @return self
     */
    public function setBaseGiftCardsInvoiced(float $baseGiftCardsInvoiced): self
    {
        $this->baseGiftCardsInvoiced = $baseGiftCardsInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseGiftCardsRefunded(): float
    {
        return $this->baseGiftCardsRefunded;
    }
    /**
     *
     *
     * @param float $baseGiftCardsRefunded
     *
     * @return self
     */
    public function setBaseGiftCardsRefunded(float $baseGiftCardsRefunded): self
    {
        $this->baseGiftCardsRefunded = $baseGiftCardsRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getBaseRewardCurrencyAmount(): float
    {
        return $this->baseRewardCurrencyAmount;
    }
    /**
     *
     *
     * @param float $baseRewardCurrencyAmount
     *
     * @return self
     */
    public function setBaseRewardCurrencyAmount(float $baseRewardCurrencyAmount): self
    {
        $this->baseRewardCurrencyAmount = $baseRewardCurrencyAmount;
        return $this;
    }
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @return CompanyDataCompanyOrderInterface
     */
    public function getCompanyOrderAttributes(): CompanyDataCompanyOrderInterface
    {
        return $this->companyOrderAttributes;
    }
    /**
     * Order company extension attributes interface. Adds new company attributes to orders.
     *
     * @param CompanyDataCompanyOrderInterface $companyOrderAttributes
     *
     * @return self
     */
    public function setCompanyOrderAttributes(CompanyDataCompanyOrderInterface $companyOrderAttributes): self
    {
        $this->companyOrderAttributes = $companyOrderAttributes;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getConvertingFromQuote(): bool
    {
        return $this->convertingFromQuote;
    }
    /**
     *
     *
     * @param bool $convertingFromQuote
     *
     * @return self
     */
    public function setConvertingFromQuote(bool $convertingFromQuote): self
    {
        $this->convertingFromQuote = $convertingFromQuote;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getCustomerBalanceAmount(): float
    {
        return $this->customerBalanceAmount;
    }
    /**
     *
     *
     * @param float $customerBalanceAmount
     *
     * @return self
     */
    public function setCustomerBalanceAmount(float $customerBalanceAmount): self
    {
        $this->customerBalanceAmount = $customerBalanceAmount;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getCustomerBalanceInvoiced(): float
    {
        return $this->customerBalanceInvoiced;
    }
    /**
     *
     *
     * @param float $customerBalanceInvoiced
     *
     * @return self
     */
    public function setCustomerBalanceInvoiced(float $customerBalanceInvoiced): self
    {
        $this->customerBalanceInvoiced = $customerBalanceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getCustomerBalanceRefunded(): float
    {
        return $this->customerBalanceRefunded;
    }
    /**
     *
     *
     * @param float $customerBalanceRefunded
     *
     * @return self
     */
    public function setCustomerBalanceRefunded(float $customerBalanceRefunded): self
    {
        $this->customerBalanceRefunded = $customerBalanceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getCustomerBalanceTotalRefunded(): float
    {
        return $this->customerBalanceTotalRefunded;
    }
    /**
     *
     *
     * @param float $customerBalanceTotalRefunded
     *
     * @return self
     */
    public function setCustomerBalanceTotalRefunded(float $customerBalanceTotalRefunded): self
    {
        $this->customerBalanceTotalRefunded = $customerBalanceTotalRefunded;
        return $this;
    }
    /**
     *
     *
     * @return GiftCardAccountDataGiftCardInterface[]
     */
    public function getGiftCards(): array
    {
        return $this->giftCards;
    }
    /**
     *
     *
     * @param GiftCardAccountDataGiftCardInterface[] $giftCards
     *
     * @return self
     */
    public function setGiftCards(array $giftCards): self
    {
        $this->giftCards = $giftCards;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getGiftCardsAmount(): float
    {
        return $this->giftCardsAmount;
    }
    /**
     *
     *
     * @param float $giftCardsAmount
     *
     * @return self
     */
    public function setGiftCardsAmount(float $giftCardsAmount): self
    {
        $this->giftCardsAmount = $giftCardsAmount;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getGiftCardsInvoiced(): float
    {
        return $this->giftCardsInvoiced;
    }
    /**
     *
     *
     * @param float $giftCardsInvoiced
     *
     * @return self
     */
    public function setGiftCardsInvoiced(float $giftCardsInvoiced): self
    {
        $this->giftCardsInvoiced = $giftCardsInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getGiftCardsRefunded(): float
    {
        return $this->giftCardsRefunded;
    }
    /**
     *
     *
     * @param float $giftCardsRefunded
     *
     * @return self
     */
    public function setGiftCardsRefunded(float $giftCardsRefunded): self
    {
        $this->giftCardsRefunded = $giftCardsRefunded;
        return $this;
    }
    /**
     * Interface MessageInterface
     *
     * @return GiftMessageDataMessageInterface
     */
    public function getGiftMessage(): GiftMessageDataMessageInterface
    {
        return $this->giftMessage;
    }
    /**
     * Interface MessageInterface
     *
     * @param GiftMessageDataMessageInterface $giftMessage
     *
     * @return self
     */
    public function setGiftMessage(GiftMessageDataMessageInterface $giftMessage): self
    {
        $this->giftMessage = $giftMessage;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwAddCard(): string
    {
        return $this->gwAddCard;
    }
    /**
     *
     *
     * @param string $gwAddCard
     *
     * @return self
     */
    public function setGwAddCard(string $gwAddCard): self
    {
        $this->gwAddCard = $gwAddCard;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwAllowGiftReceipt(): string
    {
        return $this->gwAllowGiftReceipt;
    }
    /**
     *
     *
     * @param string $gwAllowGiftReceipt
     *
     * @return self
     */
    public function setGwAllowGiftReceipt(string $gwAllowGiftReceipt): self
    {
        $this->gwAllowGiftReceipt = $gwAllowGiftReceipt;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePrice(): string
    {
        return $this->gwBasePrice;
    }
    /**
     *
     *
     * @param string $gwBasePrice
     *
     * @return self
     */
    public function setGwBasePrice(string $gwBasePrice): self
    {
        $this->gwBasePrice = $gwBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePriceInclTax(): string
    {
        return $this->gwBasePriceInclTax;
    }
    /**
     *
     *
     * @param string $gwBasePriceInclTax
     *
     * @return self
     */
    public function setGwBasePriceInclTax(string $gwBasePriceInclTax): self
    {
        $this->gwBasePriceInclTax = $gwBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePriceInvoiced(): string
    {
        return $this->gwBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwBasePriceInvoiced
     *
     * @return self
     */
    public function setGwBasePriceInvoiced(string $gwBasePriceInvoiced): self
    {
        $this->gwBasePriceInvoiced = $gwBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBasePriceRefunded(): string
    {
        return $this->gwBasePriceRefunded;
    }
    /**
     *
     *
     * @param string $gwBasePriceRefunded
     *
     * @return self
     */
    public function setGwBasePriceRefunded(string $gwBasePriceRefunded): self
    {
        $this->gwBasePriceRefunded = $gwBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmount(): string
    {
        return $this->gwBaseTaxAmount;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmount
     *
     * @return self
     */
    public function setGwBaseTaxAmount(string $gwBaseTaxAmount): self
    {
        $this->gwBaseTaxAmount = $gwBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmountInvoiced(): string
    {
        return $this->gwBaseTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwBaseTaxAmountInvoiced(string $gwBaseTaxAmountInvoiced): self
    {
        $this->gwBaseTaxAmountInvoiced = $gwBaseTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwBaseTaxAmountRefunded(): string
    {
        return $this->gwBaseTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string $gwBaseTaxAmountRefunded
     *
     * @return self
     */
    public function setGwBaseTaxAmountRefunded(string $gwBaseTaxAmountRefunded): self
    {
        $this->gwBaseTaxAmountRefunded = $gwBaseTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBasePrice(): string
    {
        return $this->gwCardBasePrice;
    }
    /**
     *
     *
     * @param string $gwCardBasePrice
     *
     * @return self
     */
    public function setGwCardBasePrice(string $gwCardBasePrice): self
    {
        $this->gwCardBasePrice = $gwCardBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBasePriceInclTax(): string
    {
        return $this->gwCardBasePriceInclTax;
    }
    /**
     *
     *
     * @param string $gwCardBasePriceInclTax
     *
     * @return self
     */
    public function setGwCardBasePriceInclTax(string $gwCardBasePriceInclTax): self
    {
        $this->gwCardBasePriceInclTax = $gwCardBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBasePriceInvoiced(): string
    {
        return $this->gwCardBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwCardBasePriceInvoiced
     *
     * @return self
     */
    public function setGwCardBasePriceInvoiced(string $gwCardBasePriceInvoiced): self
    {
        $this->gwCardBasePriceInvoiced = $gwCardBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBasePriceRefunded(): string
    {
        return $this->gwCardBasePriceRefunded;
    }
    /**
     *
     *
     * @param string $gwCardBasePriceRefunded
     *
     * @return self
     */
    public function setGwCardBasePriceRefunded(string $gwCardBasePriceRefunded): self
    {
        $this->gwCardBasePriceRefunded = $gwCardBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBaseTaxAmount(): string
    {
        return $this->gwCardBaseTaxAmount;
    }
    /**
     *
     *
     * @param string $gwCardBaseTaxAmount
     *
     * @return self
     */
    public function setGwCardBaseTaxAmount(string $gwCardBaseTaxAmount): self
    {
        $this->gwCardBaseTaxAmount = $gwCardBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBaseTaxInvoiced(): string
    {
        return $this->gwCardBaseTaxInvoiced;
    }
    /**
     *
     *
     * @param string $gwCardBaseTaxInvoiced
     *
     * @return self
     */
    public function setGwCardBaseTaxInvoiced(string $gwCardBaseTaxInvoiced): self
    {
        $this->gwCardBaseTaxInvoiced = $gwCardBaseTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardBaseTaxRefunded(): string
    {
        return $this->gwCardBaseTaxRefunded;
    }
    /**
     *
     *
     * @param string $gwCardBaseTaxRefunded
     *
     * @return self
     */
    public function setGwCardBaseTaxRefunded(string $gwCardBaseTaxRefunded): self
    {
        $this->gwCardBaseTaxRefunded = $gwCardBaseTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardPrice(): string
    {
        return $this->gwCardPrice;
    }
    /**
     *
     *
     * @param string $gwCardPrice
     *
     * @return self
     */
    public function setGwCardPrice(string $gwCardPrice): self
    {
        $this->gwCardPrice = $gwCardPrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardPriceInclTax(): string
    {
        return $this->gwCardPriceInclTax;
    }
    /**
     *
     *
     * @param string $gwCardPriceInclTax
     *
     * @return self
     */
    public function setGwCardPriceInclTax(string $gwCardPriceInclTax): self
    {
        $this->gwCardPriceInclTax = $gwCardPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardPriceInvoiced(): string
    {
        return $this->gwCardPriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwCardPriceInvoiced
     *
     * @return self
     */
    public function setGwCardPriceInvoiced(string $gwCardPriceInvoiced): self
    {
        $this->gwCardPriceInvoiced = $gwCardPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardPriceRefunded(): string
    {
        return $this->gwCardPriceRefunded;
    }
    /**
     *
     *
     * @param string $gwCardPriceRefunded
     *
     * @return self
     */
    public function setGwCardPriceRefunded(string $gwCardPriceRefunded): self
    {
        $this->gwCardPriceRefunded = $gwCardPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardTaxAmount(): string
    {
        return $this->gwCardTaxAmount;
    }
    /**
     *
     *
     * @param string $gwCardTaxAmount
     *
     * @return self
     */
    public function setGwCardTaxAmount(string $gwCardTaxAmount): self
    {
        $this->gwCardTaxAmount = $gwCardTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardTaxInvoiced(): string
    {
        return $this->gwCardTaxInvoiced;
    }
    /**
     *
     *
     * @param string $gwCardTaxInvoiced
     *
     * @return self
     */
    public function setGwCardTaxInvoiced(string $gwCardTaxInvoiced): self
    {
        $this->gwCardTaxInvoiced = $gwCardTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwCardTaxRefunded(): string
    {
        return $this->gwCardTaxRefunded;
    }
    /**
     *
     *
     * @param string $gwCardTaxRefunded
     *
     * @return self
     */
    public function setGwCardTaxRefunded(string $gwCardTaxRefunded): self
    {
        $this->gwCardTaxRefunded = $gwCardTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwId(): string
    {
        return $this->gwId;
    }
    /**
     *
     *
     * @param string $gwId
     *
     * @return self
     */
    public function setGwId(string $gwId): self
    {
        $this->gwId = $gwId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBasePrice(): string
    {
        return $this->gwItemsBasePrice;
    }
    /**
     *
     *
     * @param string $gwItemsBasePrice
     *
     * @return self
     */
    public function setGwItemsBasePrice(string $gwItemsBasePrice): self
    {
        $this->gwItemsBasePrice = $gwItemsBasePrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBasePriceInclTax(): string
    {
        return $this->gwItemsBasePriceInclTax;
    }
    /**
     *
     *
     * @param string $gwItemsBasePriceInclTax
     *
     * @return self
     */
    public function setGwItemsBasePriceInclTax(string $gwItemsBasePriceInclTax): self
    {
        $this->gwItemsBasePriceInclTax = $gwItemsBasePriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBasePriceInvoiced(): string
    {
        return $this->gwItemsBasePriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwItemsBasePriceInvoiced
     *
     * @return self
     */
    public function setGwItemsBasePriceInvoiced(string $gwItemsBasePriceInvoiced): self
    {
        $this->gwItemsBasePriceInvoiced = $gwItemsBasePriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBasePriceRefunded(): string
    {
        return $this->gwItemsBasePriceRefunded;
    }
    /**
     *
     *
     * @param string $gwItemsBasePriceRefunded
     *
     * @return self
     */
    public function setGwItemsBasePriceRefunded(string $gwItemsBasePriceRefunded): self
    {
        $this->gwItemsBasePriceRefunded = $gwItemsBasePriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBaseTaxAmount(): string
    {
        return $this->gwItemsBaseTaxAmount;
    }
    /**
     *
     *
     * @param string $gwItemsBaseTaxAmount
     *
     * @return self
     */
    public function setGwItemsBaseTaxAmount(string $gwItemsBaseTaxAmount): self
    {
        $this->gwItemsBaseTaxAmount = $gwItemsBaseTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBaseTaxInvoiced(): string
    {
        return $this->gwItemsBaseTaxInvoiced;
    }
    /**
     *
     *
     * @param string $gwItemsBaseTaxInvoiced
     *
     * @return self
     */
    public function setGwItemsBaseTaxInvoiced(string $gwItemsBaseTaxInvoiced): self
    {
        $this->gwItemsBaseTaxInvoiced = $gwItemsBaseTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsBaseTaxRefunded(): string
    {
        return $this->gwItemsBaseTaxRefunded;
    }
    /**
     *
     *
     * @param string $gwItemsBaseTaxRefunded
     *
     * @return self
     */
    public function setGwItemsBaseTaxRefunded(string $gwItemsBaseTaxRefunded): self
    {
        $this->gwItemsBaseTaxRefunded = $gwItemsBaseTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsPrice(): string
    {
        return $this->gwItemsPrice;
    }
    /**
     *
     *
     * @param string $gwItemsPrice
     *
     * @return self
     */
    public function setGwItemsPrice(string $gwItemsPrice): self
    {
        $this->gwItemsPrice = $gwItemsPrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsPriceInclTax(): string
    {
        return $this->gwItemsPriceInclTax;
    }
    /**
     *
     *
     * @param string $gwItemsPriceInclTax
     *
     * @return self
     */
    public function setGwItemsPriceInclTax(string $gwItemsPriceInclTax): self
    {
        $this->gwItemsPriceInclTax = $gwItemsPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsPriceInvoiced(): string
    {
        return $this->gwItemsPriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwItemsPriceInvoiced
     *
     * @return self
     */
    public function setGwItemsPriceInvoiced(string $gwItemsPriceInvoiced): self
    {
        $this->gwItemsPriceInvoiced = $gwItemsPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsPriceRefunded(): string
    {
        return $this->gwItemsPriceRefunded;
    }
    /**
     *
     *
     * @param string $gwItemsPriceRefunded
     *
     * @return self
     */
    public function setGwItemsPriceRefunded(string $gwItemsPriceRefunded): self
    {
        $this->gwItemsPriceRefunded = $gwItemsPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsTaxAmount(): string
    {
        return $this->gwItemsTaxAmount;
    }
    /**
     *
     *
     * @param string $gwItemsTaxAmount
     *
     * @return self
     */
    public function setGwItemsTaxAmount(string $gwItemsTaxAmount): self
    {
        $this->gwItemsTaxAmount = $gwItemsTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsTaxInvoiced(): string
    {
        return $this->gwItemsTaxInvoiced;
    }
    /**
     *
     *
     * @param string $gwItemsTaxInvoiced
     *
     * @return self
     */
    public function setGwItemsTaxInvoiced(string $gwItemsTaxInvoiced): self
    {
        $this->gwItemsTaxInvoiced = $gwItemsTaxInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwItemsTaxRefunded(): string
    {
        return $this->gwItemsTaxRefunded;
    }
    /**
     *
     *
     * @param string $gwItemsTaxRefunded
     *
     * @return self
     */
    public function setGwItemsTaxRefunded(string $gwItemsTaxRefunded): self
    {
        $this->gwItemsTaxRefunded = $gwItemsTaxRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPrice(): string
    {
        return $this->gwPrice;
    }
    /**
     *
     *
     * @param string $gwPrice
     *
     * @return self
     */
    public function setGwPrice(string $gwPrice): self
    {
        $this->gwPrice = $gwPrice;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPriceInclTax(): string
    {
        return $this->gwPriceInclTax;
    }
    /**
     *
     *
     * @param string $gwPriceInclTax
     *
     * @return self
     */
    public function setGwPriceInclTax(string $gwPriceInclTax): self
    {
        $this->gwPriceInclTax = $gwPriceInclTax;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPriceInvoiced(): string
    {
        return $this->gwPriceInvoiced;
    }
    /**
     *
     *
     * @param string $gwPriceInvoiced
     *
     * @return self
     */
    public function setGwPriceInvoiced(string $gwPriceInvoiced): self
    {
        $this->gwPriceInvoiced = $gwPriceInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwPriceRefunded(): string
    {
        return $this->gwPriceRefunded;
    }
    /**
     *
     *
     * @param string $gwPriceRefunded
     *
     * @return self
     */
    public function setGwPriceRefunded(string $gwPriceRefunded): self
    {
        $this->gwPriceRefunded = $gwPriceRefunded;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmount(): string
    {
        return $this->gwTaxAmount;
    }
    /**
     *
     *
     * @param string $gwTaxAmount
     *
     * @return self
     */
    public function setGwTaxAmount(string $gwTaxAmount): self
    {
        $this->gwTaxAmount = $gwTaxAmount;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmountInvoiced(): string
    {
        return $this->gwTaxAmountInvoiced;
    }
    /**
     *
     *
     * @param string $gwTaxAmountInvoiced
     *
     * @return self
     */
    public function setGwTaxAmountInvoiced(string $gwTaxAmountInvoiced): self
    {
        $this->gwTaxAmountInvoiced = $gwTaxAmountInvoiced;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGwTaxAmountRefunded(): string
    {
        return $this->gwTaxAmountRefunded;
    }
    /**
     *
     *
     * @param string $gwTaxAmountRefunded
     *
     * @return self
     */
    public function setGwTaxAmountRefunded(string $gwTaxAmountRefunded): self
    {
        $this->gwTaxAmountRefunded = $gwTaxAmountRefunded;
        return $this;
    }
    /**
     *
     *
     * @return TaxDataOrderTaxDetailsItemInterface[]
     */
    public function getItemAppliedTaxes(): array
    {
        return $this->itemAppliedTaxes;
    }
    /**
     *
     *
     * @param TaxDataOrderTaxDetailsItemInterface[] $itemAppliedTaxes
     *
     * @return self
     */
    public function setItemAppliedTaxes(array $itemAppliedTaxes): self
    {
        $this->itemAppliedTaxes = $itemAppliedTaxes;
        return $this;
    }
    /**
     *
     *
     * @return PaymentDataPaymentAdditionalInfoInterface[]
     */
    public function getPaymentAdditionalInfo(): array
    {
        return $this->paymentAdditionalInfo;
    }
    /**
     *
     *
     * @param PaymentDataPaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     *
     * @return self
     */
    public function setPaymentAdditionalInfo(array $paymentAdditionalInfo): self
    {
        $this->paymentAdditionalInfo = $paymentAdditionalInfo;
        return $this;
    }
    /**
     *
     *
     * @return float
     */
    public function getRewardCurrencyAmount(): float
    {
        return $this->rewardCurrencyAmount;
    }
    /**
     *
     *
     * @param float $rewardCurrencyAmount
     *
     * @return self
     */
    public function setRewardCurrencyAmount(float $rewardCurrencyAmount): self
    {
        $this->rewardCurrencyAmount = $rewardCurrencyAmount;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getRewardPointsBalance(): int
    {
        return $this->rewardPointsBalance;
    }
    /**
     *
     *
     * @param int $rewardPointsBalance
     *
     * @return self
     */
    public function setRewardPointsBalance(int $rewardPointsBalance): self
    {
        $this->rewardPointsBalance = $rewardPointsBalance;
        return $this;
    }
    /**
     *
     *
     * @return SalesDataShippingAssignmentInterface[]
     */
    public function getShippingAssignments(): array
    {
        return $this->shippingAssignments;
    }
    /**
     *
     *
     * @param SalesDataShippingAssignmentInterface[] $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(array $shippingAssignments): self
    {
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
}
