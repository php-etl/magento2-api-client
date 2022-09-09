<?php

namespace Kiboko\Magento\V2_4\Model;

class CustomerDataOptionInterface
{
    /**
     * Option label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Nested options
     *
     * @var CustomerDataOptionInterface[]|null
     */
    protected $options;
    /**
     * Option value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Option label
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Nested options
     *
     * @return CustomerDataOptionInterface[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * Nested options
     *
     * @param CustomerDataOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Option value
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Option value
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
