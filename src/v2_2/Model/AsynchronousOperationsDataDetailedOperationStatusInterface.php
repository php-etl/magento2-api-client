<?php

namespace Kiboko\Magento\V2_2\Model;

class AsynchronousOperationsDataDetailedOperationStatusInterface
{
    /**
     * Bulk uuid
     *
     * @var string|null
     */
    protected $bulkUuid;
    /**
     * Error code
     *
     * @var int|null
     */
    protected $errorCode;
    /**
     * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Result message
     *
     * @var string|null
     */
    protected $resultMessage;
    /**
     * Serialized Data
     *
     * @var string|null
     */
    protected $resultSerializedData;
    /**
     * Data
     *
     * @var string|null
     */
    protected $serializedData;
    /**
     * Operation status
     *
     * @var int|null
     */
    protected $status;
    /**
     * Queue Topic
     *
     * @var string|null
     */
    protected $topicName;
    /**
     * Bulk uuid
     *
     * @return string|null
     */
    public function getBulkUuid(): ?string
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
    public function setBulkUuid(?string $bulkUuid): self
    {
        $this->bulkUuid = $bulkUuid;
        return $this;
    }
    /**
     * Error code
     *
     * @return int|null
     */
    public function getErrorCode(): ?int
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
    public function setErrorCode(?int $errorCode): self
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
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Result message
     *
     * @return string|null
     */
    public function getResultMessage(): ?string
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
    public function setResultMessage(?string $resultMessage): self
    {
        $this->resultMessage = $resultMessage;
        return $this;
    }
    /**
     * Serialized Data
     *
     * @return string|null
     */
    public function getResultSerializedData(): ?string
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
    public function setResultSerializedData(?string $resultSerializedData): self
    {
        $this->resultSerializedData = $resultSerializedData;
        return $this;
    }
    /**
     * Data
     *
     * @return string|null
     */
    public function getSerializedData(): ?string
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
    public function setSerializedData(?string $serializedData): self
    {
        $this->serializedData = $serializedData;
        return $this;
    }
    /**
     * Operation status
     *
     * @return int|null
     */
    public function getStatus(): ?int
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
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Queue Topic
     *
     * @return string|null
     */
    public function getTopicName(): ?string
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
    public function setTopicName(?string $topicName): self
    {
        $this->topicName = $topicName;
        return $this;
    }
}
