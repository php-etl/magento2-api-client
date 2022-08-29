<?php

namespace Kiboko\Magento\v2_2\Model;

class CompanyCreditDataHistoryDataInterface
{
    /**
     * Amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Available limit.
     *
     * @var float
     */
    protected $availableLimit;
    /**
     * Outstanding balance.
     *
     * @var float
     */
    protected $balance;
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * Company credit id.
     *
     * @var int
     */
    protected $companyCreditId;
    /**
     * Credit limit.
     *
     * @var float
     */
    protected $creditLimit;
    /**
     * Currency code of credit.
     *
     * @var string
     */
    protected $currencyCredit;
    /**
     * Currency code of operation.
     *
     * @var string
     */
    protected $currencyOperation;
    /**
     * Operation datetime.
     *
     * @var string
     */
    protected $datetime;
    /**
     * ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Purchase Order number.
     *
     * @var string
     */
    protected $purchaseOrder;
    /**
     * Currency rate between credit and operation currencies.
     *
     * @var float
     */
    protected $rate;
    /**
     * Rate between credit and base currencies.
     *
     * @var float
     */
    protected $rateCredit;
    /**
     * Type of operation.
     *
     * @var int
     */
    protected $type;
    /**
     * User Id.
     *
     * @var int
     */
    protected $userId;
    /**
     * User type: integration, admin, customer.
     *
     * @var int
     */
    protected $userType;
    /**
     * Amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * Amount.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Available limit.
     *
     * @return float
     */
    public function getAvailableLimit(): float
    {
        return $this->availableLimit;
    }
    /**
     * Available limit.
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
     * Outstanding balance.
     *
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }
    /**
     * Outstanding balance.
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
     * Comment.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Company credit id.
     *
     * @return int
     */
    public function getCompanyCreditId(): int
    {
        return $this->companyCreditId;
    }
    /**
     * Company credit id.
     *
     * @param int $companyCreditId
     *
     * @return self
     */
    public function setCompanyCreditId(int $companyCreditId): self
    {
        $this->companyCreditId = $companyCreditId;
        return $this;
    }
    /**
     * Credit limit.
     *
     * @return float
     */
    public function getCreditLimit(): float
    {
        return $this->creditLimit;
    }
    /**
     * Credit limit.
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
     * Currency code of credit.
     *
     * @return string
     */
    public function getCurrencyCredit(): string
    {
        return $this->currencyCredit;
    }
    /**
     * Currency code of credit.
     *
     * @param string $currencyCredit
     *
     * @return self
     */
    public function setCurrencyCredit(string $currencyCredit): self
    {
        $this->currencyCredit = $currencyCredit;
        return $this;
    }
    /**
     * Currency code of operation.
     *
     * @return string
     */
    public function getCurrencyOperation(): string
    {
        return $this->currencyOperation;
    }
    /**
     * Currency code of operation.
     *
     * @param string $currencyOperation
     *
     * @return self
     */
    public function setCurrencyOperation(string $currencyOperation): self
    {
        $this->currencyOperation = $currencyOperation;
        return $this;
    }
    /**
     * Operation datetime.
     *
     * @return string
     */
    public function getDatetime(): string
    {
        return $this->datetime;
    }
    /**
     * Operation datetime.
     *
     * @param string $datetime
     *
     * @return self
     */
    public function setDatetime(string $datetime): self
    {
        $this->datetime = $datetime;
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
    /**
     * Purchase Order number.
     *
     * @return string
     */
    public function getPurchaseOrder(): string
    {
        return $this->purchaseOrder;
    }
    /**
     * Purchase Order number.
     *
     * @param string $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    /**
     * Currency rate between credit and operation currencies.
     *
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
    /**
     * Currency rate between credit and operation currencies.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Rate between credit and base currencies.
     *
     * @return float
     */
    public function getRateCredit(): float
    {
        return $this->rateCredit;
    }
    /**
     * Rate between credit and base currencies.
     *
     * @param float $rateCredit
     *
     * @return self
     */
    public function setRateCredit(float $rateCredit): self
    {
        $this->rateCredit = $rateCredit;
        return $this;
    }
    /**
     * Type of operation.
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    /**
     * Type of operation.
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * User Id.
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
    /**
     * User Id.
     *
     * @param int $userId
     *
     * @return self
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * User type: integration, admin, customer.
     *
     * @return int
     */
    public function getUserType(): int
    {
        return $this->userType;
    }
    /**
     * User type: integration, admin, customer.
     *
     * @param int $userType
     *
     * @return self
     */
    public function setUserType(int $userType): self
    {
        $this->userType = $userType;
        return $this;
    }
}
