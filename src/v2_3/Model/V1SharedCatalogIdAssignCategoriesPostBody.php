<?php

namespace Kiboko\Magento\v2_3\Model;

class V1SharedCatalogIdAssignCategoriesPostBody
{
    /**
     * 
     *
     * @var CatalogDataCategoryInterface[]
     */
    protected $categories;
    /**
     * 
     *
     * @return CatalogDataCategoryInterface[]
     */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param CatalogDataCategoryInterface[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
}