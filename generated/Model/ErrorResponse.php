<?php

namespace Kiboko\Magento\Model;

class ErrorResponse
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
     * Errors list
     *
     * @var ErrorErrorsItem[]|null
     */
    protected $errors;
    /**
     * Error code
     *
     * @var int|null
     */
    protected $code;
    /**
     * Error parameters list
     *
     * @var ErrorParametersItem[]|null
     */
    protected $parameters;
    /**
     * Stack trace
     *
     * @var string|null
     */
    protected $trace;
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
     * Errors list
     *
     * @return ErrorErrorsItem[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * Errors list
     *
     * @param ErrorErrorsItem[]|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
    /**
     * Error code
     *
     * @return int|null
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * Error code
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
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
    /**
     * Stack trace
     *
     * @return string|null
     */
    public function getTrace() : ?string
    {
        return $this->trace;
    }
    /**
     * Stack trace
     *
     * @param string|null $trace
     *
     * @return self
     */
    public function setTrace(?string $trace) : self
    {
        $this->initialized['trace'] = true;
        $this->trace = $trace;
        return $this;
    }
}