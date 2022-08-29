<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CategoriesPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryInterface
     */
    protected $category;
    /**
     *
     *
     * @return CatalogDataCategoryInterface
     */
    public function getCategory(): CatalogDataCategoryInterface
    {
        return $this->category;
    }
    /**
     *
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
