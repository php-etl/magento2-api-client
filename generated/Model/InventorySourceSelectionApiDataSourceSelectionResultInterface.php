<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataSourceSelectionResultInterface
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
     * 
     *
     * @var InventorySourceSelectionApiDataSourceSelectionItemInterface[]|null
     */
    protected $sourceSelectionItems;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shippable;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionResultInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return InventorySourceSelectionApiDataSourceSelectionItemInterface[]|null
     */
    public function getSourceSelectionItems() : ?array
    {
        return $this->sourceSelectionItems;
    }
    /**
     * 
     *
     * @param InventorySourceSelectionApiDataSourceSelectionItemInterface[]|null $sourceSelectionItems
     *
     * @return self
     */
    public function setSourceSelectionItems(?array $sourceSelectionItems) : self
    {
        $this->initialized['sourceSelectionItems'] = true;
        $this->sourceSelectionItems = $sourceSelectionItems;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShippable() : ?bool
    {
        return $this->shippable;
    }
    /**
     * 
     *
     * @param bool|null $shippable
     *
     * @return self
     */
    public function setShippable(?bool $shippable) : self
    {
        $this->initialized['shippable'] = true;
        $this->shippable = $shippable;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionResultInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionResultInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}