<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataTotalSegmentExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $giftCards;
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
    protected $gwBaseTaxAmount;
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
    protected $gwCardBaseTaxAmount;
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
    protected $gwCardTaxAmount;
    /**
     *
     *
     * @var string[]
     */
    protected $gwItemIds;
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
    protected $gwItemsBaseTaxAmount;
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
    protected $gwItemsTaxAmount;
    /**
     *
     *
     * @var string
     */
    protected $gwOrderId;
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
    protected $gwTaxAmount;
    /**
     *
     *
     * @var TaxDataGrandTotalDetailsInterface[]
     */
    protected $taxGrandtotalDetails;
    /**
     *
     *
     * @var string[]
     */
    protected $vertexTaxCalculationMessages;
    /**
     *
     *
     * @return string
     */
    public function getGiftCards(): string
    {
        return $this->giftCards;
    }
    /**
     *
     *
     * @param string $giftCards
     *
     * @return self
     */
    public function setGiftCards(string $giftCards): self
    {
        $this->giftCards = $giftCards;
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
     * @return string[]
     */
    public function getGwItemIds(): array
    {
        return $this->gwItemIds;
    }
    /**
     *
     *
     * @param string[] $gwItemIds
     *
     * @return self
     */
    public function setGwItemIds(array $gwItemIds): self
    {
        $this->gwItemIds = $gwItemIds;
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
    public function getGwOrderId(): string
    {
        return $this->gwOrderId;
    }
    /**
     *
     *
     * @param string $gwOrderId
     *
     * @return self
     */
    public function setGwOrderId(string $gwOrderId): self
    {
        $this->gwOrderId = $gwOrderId;
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
     * @return TaxDataGrandTotalDetailsInterface[]
     */
    public function getTaxGrandtotalDetails(): array
    {
        return $this->taxGrandtotalDetails;
    }
    /**
     *
     *
     * @param TaxDataGrandTotalDetailsInterface[] $taxGrandtotalDetails
     *
     * @return self
     */
    public function setTaxGrandtotalDetails(array $taxGrandtotalDetails): self
    {
        $this->taxGrandtotalDetails = $taxGrandtotalDetails;
        return $this;
    }
    /**
     *
     *
     * @return string[]
     */
    public function getVertexTaxCalculationMessages(): array
    {
        return $this->vertexTaxCalculationMessages;
    }
    /**
     *
     *
     * @param string[] $vertexTaxCalculationMessages
     *
     * @return self
     */
    public function setVertexTaxCalculationMessages(array $vertexTaxCalculationMessages): self
    {
        $this->vertexTaxCalculationMessages = $vertexTaxCalculationMessages;
        return $this;
    }
}
