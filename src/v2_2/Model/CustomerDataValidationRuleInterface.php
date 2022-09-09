<?php

namespace Kiboko\Magento\V2_2\Model;

class CustomerDataValidationRuleInterface
{
    /**
     * Validation rule name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Validation rule value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Validation rule name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Validation rule name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Validation rule value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Validation rule value
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
