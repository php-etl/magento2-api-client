<?php

namespace Kiboko\Magento\Model;

class AsynchronousOperationsDataOperationInterface
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
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @var AsynchronousOperationsDataOperationExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Bulk uuid
     *
     * @var string|null
     */
    protected $bulkUuid;
    /**
     * Queue Topic
     *
     * @var string|null
     */
    protected $topicName;
    /**
     * Data
     *
     * @var string|null
     */
    protected $serializedData;
    /**
     * Serialized Data
     *
     * @var string|null
     */
    protected $resultSerializedData;
    /**
     * Operation status
     *
     * @var int|null
     */
    protected $status;
    /**
     * Result message
     *
     * @var string|null
     */
    protected $resultMessage;
    /**
     * Error code
     *
     * @var int|null
     */
    protected $errorCode;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @return AsynchronousOperationsDataOperationExtensionInterface|null
     */
    public function getExtensionAttributes() : ?AsynchronousOperationsDataOperationExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @param AsynchronousOperationsDataOperationExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?AsynchronousOperationsDataOperationExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Bulk uuid
     *
     * @return string|null
     */
    public function getBulkUuid() : ?string
    {
        return $this->bulkUuid;
    }
    /**
     * Bulk uuid
     *
     * @param string|null $bulkUuid
     *
     * @return self
     */
    public function setBulkUuid(?string $bulkUuid) : self
    {
        $this->initialized['bulkUuid'] = true;
        $this->bulkUuid = $bulkUuid;
        return $this;
    }
    /**
     * Queue Topic
     *
     * @return string|null
     */
    public function getTopicName() : ?string
    {
        return $this->topicName;
    }
    /**
     * Queue Topic
     *
     * @param string|null $topicName
     *
     * @return self
     */
    public function setTopicName(?string $topicName) : self
    {
        $this->initialized['topicName'] = true;
        $this->topicName = $topicName;
        return $this;
    }
    /**
     * Data
     *
     * @return string|null
     */
    public function getSerializedData() : ?string
    {
        return $this->serializedData;
    }
    /**
     * Data
     *
     * @param string|null $serializedData
     *
     * @return self
     */
    public function setSerializedData(?string $serializedData) : self
    {
        $this->initialized['serializedData'] = true;
        $this->serializedData = $serializedData;
        return $this;
    }
    /**
     * Serialized Data
     *
     * @return string|null
     */
    public function getResultSerializedData() : ?string
    {
        return $this->resultSerializedData;
    }
    /**
     * Serialized Data
     *
     * @param string|null $resultSerializedData
     *
     * @return self
     */
    public function setResultSerializedData(?string $resultSerializedData) : self
    {
        $this->initialized['resultSerializedData'] = true;
        $this->resultSerializedData = $resultSerializedData;
        return $this;
    }
    /**
     * Operation status
     *
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Operation status
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Result message
     *
     * @return string|null
     */
    public function getResultMessage() : ?string
    {
        return $this->resultMessage;
    }
    /**
     * Result message
     *
     * @param string|null $resultMessage
     *
     * @return self
     */
    public function setResultMessage(?string $resultMessage) : self
    {
        $this->initialized['resultMessage'] = true;
        $this->resultMessage = $resultMessage;
        return $this;
    }
    /**
     * Error code
     *
     * @return int|null
     */
    public function getErrorCode() : ?int
    {
        return $this->errorCode;
    }
    /**
     * Error code
     *
     * @param int|null $errorCode
     *
     * @return self
     */
    public function setErrorCode(?int $errorCode) : self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
}