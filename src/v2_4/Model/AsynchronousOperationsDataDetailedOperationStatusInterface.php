<?php

namespace Kiboko\Magento\V2_4\Model;

class AsynchronousOperationsDataDetailedOperationStatusInterface
{
    /**
     * Bulk uuid
     *
     * @var string
     */
    protected $bulkUuid;
    /**
     * Error code
     *
     * @var int
     */
    protected $errorCode;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Result message
     *
     * @var string
     */
    protected $resultMessage;
    /**
     * Serialized Data
     *
     * @var string
     */
    protected $resultSerializedData;
    /**
     * Data
     *
     * @var string
     */
    protected $serializedData;
    /**
     * Operation status
     *
     * @var int
     */
    protected $status;
    /**
     * Queue Topic
     *
     * @var string
     */
    protected $topicName;
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
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
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
}
