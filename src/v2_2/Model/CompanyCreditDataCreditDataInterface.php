<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyCreditDataCreditDataInterface
{
    /**
     * Available Limit.
     *
     * @var float|null
     */
    protected $availableLimit;
    /**
     * Balance.
     *
     * @var float|null
     */
    protected $balance;
    /**
     * Company id.
     *
     * @var int|null
     */
    protected $companyId;
    /**
     * Credit Limit.
     *
     * @var float|null
     */
    protected $creditLimit;
    /**
     * Currency Code.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Exceed Limit.
     *
     * @var bool|null
     */
    protected $exceedLimit;
    /**
     * ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Available Limit.
     *
     * @return float|null
     */
    public function getAvailableLimit(): ?float
    {
        return $this->availableLimit;
    }
    /**
     * Available Limit.
     *
     * @param float|null $availableLimit
     *
     * @return self
     */
    public function setAvailableLimit(?float $availableLimit): self
    {
        $this->availableLimit = $availableLimit;
        return $this;
    }
    /**
     * Balance.
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * Balance.
     *
     * @param float|null $balance
     *
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }
    /**
     * Company id.
     *
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Company id.
     *
     * @param int|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Credit Limit.
     *
     * @return float|null
     */
    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }
    /**
     * Credit Limit.
     *
     * @param float|null $creditLimit
     *
     * @return self
     */
    public function setCreditLimit(?float $creditLimit): self
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }
    /**
     * Currency Code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * Currency Code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Exceed Limit.
     *
     * @return bool|null
     */
    public function getExceedLimit(): ?bool
    {
        return $this->exceedLimit;
    }
    /**
     * Exceed Limit.
     *
     * @param bool|null $exceedLimit
     *
     * @return self
     */
    public function setExceedLimit(?bool $exceedLimit): self
    {
        $this->exceedLimit = $exceedLimit;
        return $this;
    }
    /**
     * ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * ID.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
