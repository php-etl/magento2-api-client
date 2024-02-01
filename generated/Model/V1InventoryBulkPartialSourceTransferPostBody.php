<?php

namespace Kiboko\Magento\Model;

class V1InventoryBulkPartialSourceTransferPostBody
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
     * @var string|null
     */
    protected $originSourceCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $destinationSourceCode;
    /**
     * 
     *
     * @var InventoryCatalogApiDataPartialInventoryTransferItemInterface[]|null
     */
    protected $items;
    /**
     * 
     *
     * @return string|null
     */
    public function getOriginSourceCode() : ?string
    {
        return $this->originSourceCode;
    }
    /**
     * 
     *
     * @param string|null $originSourceCode
     *
     * @return self
     */
    public function setOriginSourceCode(?string $originSourceCode) : self
    {
        $this->initialized['originSourceCode'] = true;
        $this->originSourceCode = $originSourceCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestinationSourceCode() : ?string
    {
        return $this->destinationSourceCode;
    }
    /**
     * 
     *
     * @param string|null $destinationSourceCode
     *
     * @return self
     */
    public function setDestinationSourceCode(?string $destinationSourceCode) : self
    {
        $this->initialized['destinationSourceCode'] = true;
        $this->destinationSourceCode = $destinationSourceCode;
        return $this;
    }
    /**
     * 
     *
     * @return InventoryCatalogApiDataPartialInventoryTransferItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param InventoryCatalogApiDataPartialInventoryTransferItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}