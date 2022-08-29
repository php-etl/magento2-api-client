<?php

namespace Kiboko\Magento\v2_1\Model;

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
    protected $customerBalanceAmount;
    /**
     *
     *
     * @var float
     */
    protected $rewardPointsBalance;
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
    protected $baseRewardCurrencyAmount;
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
}
