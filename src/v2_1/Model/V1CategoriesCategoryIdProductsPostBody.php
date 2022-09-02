<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CategoriesCategoryIdProductsPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryProductLinkInterface
     */
    protected $productLink;
    /**
     *
     *
     * @return CatalogDataCategoryProductLinkInterface
     */
    public function getProductLink(): CatalogDataCategoryProductLinkInterface
    {
        return $this->productLink;
    }
    /**
     *
     *
     * @param CatalogDataCategoryProductLinkInterface $productLink
     *
     * @return self
     */
    public function setProductLink(CatalogDataCategoryProductLinkInterface $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }
}
