<?php

namespace Kiboko\Magento\V2_1\Model;

class ErrorResponse
{
    /**
     * Error code
     *
     * @var int|null
     */
    protected $code;
    /**
     * Errors list
     *
     * @var ErrorErrorsItem[]|null
     */
    protected $errors;
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
     * Stack trace
     *
     * @var string|null
     */
    protected $trace;
    /**
     * Error code
     *
     * @return int|null
     */
    public function getCode(): ?int
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
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Errors list
     *
     * @return ErrorErrorsItem[]|null
     */
    public function getErrors(): ?array
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
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Error message
     *
     * @return string|null
     */
    public function getMessage(): ?string
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
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Error parameters list
     *
     * @return ErrorParametersItem[]|null
     */
    public function getParameters(): ?array
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
    public function setParameters(?array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Stack trace
     *
     * @return string|null
     */
    public function getTrace(): ?string
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
    public function setTrace(?string $trace): self
    {
        $this->trace = $trace;
        return $this;
    }
}
