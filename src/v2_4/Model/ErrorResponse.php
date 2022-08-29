<?php

namespace Kiboko\Magento\v2_4\Model;

class ErrorResponse
{
    /**
     * Error message
     *
     * @var string
     */
    protected $message;
    /**
     * Errors list
     *
     * @var ErrorErrorsItem[]
     */
    protected $errors;
    /**
     * Error code
     *
     * @var int
     */
    protected $code;
    /**
     * Error parameters list
     *
     * @var ErrorParametersItem[]
     */
    protected $parameters;
    /**
     * Stack trace
     *
     * @var string
     */
    protected $trace;
    /**
     * Error message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Error message
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Errors list
     *
     * @return ErrorErrorsItem[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    /**
     * Errors list
     *
     * @param ErrorErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Error code
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }
    /**
     * Error code
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Error parameters list
     *
     * @return ErrorParametersItem[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * Error parameters list
     *
     * @param ErrorParametersItem[] $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Stack trace
     *
     * @return string
     */
    public function getTrace(): string
    {
        return $this->trace;
    }
    /**
     * Stack trace
     *
     * @param string $trace
     *
     * @return self
     */
    public function setTrace(string $trace): self
    {
        $this->trace = $trace;
        return $this;
    }
}
