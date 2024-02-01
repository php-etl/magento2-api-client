<?php

namespace Kiboko\Magento\Model;

class V1CategoriesCategoryIdProductsPutBody
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
     * @var CatalogDataCategoryProductLinkInterface|null
     */
    protected $productLink;
    /**
     * 
     *
     * @return CatalogDataCategoryProductLinkInterface|null
     */
    public function getProductLink() : ?CatalogDataCategoryProductLinkInterface
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
    public function setProductLink(?CatalogDataCategoryProductLinkInterface $productLink) : self
    {
        $this->initialized['productLink'] = true;
        $this->productLink = $productLink;
        return $this;
    }
}