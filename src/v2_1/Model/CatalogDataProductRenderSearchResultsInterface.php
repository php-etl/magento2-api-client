<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductRenderSearchResultsInterface
{
    /**
     * List of products rendered information
     *
     * @var CatalogDataProductRenderInterface[]
     */
    protected $items;
    /**
     * List of products rendered information
     *
     * @return CatalogDataProductRenderInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of products rendered information
     *
     * @param CatalogDataProductRenderInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
}
