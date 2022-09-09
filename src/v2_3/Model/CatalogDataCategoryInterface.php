<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataCategoryInterface
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $availableSortBy;
    /**
     *
     *
     * @var string|null
     */
    protected $children;
    /**
     *
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var bool|null
     */
    protected $includeInMenu;
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
     *
     *
     * @var string|null
     */
    protected $path;
    /**
     * Category position
     *
     * @var int|null
     */
    protected $position;
    /**
     *
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAvailableSortBy(): ?array
    {
        return $this->availableSortBy;
    }
    /**
     *
     *
     * @param string[]|null $availableSortBy
     *
     * @return self
     */
    public function setAvailableSortBy(?array $availableSortBy): self
    {
        $this->availableSortBy = $availableSortBy;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getChildren(): ?string
    {
        return $this->children;
    }
    /**
     *
     *
     * @param string|null $children
     *
     * @return self
     */
    public function setChildren(?string $children): self
    {
        $this->children = $children;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     *
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
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
     *
     *
     * @return bool|null
     */
    public function getIncludeInMenu(): ?bool
    {
        return $this->includeInMenu;
    }
    /**
     *
     *
     * @param bool|null $includeInMenu
     *
     * @return self
     */
    public function setIncludeInMenu(?bool $includeInMenu): self
    {
        $this->includeInMenu = $includeInMenu;
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
     *
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     *
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
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
     *
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     *
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
