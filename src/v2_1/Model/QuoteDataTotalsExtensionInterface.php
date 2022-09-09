<?php

namespace Kiboko\Magento\V2_1\Model;

class QuoteDataTotalsExtensionInterface
{
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
    protected $baseRewardCurrencyAmount;
    /**
     *
     *
     * @var string|null
     */
    protected $couponLabel;
    /**
     *
     *
     * @var float|null
     */
    protected $customerBalanceAmount;
    /**
     * Extension attribute for quote totals model.
     *
     * @var NegotiableQuoteDataNegotiableQuoteTotalsInterface|null
     */
    protected $negotiableQuoteTotals;
    /**
     *
     *
     * @var float|null
     */
    protected $rewardCurrencyAmount;
    /**
     *
     *
     * @var float|null
     */
    protected $rewardPointsBalance;
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
     *
     *
     * @return string|null
     */
    public function getCouponLabel(): ?string
    {
        return $this->couponLabel;
    }
    /**
     *
     *
     * @param string|null $couponLabel
     *
     * @return self
     */
    public function setCouponLabel(?string $couponLabel): self
    {
        $this->couponLabel = $couponLabel;
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
     * Extension attribute for quote totals model.
     *
     * @return NegotiableQuoteDataNegotiableQuoteTotalsInterface|null
     */
    public function getNegotiableQuoteTotals(): ?NegotiableQuoteDataNegotiableQuoteTotalsInterface
    {
        return $this->negotiableQuoteTotals;
    }
    /**
     * Extension attribute for quote totals model.
     *
     * @param NegotiableQuoteDataNegotiableQuoteTotalsInterface|null $negotiableQuoteTotals
     *
     * @return self
     */
    public function setNegotiableQuoteTotals(?NegotiableQuoteDataNegotiableQuoteTotalsInterface $negotiableQuoteTotals): self
    {
        $this->negotiableQuoteTotals = $negotiableQuoteTotals;
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
     * @return float|null
     */
    public function getRewardPointsBalance(): ?float
    {
        return $this->rewardPointsBalance;
    }
    /**
     *
     *
     * @param float|null $rewardPointsBalance
     *
     * @return self
     */
    public function setRewardPointsBalance(?float $rewardPointsBalance): self
    {
        $this->rewardPointsBalance = $rewardPointsBalance;
        return $this;
    }
}
