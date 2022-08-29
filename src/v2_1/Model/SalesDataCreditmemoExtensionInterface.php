<?php

namespace Kiboko\Magento\v2_1\Model;

class SalesDataCreditmemoExtensionInterface
{
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
    protected $baseGiftCardsAmount;
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
    protected $giftCardsAmount;
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
    protected $gwCardTaxAmount;
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
    protected $gwItemsTaxAmount;
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
    protected $gwTaxAmount;
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
}
