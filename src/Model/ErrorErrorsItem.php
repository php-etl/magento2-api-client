<?php

namespace Kiboko\Magento\Model;

class ErrorErrorsItem
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
     * Error message
     *
     * @var string|null
     */
    protected $message;
    /**
     * Error parameters list
     *
     * @var ErrorParametersItem[]|null
     */
    protected $parameters;
    /**
     * Error message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Error message
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Error parameters list
     *
     * @return ErrorParametersItem[]|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * Error parameters list
     *
     * @param ErrorParametersItem[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}