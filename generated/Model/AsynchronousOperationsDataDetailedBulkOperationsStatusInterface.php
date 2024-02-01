<?php

namespace Kiboko\Magento\Model;

class AsynchronousOperationsDataDetailedBulkOperationsStatusInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Operations list.
     *
     * @var AsynchronousOperationsDataOperationInterface[]|null
     */
    protected $operationsList;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\BulkSummaryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * User type
     *
     * @var int|null
     */
    protected $userType;
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
     * Total number of operations scheduled in scope of this bulk
     *
     * @var int|null
     */
    protected $operationCount;
    /**
     * Operations list.
     *
     * @return AsynchronousOperationsDataOperationInterface[]|null
     */
    public function getOperationsList() : ?array
    {
        return $this->operationsList;
    }
    /**
     * Operations list.
     *
     * @param AsynchronousOperationsDataOperationInterface[]|null $operationsList
     *
     * @return self
     */
    public function setOperationsList(?array $operationsList) : self
    {
        $this->initialized['operationsList'] = true;
        $this->operationsList = $operationsList;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * User type
     *
     * @return int|null
     */
    public function getUserType() : ?int
    {
        return $this->userType;
    }
    /**
     * User type
     *
     * @param int|null $userType
     *
     * @return self
     */
    public function setUserType(?int $userType) : self
    {
        $this->initialized['userType'] = true;
        $this->userType = $userType;
        return $this;
    }
    /**
     * Bulk uuid
     *
     * @return string|null
     */
    public function getBulkId() : ?string
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
    public function setBulkId(?string $bulkId) : self
    {
        $this->initialized['bulkId'] = true;
        $this->bulkId = $bulkId;
        return $this;
    }
    /**
     * Bulk description
     *
     * @return string|null
     */
    public function getDescription() : ?string
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
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Bulk scheduled time
     *
     * @return string|null
     */
    public function getStartTime() : ?string
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
    public function setStartTime(?string $startTime) : self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * User id
     *
     * @return int|null
     */
    public function getUserId() : ?int
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
    public function setUserId(?int $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * Total number of operations scheduled in scope of this bulk
     *
     * @return int|null
     */
    public function getOperationCount() : ?int
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
    public function setOperationCount(?int $operationCount) : self
    {
        $this->initialized['operationCount'] = true;
        $this->operationCount = $operationCount;
        return $this;
    }
}