<?php

namespace Kiboko\Magento\V2_2\Model;

class CustomerDataOptionInterface
{
    /**
     * Option label
     *
     * @var string
     */
    protected $label;
    /**
     * Nested options
     *
     * @var CustomerDataOptionInterface[]
     */
    protected $options;
    /**
     * Option value
     *
     * @var string
     */
    protected $value;
    /**
     * Option label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Nested options
     *
     * @return CustomerDataOptionInterface[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * Nested options
     *
     * @param CustomerDataOptionInterface[] $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Option value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Option value
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
