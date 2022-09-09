<?php

namespace Kiboko\Magento\V2_3\Model;

class ErrorErrorsItem
{
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
}
