<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductRenderSearchResultsInterface
{
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
    public function getItems(): ?array
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
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
}
