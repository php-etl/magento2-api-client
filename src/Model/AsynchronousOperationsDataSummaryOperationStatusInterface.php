<?php

namespace Kiboko\Magento\Model;

class AsynchronousOperationsDataSummaryOperationStatusInterface
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
     * Id
     *
     * @var int|null
     */
    protected $id;
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