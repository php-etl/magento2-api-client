<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CategoriesCategoryIdProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryProductLinkInterface|null
     */
    protected $productLink;
    /**
     *
     *
     * @return CatalogDataCategoryProductLinkInterface|null
     */
    public function getProductLink(): ?CatalogDataCategoryProductLinkInterface
    {
        return $this->productLink;
    }
    /**
     *
     *
     * @param CatalogDataCategoryProductLinkInterface|null $productLink
     *
     * @return self
     */
    public function setProductLink(?CatalogDataCategoryProductLinkInterface $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }
}
