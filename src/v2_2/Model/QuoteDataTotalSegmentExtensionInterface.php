<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataTotalSegmentExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $giftCards;
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
    protected $gwBaseTaxAmount;
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
    protected $gwCardBaseTaxAmount;
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
    protected $gwCardTaxAmount;
    /**
     *
     *
     * @var string[]|null
     */
    protected $gwItemIds;
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
    protected $gwItemsBaseTaxAmount;
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
    protected $gwItemsTaxAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $gwOrderId;
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
    protected $gwTaxAmount;
    /**
     *
     *
     * @var TaxDataGrandTotalDetailsInterface[]|null
     */
    protected $taxGrandtotalDetails;
    /**
     *
     *
     * @var string[]|null
     */
    protected $vertexTaxCalculationMessages;
    /**
     *
     *
     * @return string|null
     */
    public function getGiftCards(): ?string
    {
        return $this->giftCards;
    }
    /**
     *
     *
     * @param string|null $giftCards
     *
     * @return self
     */
    public function setGiftCards(?string $giftCards): self
    {
        $this->giftCards = $giftCards;
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
     * @return string[]|null
     */
    public function getGwItemIds(): ?array
    {
        return $this->gwItemIds;
    }
    /**
     *
     *
     * @param string[]|null $gwItemIds
     *
     * @return self
     */
    public function setGwItemIds(?array $gwItemIds): self
    {
        $this->gwItemIds = $gwItemIds;
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
    public function getGwOrderId(): ?string
    {
        return $this->gwOrderId;
    }
    /**
     *
     *
     * @param string|null $gwOrderId
     *
     * @return self
     */
    public function setGwOrderId(?string $gwOrderId): self
    {
        $this->gwOrderId = $gwOrderId;
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
     * @return TaxDataGrandTotalDetailsInterface[]|null
     */
    public function getTaxGrandtotalDetails(): ?array
    {
        return $this->taxGrandtotalDetails;
    }
    /**
     *
     *
     * @param TaxDataGrandTotalDetailsInterface[]|null $taxGrandtotalDetails
     *
     * @return self
     */
    public function setTaxGrandtotalDetails(?array $taxGrandtotalDetails): self
    {
        $this->taxGrandtotalDetails = $taxGrandtotalDetails;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getVertexTaxCalculationMessages(): ?array
    {
        return $this->vertexTaxCalculationMessages;
    }
    /**
     *
     *
     * @param string[]|null $vertexTaxCalculationMessages
     *
     * @return self
     */
    public function setVertexTaxCalculationMessages(?array $vertexTaxCalculationMessages): self
    {
        $this->vertexTaxCalculationMessages = $vertexTaxCalculationMessages;
        return $this;
    }
}
