<?php

namespace Kiboko\Magento\Model;

class CatalogDataCategoryInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * Parent category ID
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Category name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Whether category is active
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * Category position
     *
     * @var int|null
     */
    protected $position;
    /**
     * Category level
     *
     * @var int|null
     */
    protected $level;
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
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $availableSortBy;
    /**
     * 
     *
     * @var bool|null
     */
    protected $includeInMenu;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
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
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Parent category ID
     *
     * @return int|null
     */
    public function getParentId() : ?int
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
    public function setParentId(?int $parentId) : self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Category name
     *
     * @return string|null
     */
    public function getName() : ?string
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
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Whether category is active
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
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
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Category position
     *
     * @return int|null
     */
    public function getPosition() : ?int
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
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Category level
     *
     * @return int|null
     */
    public function getLevel() : ?int
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
    public function setLevel(?int $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChildren() : ?string
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
    public function setChildren(?string $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
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
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
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
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPath() : ?string
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
    public function setPath(?string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAvailableSortBy() : ?array
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
    public function setAvailableSortBy(?array $availableSortBy) : self
    {
        $this->initialized['availableSortBy'] = true;
        $this->availableSortBy = $availableSortBy;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIncludeInMenu() : ?bool
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
    public function setIncludeInMenu(?bool $includeInMenu) : self
    {
        $this->initialized['includeInMenu'] = true;
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
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes() : ?array
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
    public function setCustomAttributes(?array $customAttributes) : self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
}