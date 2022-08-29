<?php

namespace Kiboko\Magento\v2_2\Model;

class V1SharedCatalogIdUnassignProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataProductInterface[]
     */
    protected $products;
    /**
     *
     *
     * @return CatalogDataProductInterface[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     *
     *
     * @param CatalogDataProductInterface[] $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;
        return $this;
    }
}
