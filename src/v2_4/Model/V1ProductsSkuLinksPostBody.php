<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsSkuLinksPostBody
{
    /**
     *
     *
     * @var CatalogDataProductLinkInterface[]|null
     */
    protected $items;
    /**
     *
     *
     * @return CatalogDataProductLinkInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param CatalogDataProductLinkInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
}
