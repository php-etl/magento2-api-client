<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CategoriesPostBody
{
    /**
     * Category data interface.
     *
     * @var CatalogDataCategoryInterface
     */
    protected $category;
    /**
     * Category data interface.
     *
     * @return CatalogDataCategoryInterface
     */
    public function getCategory(): CatalogDataCategoryInterface
    {
        return $this->category;
    }
    /**
     * Category data interface.
     *
     * @param CatalogDataCategoryInterface $category
     *
     * @return self
     */
    public function setCategory(CatalogDataCategoryInterface $category): self
    {
        $this->category = $category;
        return $this;
    }
}
