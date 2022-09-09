<?php

namespace Kiboko\Magento\V2_1\Model;

class V1SharedCatalogIdUnassignProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataProductInterface[]|null
     */
    protected $products;
    /**
     *
     *
     * @return CatalogDataProductInterface[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }
    /**
     *
     *
     * @param CatalogDataProductInterface[]|null $products
     *
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        return $this;
    }
}
