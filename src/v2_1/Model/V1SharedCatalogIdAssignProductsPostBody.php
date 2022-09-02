<?php

namespace Kiboko\Magento\V2_1\Model;

class V1SharedCatalogIdAssignProductsPostBody
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
