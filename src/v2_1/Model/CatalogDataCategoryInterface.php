<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataCategoryInterface
{
    /**
     *
     *
     * @var string[]
     */
    protected $availableSortBy;
    /**
     *
     *
     * @var string
     */
    protected $children;
    /**
     *
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int
     */
    protected $id;
    /**
     *
     *
     * @var bool
     */
    protected $includeInMenu;
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
     *
     *
     * @var string
     */
    protected $path;
    /**
     * Category position
     *
     * @var int
     */
    protected $position;
    /**
     *
     *
     * @var string
     */
    protected $updatedAt;
    /**
     *
     *
     * @return string[]
     */
    public function getAvailableSortBy(): array
    {
        return $this->availableSortBy;
    }
    /**
     *
     *
     * @param string[] $availableSortBy
     *
     * @return self
     */
    public function setAvailableSortBy(array $availableSortBy): self
    {
        $this->availableSortBy = $availableSortBy;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getChildren(): string
    {
        return $this->children;
    }
    /**
     *
     *
     * @param string $children
     *
     * @return self
     */
    public function setChildren(string $children): self
    {
        $this->children = $children;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     *
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
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
     *
     *
     * @return bool
     */
    public function getIncludeInMenu(): bool
    {
        return $this->includeInMenu;
    }
    /**
     *
     *
     * @param bool $includeInMenu
     *
     * @return self
     */
    public function setIncludeInMenu(bool $includeInMenu): self
    {
        $this->includeInMenu = $includeInMenu;
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
     *
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     *
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
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
     *
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     *
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
