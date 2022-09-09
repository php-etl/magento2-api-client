<?php

namespace Kiboko\Magento\V2_4\Model;

class CustomerDataValidationResultsInterface
{
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @var string[]|null
     */
    protected $messages;
    /**
     * If the provided data is valid.
     *
     * @var bool|null
     */
    protected $valid;
    /**
     * Error messages as array in case of validation failure, else return empty array.
     *
     * @return string[]|null
     */
    public function getMessages(): ?array
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
    public function setMessages(?array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }
    /**
     * If the provided data is valid.
     *
     * @return bool|null
     */
    public function getValid(): ?bool
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
    public function setValid(?bool $valid): self
    {
        $this->valid = $valid;
        return $this;
    }
}
