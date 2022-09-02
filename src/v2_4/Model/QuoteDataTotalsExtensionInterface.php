<?php

namespace Kiboko\Magento\V2_4\Model;

class QuoteDataTotalsExtensionInterface
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
    protected $baseRewardCurrencyAmount;
    /**
     *
     *
     * @var string
     */
    protected $couponLabel;
    /**
     *
     *
     * @var float
     */
    protected $customerBalanceAmount;
    /**
     * Extension attribute for quote totals model.
     *
     * @var NegotiableQuoteDataNegotiableQuoteTotalsInterface
     */
    protected $negotiableQuoteTotals;
    /**
     *
     *
     * @var float
     */
    protected $rewardCurrencyAmount;
    /**
     *
     *
     * @var float
     */
    protected $rewardPointsBalance;
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
     *
     *
     * @return string
     */
    public function getCouponLabel(): string
    {
        return $this->couponLabel;
    }
    /**
     *
     *
     * @param string $couponLabel
     *
     * @return self
     */
    public function setCouponLabel(string $couponLabel): self
    {
        $this->couponLabel = $couponLabel;
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
     * Extension attribute for quote totals model.
     *
     * @return NegotiableQuoteDataNegotiableQuoteTotalsInterface
     */
    public function getNegotiableQuoteTotals(): NegotiableQuoteDataNegotiableQuoteTotalsInterface
    {
        return $this->negotiableQuoteTotals;
    }
    /**
     * Extension attribute for quote totals model.
     *
     * @param NegotiableQuoteDataNegotiableQuoteTotalsInterface $negotiableQuoteTotals
     *
     * @return self
     */
    public function setNegotiableQuoteTotals(NegotiableQuoteDataNegotiableQuoteTotalsInterface $negotiableQuoteTotals): self
    {
        $this->negotiableQuoteTotals = $negotiableQuoteTotals;
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
     * @return float
     */
    public function getRewardPointsBalance(): float
    {
        return $this->rewardPointsBalance;
    }
    /**
     *
     *
     * @param float $rewardPointsBalance
     *
     * @return self
     */
    public function setRewardPointsBalance(float $rewardPointsBalance): self
    {
        $this->rewardPointsBalance = $rewardPointsBalance;
        return $this;
    }
}
