<?php

namespace Kiboko\Magento\Model;

class CatalogDataCategoryTreeInterface
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
     * Product count
     *
     * @var int|null
     */
    protected $productCount;
    /**
     * 
     *
     * @var CatalogDataCategoryTreeInterface[]|null
     */
    protected $childrenData;
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
     * Product count
     *
     * @return int|null
     */
    public function getProductCount() : ?int
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
    public function setProductCount(?int $productCount) : self
    {
        $this->initialized['productCount'] = true;
        $this->productCount = $productCount;
        return $this;
    }
    /**
     * 
     *
     * @return CatalogDataCategoryTreeInterface[]|null
     */
    public function getChildrenData() : ?array
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
    public function setChildrenData(?array $childrenData) : self
    {
        $this->initialized['childrenData'] = true;
        $this->childrenData = $childrenData;
        return $this;
    }
}