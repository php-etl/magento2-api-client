<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeOptionInterface
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
     * Option label
     *
     * @var string|null
     */
    protected $label;
    /**
     * Option value
     *
     * @var string|null
     */
    protected $value;
    /**
     * Option order
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Default
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * Option label for store scopes
     *
     * @var EavDataAttributeOptionLabelInterface[]|null
     */
    protected $storeLabels;
    /**
     * Option label
     *
     * @return string|null
     */
    public function getLabel() : ?string
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
    public function setLabel(?string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * Option value
     *
     * @return string|null
     */
    public function getValue() : ?string
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
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Option order
     *
     * @return int|null
     */
    public function getSortOrder() : ?int
    {
        return $this->sortOrder;
    }
    /**
     * Option order
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Default
     *
     * @return bool|null
     */
    public function getIsDefault() : ?bool
    {
        return $this->isDefault;
    }
    /**
     * Default
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault) : self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Option label for store scopes
     *
     * @return EavDataAttributeOptionLabelInterface[]|null
     */
    public function getStoreLabels() : ?array
    {
        return $this->storeLabels;
    }
    /**
     * Option label for store scopes
     *
     * @param EavDataAttributeOptionLabelInterface[]|null $storeLabels
     *
     * @return self
     */
    public function setStoreLabels(?array $storeLabels) : self
    {
        $this->initialized['storeLabels'] = true;
        $this->storeLabels = $storeLabels;
        return $this;
    }
}