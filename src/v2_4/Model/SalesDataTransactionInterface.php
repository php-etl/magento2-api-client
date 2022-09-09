<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataTransactionInterface
{
    /**
     * Array of additional information. Otherwise, null.
     *
     * @var string[]|null
     */
    protected $additionalInformation;
    /**
     * Array of child transactions.
     *
     * @var SalesDataTransactionInterface[]|null
     */
    protected $childTransactions;
    /**
     * Created-at timestamp.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TransactionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Is-closed flag value.
     *
     * @var int|null
     */
    protected $isClosed;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Parent transaction business ID.
     *
     * @var string|null
     */
    protected $parentTxnId;
    /**
     * Payment ID.
     *
     * @var int|null
     */
    protected $paymentId;
    /**
     * Transaction ID.
     *
     * @var int|null
     */
    protected $transactionId;
    /**
     * Transaction business ID.
     *
     * @var string|null
     */
    protected $txnId;
    /**
     * Transaction type.
     *
     * @var string|null
     */
    protected $txnType;
    /**
     * Array of additional information. Otherwise, null.
     *
     * @return string[]|null
     */
    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }
    /**
     * Array of additional information. Otherwise, null.
     *
     * @param string[]|null $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(?array $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Array of child transactions.
     *
     * @return SalesDataTransactionInterface[]|null
     */
    public function getChildTransactions(): ?array
    {
        return $this->childTransactions;
    }
    /**
     * Array of child transactions.
     *
     * @param SalesDataTransactionInterface[]|null $childTransactions
     *
     * @return self
     */
    public function setChildTransactions(?array $childTransactions): self
    {
        $this->childTransactions = $childTransactions;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TransactionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TransactionInterface
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
     * Is-closed flag value.
     *
     * @return int|null
     */
    public function getIsClosed(): ?int
    {
        return $this->isClosed;
    }
    /**
     * Is-closed flag value.
     *
     * @param int|null $isClosed
     *
     * @return self
     */
    public function setIsClosed(?int $isClosed): self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Parent transaction business ID.
     *
     * @return string|null
     */
    public function getParentTxnId(): ?string
    {
        return $this->parentTxnId;
    }
    /**
     * Parent transaction business ID.
     *
     * @param string|null $parentTxnId
     *
     * @return self
     */
    public function setParentTxnId(?string $parentTxnId): self
    {
        $this->parentTxnId = $parentTxnId;
        return $this;
    }
    /**
     * Payment ID.
     *
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Payment ID.
     *
     * @param int|null $paymentId
     *
     * @return self
     */
    public function setPaymentId(?int $paymentId): self
    {
        $this->paymentId = $paymentId;
        return $this;
    }
    /**
     * Transaction ID.
     *
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Transaction ID.
     *
     * @param int|null $transactionId
     *
     * @return self
     */
    public function setTransactionId(?int $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Transaction business ID.
     *
     * @return string|null
     */
    public function getTxnId(): ?string
    {
        return $this->txnId;
    }
    /**
     * Transaction business ID.
     *
     * @param string|null $txnId
     *
     * @return self
     */
    public function setTxnId(?string $txnId): self
    {
        $this->txnId = $txnId;
        return $this;
    }
    /**
     * Transaction type.
     *
     * @return string|null
     */
    public function getTxnType(): ?string
    {
        return $this->txnType;
    }
    /**
     * Transaction type.
     *
     * @param string|null $txnType
     *
     * @return self
     */
    public function setTxnType(?string $txnType): self
    {
        $this->txnType = $txnType;
        return $this;
    }
}
