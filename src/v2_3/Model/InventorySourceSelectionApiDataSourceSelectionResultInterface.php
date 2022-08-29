<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySourceSelectionApiDataSourceSelectionResultInterface
{
    /**
     * 
     *
     * @var InventorySourceSelectionApiDataSourceSelectionItemInterface[]
     */
    protected $sourceSelectionItems;
    /**
     * 
     *
     * @var bool
     */
    protected $shippable;
    /**
     * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\SourceSelectionResultInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return InventorySourceSelectionApiDataSourceSelectionItemInterface[]
     */
    public function getSourceSelectionItems() : array
    {
        return $this->sourceSelectionItems;
    }
    /**
     * 
     *
     * @param InventorySourceSelectionApiDataSourceSelectionItemInterface[] $sourceSelectionItems
     *
     * @return self
     */
    public function setSourceSelectionItems(array $sourceSelectionItems) : self
    {
        $this->sourceSelectionItems = $sourceSelectionItems;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getShippable() : bool
    {
        return $this->shippable;
    }
    /**
     * 
     *
     * @param bool $shippable
     *
     * @return self
     */
    public function setShippable(bool $shippable) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}