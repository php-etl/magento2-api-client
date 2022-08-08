<?php

namespace Kiboko\Magento\V2\Model;

class EavDataAttributeOptionInterface
{
    /**
     * Option label
     *
     * @var string
     */
    protected $label;
    /**
     * Option value
     *
     * @var string
     */
    protected $value;
    /**
     * Option order
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Default
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Option label for store scopes
     *
     * @var EavDataAttributeOptionLabelInterface[]
     */
    protected $storeLabels;
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
    /**
     * Option order
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Option order
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Default
     *
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * Default
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Option label for store scopes
     *
     * @return EavDataAttributeOptionLabelInterface[]
     */
    public function getStoreLabels(): array
    {
        return $this->storeLabels;
    }
    /**
     * Option label for store scopes
     *
     * @param EavDataAttributeOptionLabelInterface[] $storeLabels
     *
     * @return self
     */
    public function setStoreLabels(array $storeLabels): self
    {
        $this->storeLabels = $storeLabels;
        return $this;
    }
}
