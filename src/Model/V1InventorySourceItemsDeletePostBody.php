<?php

namespace Kiboko\Magento\Model;

class V1InventorySourceItemsDeletePostBody
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
     * @var InventoryApiDataSourceItemInterface[]|null
     */
    protected $sourceItems;
    /**
     * 
     *
     * @return InventoryApiDataSourceItemInterface[]|null
     */
    public function getSourceItems() : ?array
    {
        return $this->sourceItems;
    }
    /**
     * 
     *
     * @param InventoryApiDataSourceItemInterface[]|null $sourceItems
     *
     * @return self
     */
    public function setSourceItems(?array $sourceItems) : self
    {
        $this->initialized['sourceItems'] = true;
        $this->sourceItems = $sourceItems;
        return $this;
    }
}