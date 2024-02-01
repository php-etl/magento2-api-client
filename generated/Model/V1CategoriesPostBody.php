<?php

namespace Kiboko\Magento\Model;

class V1CategoriesPostBody
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
     * Category data interface.
     *
     * @var CatalogDataCategoryInterface|null
     */
    protected $category;
    /**
     * Category data interface.
     *
     * @return CatalogDataCategoryInterface|null
     */
    public function getCategory() : ?CatalogDataCategoryInterface
    {
        return $this->category;
    }
    /**
     * Category data interface.
     *
     * @param CatalogDataCategoryInterface|null $category
     *
     * @return self
     */
    public function setCategory(?CatalogDataCategoryInterface $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
}