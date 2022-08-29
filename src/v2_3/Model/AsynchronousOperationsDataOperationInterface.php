<?php

namespace Kiboko\Magento\v2_3\Model;

class AsynchronousOperationsDataOperationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @var AsynchronousOperationsDataOperationExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Bulk uuid
     *
     * @var string
     */
    protected $bulkUuid;
    /**
     * Queue Topic
     *
     * @var string
     */
    protected $topicName;
    /**
     * Data
     *
     * @var string
     */
    protected $serializedData;
    /**
     * Serialized Data
     *
     * @var string
     */
    protected $resultSerializedData;
    /**
     * Operation status
     *
     * @var int
     */
    protected $status;
    /**
     * Result message
     *
     * @var string
     */
    protected $resultMessage;
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @return AsynchronousOperationsDataOperationExtensionInterface
     */
    public function getExtensionAttributes(): AsynchronousOperationsDataOperationExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @param AsynchronousOperationsDataOperationExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(AsynchronousOperationsDataOperationExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Bulk uuid
     *
     * @return string
     */
    public function getBulkUuid(): string
    {
        return $this->bulkUuid;
    }
    /**
     * Bulk uuid
     *
     * @param string $bulkUuid
     *
     * @return self
     */
    public function setBulkUuid(string $bulkUuid): self
    {
        $this->bulkUuid = $bulkUuid;
        return $this;
    }
    /**
     * Queue Topic
     *
     * @return string
     */
    public function getTopicName(): string
    {
        return $this->topicName;
    }
    /**
     * Queue Topic
     *
     * @param string $topicName
     *
     * @return self
     */
    public function setTopicName(string $topicName): self
    {
        $this->topicName = $topicName;
        return $this;
    }
    /**
     * Data
     *
     * @return string
     */
    public function getSerializedData(): string
    {
        return $this->serializedData;
    }
    /**
     * Data
     *
     * @param string $serializedData
     *
     * @return self
     */
    public function setSerializedData(string $serializedData): self
    {
        $this->serializedData = $serializedData;
        return $this;
    }
    /**
     * Serialized Data
     *
     * @return string
     */
    public function getResultSerializedData(): string
    {
        return $this->resultSerializedData;
    }
    /**
     * Serialized Data
     *
     * @param string $resultSerializedData
     *
     * @return self
     */
    public function setResultSerializedData(string $resultSerializedData): self
    {
        $this->resultSerializedData = $resultSerializedData;
        return $this;
    }
    /**
     * Operation status
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Operation status
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Result message
     *
     * @return string
     */
    public function getResultMessage(): string
    {
        return $this->resultMessage;
    }
    /**
     * Result message
     *
     * @param string $resultMessage
     *
     * @return self
     */
    public function setResultMessage(string $resultMessage): self
    {
        $this->resultMessage = $resultMessage;
        return $this;
    }
    /**
     * Error code
     *
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }
    /**
     * Error code
     *
     * @param int $errorCode
     *
     * @return self
     */
    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }
}
