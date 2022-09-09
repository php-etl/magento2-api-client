<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CategoriesIdPutBody
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
