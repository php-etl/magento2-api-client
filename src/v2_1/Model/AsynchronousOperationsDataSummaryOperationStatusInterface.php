<?php

namespace Kiboko\Magento\V2_1\Model;

class AsynchronousOperationsDataSummaryOperationStatusInterface
{
    /**
     * Error code
     *
     * @var int|null
     */
    protected $errorCode;
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
     * Operation status
     *
     * @var int|null
     */
    protected $status;
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
}
