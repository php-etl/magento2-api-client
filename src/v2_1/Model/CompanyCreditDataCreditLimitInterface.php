<?php

namespace Kiboko\Magento\v2_1\Model;

class CompanyCreditDataCreditLimitInterface
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
     * Credit comment for company credit history.
     *
     * @var string
     */
    protected $creditComment;
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
     * ExtensionInterface class for @see \Magento\CompanyCredit\Api\Data\CreditLimitInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
     * Credit comment for company credit history.
     *
     * @return string
     */
    public function getCreditComment(): string
    {
        return $this->creditComment;
    }
    /**
     * Credit comment for company credit history.
     *
     * @param string $creditComment
     *
     * @return self
     */
    public function setCreditComment(string $creditComment): self
    {
        $this->creditComment = $creditComment;
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
     * ExtensionInterface class for @see \Magento\CompanyCredit\Api\Data\CreditLimitInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\CompanyCredit\Api\Data\CreditLimitInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
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
