<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CategoriesPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryInterface|null
     */
    protected $category;
    /**
     *
     *
     * @return CatalogDataCategoryInterface|null
     */
    public function getCategory(): ?CatalogDataCategoryInterface
    {
        return $this->category;
    }
    /**
     *
     *
     * @param CatalogDataCategoryInterface|null $category
     *
     * @return self
     */
    public function setCategory(?CatalogDataCategoryInterface $category): self
    {
        $this->category = $category;
        return $this;
    }
}
