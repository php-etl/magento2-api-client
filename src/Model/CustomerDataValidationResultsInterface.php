<?php

namespace Kiboko\Magento\Model;

class CustomerDataValidationResultsInterface
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
     * If the provided data is valid.
     *
     * @var bool|null
     */
    protected $valid;
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @var string[]|null
     */
    protected $messages;
    /**
     * If the provided data is valid.
     *
     * @return bool|null
     */
    public function getValid() : ?bool
    {
        return $this->valid;
    }
    /**
     * If the provided data is valid.
     *
     * @param bool|null $valid
     *
     * @return self
     */
    public function setValid(?bool $valid) : self
    {
        $this->initialized['valid'] = true;
        $this->valid = $valid;
        return $this;
    }
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @return string[]|null
     */
    public function getMessages() : ?array
    {
        return $this->messages;
    }
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @param string[]|null $messages
     *
     * @return self
     */
    public function setMessages(?array $messages) : self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
}