<?php

namespace Kiboko\Magento\v2_1\Model;

class AsynchronousOperationsDataBulkOperationsStatusInterface
{
    /**
     * Bulk uuid
     *
     * @var string
     */
    protected $bulkId;
    /**
     * Bulk description
     *
     * @var string
     */
    protected $description;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\BulkSummaryInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Total number of operations scheduled in scope of this bulk
     *
     * @var int
     */
    protected $operationCount;
    /**
     * List of operation with statuses (short data).
     *
     * @var AsynchronousOperationsDataSummaryOperationStatusInterface[]
     */
    protected $operationsList;
    /**
     * Bulk scheduled time
     *
     * @var string
     */
    protected $startTime;
    /**
     * User id
     *
     * @var int
     */
    protected $userId;
    /**
     * Bulk uuid
     *
     * @return string
     */
    public function getBulkId(): string
    {
        return $this->bulkId;
    }
    /**
     * Bulk uuid
     *
     * @param string $bulkId
     *
     * @return self
     */
    public function setBulkId(string $bulkId): self
    {
        $this->bulkId = $bulkId;
        return $this;
    }
    /**
     * Bulk description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Bulk description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\BulkSummaryInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\BulkSummaryInterface
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
     * Total number of operations scheduled in scope of this bulk
     *
     * @return int
     */
    public function getOperationCount(): int
    {
        return $this->operationCount;
    }
    /**
     * Total number of operations scheduled in scope of this bulk
     *
     * @param int $operationCount
     *
     * @return self
     */
    public function setOperationCount(int $operationCount): self
    {
        $this->operationCount = $operationCount;
        return $this;
    }
    /**
     * List of operation with statuses (short data).
     *
     * @return AsynchronousOperationsDataSummaryOperationStatusInterface[]
     */
    public function getOperationsList(): array
    {
        return $this->operationsList;
    }
    /**
     * List of operation with statuses (short data).
     *
     * @param AsynchronousOperationsDataSummaryOperationStatusInterface[] $operationsList
     *
     * @return self
     */
    public function setOperationsList(array $operationsList): self
    {
        $this->operationsList = $operationsList;
        return $this;
    }
    /**
     * Bulk scheduled time
     *
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }
    /**
     * Bulk scheduled time
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * User id
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
    /**
     * User id
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
}
