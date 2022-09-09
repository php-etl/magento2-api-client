<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataCategoryLinkInterface
{
    /**
     * Category id
     *
     * @var string|null
     */
    protected $categoryId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int|null
     */
    protected $position;
    /**
     * Category id
     *
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }
    /**
     * Category id
     *
     * @param string|null $categoryId
     *
     * @return self
     */
    public function setCategoryId(?string $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     *
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}
