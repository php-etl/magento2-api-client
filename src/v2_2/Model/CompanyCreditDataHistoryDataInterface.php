<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyCreditDataHistoryDataInterface
{
    /**
     * Amount.
     *
     * @var float|null
     */
    protected $amount;
    /**
     * Available limit.
     *
     * @var float|null
     */
    protected $availableLimit;
    /**
     * Outstanding balance.
     *
     * @var float|null
     */
    protected $balance;
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Company credit id.
     *
     * @var int|null
     */
    protected $companyCreditId;
    /**
     * Credit limit.
     *
     * @var float|null
     */
    protected $creditLimit;
    /**
     * Currency code of credit.
     *
     * @var string|null
     */
    protected $currencyCredit;
    /**
     * Currency code of operation.
     *
     * @var string|null
     */
    protected $currencyOperation;
    /**
     * Operation datetime.
     *
     * @var string|null
     */
    protected $datetime;
    /**
     * ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Purchase Order number.
     *
     * @var string|null
     */
    protected $purchaseOrder;
    /**
     * Currency rate between credit and operation currencies.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * Rate between credit and base currencies.
     *
     * @var float|null
     */
    protected $rateCredit;
    /**
     * Type of operation.
     *
     * @var int|null
     */
    protected $type;
    /**
     * User Id.
     *
     * @var int|null
     */
    protected $userId;
    /**
     * User type: integration, admin, customer.
     *
     * @var int|null
     */
    protected $userType;
    /**
     * Amount.
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Amount.
     *
     * @param float|null $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Available limit.
     *
     * @return float|null
     */
    public function getAvailableLimit(): ?float
    {
        return $this->availableLimit;
    }
    /**
     * Available limit.
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
     * Outstanding balance.
     *
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * Outstanding balance.
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
     * Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Company credit id.
     *
     * @return int|null
     */
    public function getCompanyCreditId(): ?int
    {
        return $this->companyCreditId;
    }
    /**
     * Company credit id.
     *
     * @param int|null $companyCreditId
     *
     * @return self
     */
    public function setCompanyCreditId(?int $companyCreditId): self
    {
        $this->companyCreditId = $companyCreditId;
        return $this;
    }
    /**
     * Credit limit.
     *
     * @return float|null
     */
    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }
    /**
     * Credit limit.
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
     * Currency code of credit.
     *
     * @return string|null
     */
    public function getCurrencyCredit(): ?string
    {
        return $this->currencyCredit;
    }
    /**
     * Currency code of credit.
     *
     * @param string|null $currencyCredit
     *
     * @return self
     */
    public function setCurrencyCredit(?string $currencyCredit): self
    {
        $this->currencyCredit = $currencyCredit;
        return $this;
    }
    /**
     * Currency code of operation.
     *
     * @return string|null
     */
    public function getCurrencyOperation(): ?string
    {
        return $this->currencyOperation;
    }
    /**
     * Currency code of operation.
     *
     * @param string|null $currencyOperation
     *
     * @return self
     */
    public function setCurrencyOperation(?string $currencyOperation): self
    {
        $this->currencyOperation = $currencyOperation;
        return $this;
    }
    /**
     * Operation datetime.
     *
     * @return string|null
     */
    public function getDatetime(): ?string
    {
        return $this->datetime;
    }
    /**
     * Operation datetime.
     *
     * @param string|null $datetime
     *
     * @return self
     */
    public function setDatetime(?string $datetime): self
    {
        $this->datetime = $datetime;
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
    /**
     * Purchase Order number.
     *
     * @return string|null
     */
    public function getPurchaseOrder(): ?string
    {
        return $this->purchaseOrder;
    }
    /**
     * Purchase Order number.
     *
     * @param string|null $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(?string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    /**
     * Currency rate between credit and operation currencies.
     *
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }
    /**
     * Currency rate between credit and operation currencies.
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Rate between credit and base currencies.
     *
     * @return float|null
     */
    public function getRateCredit(): ?float
    {
        return $this->rateCredit;
    }
    /**
     * Rate between credit and base currencies.
     *
     * @param float|null $rateCredit
     *
     * @return self
     */
    public function setRateCredit(?float $rateCredit): self
    {
        $this->rateCredit = $rateCredit;
        return $this;
    }
    /**
     * Type of operation.
     *
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Type of operation.
     *
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * User Id.
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * User Id.
     *
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * User type: integration, admin, customer.
     *
     * @return int|null
     */
    public function getUserType(): ?int
    {
        return $this->userType;
    }
    /**
     * User type: integration, admin, customer.
     *
     * @param int|null $userType
     *
     * @return self
     */
    public function setUserType(?int $userType): self
    {
        $this->userType = $userType;
        return $this;
    }
}
