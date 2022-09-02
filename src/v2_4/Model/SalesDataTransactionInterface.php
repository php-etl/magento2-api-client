<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataTransactionInterface
{
    /**
     * Array of additional information. Otherwise, null.
     *
     * @var string[]
     */
    protected $additionalInformation;
    /**
     * Array of child transactions.
     *
     * @var SalesDataTransactionInterface[]
     */
    protected $childTransactions;
    /**
     * Created-at timestamp.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\TransactionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Is-closed flag value.
     *
     * @var int
     */
    protected $isClosed;
    /**
     * Order ID.
     *
     * @var int
     */
    protected $orderId;
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @var int
     */
    protected $parentId;
    /**
     * Parent transaction business ID.
     *
     * @var string
     */
    protected $parentTxnId;
    /**
     * Payment ID.
     *
     * @var int
     */
    protected $paymentId;
    /**
     * Transaction ID.
     *
     * @var int
     */
    protected $transactionId;
    /**
     * Transaction business ID.
     *
     * @var string
     */
    protected $txnId;
    /**
     * Transaction type.
     *
     * @var string
     */
    protected $txnType;
    /**
     * Array of additional information. Otherwise, null.
     *
     * @return string[]
     */
    public function getAdditionalInformation(): array
    {
        return $this->additionalInformation;
    }
    /**
     * Array of additional information. Otherwise, null.
     *
     * @param string[] $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Array of child transactions.
     *
     * @return SalesDataTransactionInterface[]
     */
    public function getChildTransactions(): array
    {
        return $this->childTransactions;
    }
    /**
     * Array of child transactions.
     *
     * @param SalesDataTransactionInterface[] $childTransactions
     *
     * @return self
     */
    public function setChildTransactions(array $childTransactions): self
    {
        $this->childTransactions = $childTransactions;
        return $this;
    }
    /**
     * Created-at timestamp.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created-at timestamp.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
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
     * @return int
     */
    public function getIsClosed(): int
    {
        return $this->isClosed;
    }
    /**
     * Is-closed flag value.
     *
     * @param int $isClosed
     *
     * @return self
     */
    public function setIsClosed(int $isClosed): self
    {
        $this->isClosed = $isClosed;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * The parent ID for the transaction. Otherwise, null.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Parent transaction business ID.
     *
     * @return string
     */
    public function getParentTxnId(): string
    {
        return $this->parentTxnId;
    }
    /**
     * Parent transaction business ID.
     *
     * @param string $parentTxnId
     *
     * @return self
     */
    public function setParentTxnId(string $parentTxnId): self
    {
        $this->parentTxnId = $parentTxnId;
        return $this;
    }
    /**
     * Payment ID.
     *
     * @return int
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }
    /**
     * Payment ID.
     *
     * @param int $paymentId
     *
     * @return self
     */
    public function setPaymentId(int $paymentId): self
    {
        $this->paymentId = $paymentId;
        return $this;
    }
    /**
     * Transaction ID.
     *
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }
    /**
     * Transaction ID.
     *
     * @param int $transactionId
     *
     * @return self
     */
    public function setTransactionId(int $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Transaction business ID.
     *
     * @return string
     */
    public function getTxnId(): string
    {
        return $this->txnId;
    }
    /**
     * Transaction business ID.
     *
     * @param string $txnId
     *
     * @return self
     */
    public function setTxnId(string $txnId): self
    {
        $this->txnId = $txnId;
        return $this;
    }
    /**
     * Transaction type.
     *
     * @return string
     */
    public function getTxnType(): string
    {
        return $this->txnType;
    }
    /**
     * Transaction type.
     *
     * @param string $txnType
     *
     * @return self
     */
    public function setTxnType(string $txnType): self
    {
        $this->txnType = $txnType;
        return $this;
    }
}
