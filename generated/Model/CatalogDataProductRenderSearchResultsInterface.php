<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductRenderSearchResultsInterface
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
     * List of products rendered information
     *
     * @var CatalogDataProductRenderInterface[]|null
     */
    protected $items;
    /**
     * List of products rendered information
     *
     * @return CatalogDataProductRenderInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * List of products rendered information
     *
     * @param CatalogDataProductRenderInterface[]|null $items
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