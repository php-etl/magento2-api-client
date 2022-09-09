<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataCategoryTreeInterface
{
    /**
     *
     *
     * @var CatalogDataCategoryTreeInterface[]|null
     */
    protected $childrenData;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     * Whether category is active
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Category level
     *
     * @var int|null
     */
    protected $level;
    /**
     * Category name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Parent category ID
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Category position
     *
     * @var int|null
     */
    protected $position;
    /**
     * Product count
     *
     * @var int|null
     */
    protected $productCount;
    /**
     *
     *
     * @return CatalogDataCategoryTreeInterface[]|null
     */
    public function getChildrenData(): ?array
    {
        return $this->childrenData;
    }
    /**
     *
     *
     * @param CatalogDataCategoryTreeInterface[]|null $childrenData
     *
     * @return self
     */
    public function setChildrenData(?array $childrenData): self
    {
        $this->childrenData = $childrenData;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Whether category is active
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Whether category is active
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Category level
     *
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }
    /**
     * Category level
     *
     * @param int|null $level
     *
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Category name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Category name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Parent category ID
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent category ID
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Category position
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Category position
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
    /**
     * Product count
     *
     * @return int|null
     */
    public function getProductCount(): ?int
    {
        return $this->productCount;
    }
    /**
     * Product count
     *
     * @param int|null $productCount
     *
     * @return self
     */
    public function setProductCount(?int $productCount): self
    {
        $this->productCount = $productCount;
        return $this;
    }
}
