<?php

namespace Kiboko\Magento\Model;

class V1InventoryStockSourceLinksPostBody
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
     * @var InventoryApiDataStockSourceLinkInterface[]|null
     */
    protected $links;
    /**
     * 
     *
     * @return InventoryApiDataStockSourceLinkInterface[]|null
     */
    public function getLinks() : ?array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param InventoryApiDataStockSourceLinkInterface[]|null $links
     *
     * @return self
     */
    public function setLinks(?array $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}