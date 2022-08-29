<?php

namespace Kiboko\Magento\v2_4\Model;

class CustomerDataValidationRuleInterface
{
    /**
     * Validation rule name
     *
     * @var string
     */
    protected $name;
    /**
     * Validation rule value
     *
     * @var string
     */
    protected $value;
    /**
     * Validation rule name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Validation rule name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Validation rule value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Validation rule value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
