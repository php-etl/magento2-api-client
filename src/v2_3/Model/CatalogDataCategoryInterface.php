<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataCategoryInterface
{
    /**
     * Category id.
     *
     * @var int
     */
    protected $id;
    /**
     * Parent category ID
     *
     * @var int
     */
    protected $parentId;
    /**
     * Category name
     *
     * @var string
     */
    protected $name;
    /**
     * Whether category is active
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Category position
     *
     * @var int
     */
    protected $position;
    /**
     * Category level
     *
     * @var int
     */
    protected $level;
    /**
     * Children ids comma separated.
     *
     * @var string
     */
    protected $children;
    /**
     * Category creation date and time.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Category last update date and time.
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Category full path.
     *
     * @var string
     */
    protected $path;
    /**
     * Available sort by for category.
     *
     * @var string[]
     */
    protected $availableSortBy;
    /**
     * Category is included in menu.
     *
     * @var bool
     */
    protected $includeInMenu;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Category id.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Category id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Parent category ID
     *
     * @return int
     */
    public function getParentId() : int
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
    public function setParentId(int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Category name
     *
     * @return string
     */
    public function getName() : string
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
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Whether category is active
     *
     * @return bool
     */
    public function getIsActive() : bool
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
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Category position
     *
     * @return int
     */
    public function getPosition() : int
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
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Category level
     *
     * @return int
     */
    public function getLevel() : int
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
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Children ids comma separated.
     *
     * @return string
     */
    public function getChildren() : string
    {
        return $this->children;
    }
    /**
     * Children ids comma separated.
     *
     * @param string $children
     *
     * @return self
     */
    public function setChildren(string $children) : self
    {
        $this->children = $children;
        return $this;
    }
    /**
     * Category creation date and time.
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * Category creation date and time.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Category last update date and time.
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * Category last update date and time.
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Category full path.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Category full path.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Available sort by for category.
     *
     * @return string[]
     */
    public function getAvailableSortBy() : array
    {
        return $this->availableSortBy;
    }
    /**
     * Available sort by for category.
     *
     * @param string[] $availableSortBy
     *
     * @return self
     */
    public function setAvailableSortBy(array $availableSortBy) : self
    {
        $this->availableSortBy = $availableSortBy;
        return $this;
    }
    /**
     * Category is included in menu.
     *
     * @return bool
     */
    public function getIncludeInMenu() : bool
    {
        return $this->includeInMenu;
    }
    /**
     * Category is included in menu.
     *
     * @param bool $includeInMenu
     *
     * @return self
     */
    public function setIncludeInMenu(bool $includeInMenu) : self
    {
        $this->includeInMenu = $includeInMenu;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes() : array
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
    public function setCustomAttributes(array $customAttributes) : self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}