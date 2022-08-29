<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataCategoryTreeInterface
{
    /**
     *
     *
     * @var CatalogDataCategoryTreeInterface[]
     */
    protected $childrenData;
    /**
     *
     *
     * @var int
     */
    protected $id;
    /**
     * Whether category is active
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Category level
     *
     * @var int
     */
    protected $level;
    /**
     * Category name
     *
     * @var string
     */
    protected $name;
    /**
     * Parent category ID
     *
     * @var int
     */
    protected $parentId;
    /**
     * Category position
     *
     * @var int
     */
    protected $position;
    /**
     * Product count
     *
     * @var int
     */
    protected $productCount;
    /**
     *
     *
     * @return CatalogDataCategoryTreeInterface[]
     */
    public function getChildrenData(): array
    {
        return $this->childrenData;
    }
    /**
     *
     *
     * @param CatalogDataCategoryTreeInterface[] $childrenData
     *
     * @return self
     */
    public function setChildrenData(array $childrenData): self
    {
        $this->childrenData = $childrenData;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Whether category is active
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }
    /**
     * Whether category is active
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Category level
     *
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }
    /**
     * Category level
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Category name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Category name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Parent category ID
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     * Parent category ID
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Category position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Category position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Product count
     *
     * @return int
     */
    public function getProductCount(): int
    {
        return $this->productCount;
    }
    /**
     * Product count
     *
     * @param int $productCount
     *
     * @return self
     */
    public function setProductCount(int $productCount): self
    {
        $this->productCount = $productCount;
        return $this;
    }
}
