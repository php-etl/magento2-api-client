<?php

namespace Kiboko\Magento\V2_3\Model;

class AsynchronousOperationsDataBulkOperationsStatusInterface
{
    /**
     * Bulk uuid
     *
     * @var string|null
     */
    protected $bulkId;
    /**
     * Bulk description
     *
     * @var string|null
     */
    protected $description;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\BulkSummaryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Total number of operations scheduled in scope of this bulk
     *
     * @var int|null
     */
    protected $operationCount;
    /**
     * List of operation with statuses (short data).
     *
     * @var AsynchronousOperationsDataSummaryOperationStatusInterface[]|null
     */
    protected $operationsList;
    /**
     * Bulk scheduled time
     *
     * @var string|null
     */
    protected $startTime;
    /**
     * User id
     *
     * @var int|null
     */
    protected $userId;
    /**
     * Bulk uuid
     *
     * @return string|null
     */
    public function getBulkId(): ?string
    {
        return $this->bulkId;
    }
    /**
     * Bulk uuid
     *
     * @param string|null $bulkId
     *
     * @return self
     */
    public function setBulkId(?string $bulkId): self
    {
        $this->bulkId = $bulkId;
        return $this;
    }
    /**
     * Bulk description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Bulk description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
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
     * @return int|null
     */
    public function getOperationCount(): ?int
    {
        return $this->operationCount;
    }
    /**
     * Total number of operations scheduled in scope of this bulk
     *
     * @param int|null $operationCount
     *
     * @return self
     */
    public function setOperationCount(?int $operationCount): self
    {
        $this->operationCount = $operationCount;
        return $this;
    }
    /**
     * List of operation with statuses (short data).
     *
     * @return AsynchronousOperationsDataSummaryOperationStatusInterface[]|null
     */
    public function getOperationsList(): ?array
    {
        return $this->operationsList;
    }
    /**
     * List of operation with statuses (short data).
     *
     * @param AsynchronousOperationsDataSummaryOperationStatusInterface[]|null $operationsList
     *
     * @return self
     */
    public function setOperationsList(?array $operationsList): self
    {
        $this->operationsList = $operationsList;
        return $this;
    }
    /**
     * Bulk scheduled time
     *
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Bulk scheduled time
     *
     * @param string|null $startTime
     *
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * User id
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * User id
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
}
