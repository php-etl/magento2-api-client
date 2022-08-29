<?php

namespace Kiboko\Magento\v2_3\Model;

class CompanyCreditDataCreditDataInterface
{
    /**
     * Available Limit.
     *
     * @var float
     */
    protected $availableLimit;
    /**
     * Balance.
     *
     * @var float
     */
    protected $balance;
    /**
     * Company id.
     *
     * @var int
     */
    protected $companyId;
    /**
     * Credit Limit.
     *
     * @var float
     */
    protected $creditLimit;
    /**
     * Currency Code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Exceed Limit.
     *
     * @var bool
     */
    protected $exceedLimit;
    /**
     * ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Available Limit.
     *
     * @return float
     */
    public function getAvailableLimit(): float
    {
        return $this->availableLimit;
    }
    /**
     * Available Limit.
     *
     * @param float $availableLimit
     *
     * @return self
     */
    public function setAvailableLimit(float $availableLimit): self
    {
        $this->availableLimit = $availableLimit;
        return $this;
    }
    /**
     * Balance.
     *
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }
    /**
     * Balance.
     *
     * @param float $balance
     *
     * @return self
     */
    public function setBalance(float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Company id.
     *
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }
    /**
     * Company id.
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Credit Limit.
     *
     * @return float
     */
    public function getCreditLimit(): float
    {
        return $this->creditLimit;
    }
    /**
     * Credit Limit.
     *
     * @param float $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(float $creditLimit): self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * Currency Code.
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    /**
     * Currency Code.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Exceed Limit.
     *
     * @return bool
     */
    public function getExceedLimit(): bool
    {
        return $this->exceedLimit;
    }
    /**
     * Exceed Limit.
     *
     * @param bool $exceedLimit
     *
     * @return self
     */
    public function setExceedLimit(bool $exceedLimit): self
    {
        $this->exceedLimit = $exceedLimit;
        return $this;
    }
    /**
     * ID.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
