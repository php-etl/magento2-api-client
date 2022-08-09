<?php

namespace Kiboko\Magento\V2\Model;

class CustomerDataValidationResultsInterface
{
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @var string[]
     */
    protected $messages;
    /**
     * If the provided data is valid.
     *
     * @var bool
     */
    protected $valid;
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @return string[]
     */
    public function getMessages() : array
    {
        return $this->messages;
    }
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @param string[] $messages
     *
     * @return self
     */
    public function setMessages(array $messages) : self
    {
        $this->messages = $messages;
        return $this;
    }
    /**
     * If the provided data is valid.
     *
     * @return bool
     */
    public function getValid() : bool
    {
        return $this->valid;
    }
    /**
     * If the provided data is valid.
     *
     * @param bool $valid
     *
     * @return self
     */
    public function setValid(bool $valid) : self
    {
        $this->valid = $valid;
        return $this;
    }
}