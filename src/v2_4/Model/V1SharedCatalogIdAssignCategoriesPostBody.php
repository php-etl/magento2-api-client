<?php

namespace Kiboko\Magento\V2_4\Model;

class V1SharedCatalogIdAssignCategoriesPostBody
{
    /**
     *
     *
     * @var CatalogDataCategoryInterface[]|null
     */
    protected $categories;
    /**
     *
     *
     * @return CatalogDataCategoryInterface[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    /**
     *
     *
     * @param CatalogDataCategoryInterface[]|null $categories
     *
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }
}
