<?php

namespace Kiboko\Magento\Model;

class SalesDataCreditmemoCreationArgumentsExtensionInterface
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
     * @var int[]|null
     */
    protected $returnToStockItems;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getReturnToStockItems() : ?array
    {
        return $this->returnToStockItems;
    }
    /**
     * 
     *
     * @param int[]|null $returnToStockItems
     *
     * @return self
     */
    public function setReturnToStockItems(?array $returnToStockItems) : self
    {
        $this->initialized['returnToStockItems'] = true;
        $this->returnToStockItems = $returnToStockItems;
        return $this;
    }
}