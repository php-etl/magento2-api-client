<?php

namespace Kiboko\Magento\v2_1\Model;

class SalesDataInvoiceExtensionInterface
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
    protected $customerBalanceAmount;
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
    protected $giftCardsAmount;
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
}
