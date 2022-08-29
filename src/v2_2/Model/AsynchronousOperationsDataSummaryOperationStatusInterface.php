<?php

namespace Kiboko\Magento\v2_2\Model;

class AsynchronousOperationsDataSummaryOperationStatusInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $id;
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
