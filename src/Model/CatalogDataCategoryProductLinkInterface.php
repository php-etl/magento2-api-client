<?php

namespace Kiboko\Magento\Model;

class CatalogDataCategoryProductLinkInterface
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
     * @var string|null
     */
    protected $sku;
    /**
     * 
     *
     * @var int|null
     */
    protected $position;
    /**
     * Category id
     *
     * @var string|null
     */
    protected $categoryId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryProductLinkInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * 
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPosition() : ?int
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
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Category id
     *
     * @return string|null
     */
    public function getCategoryId() : ?string
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
    public function setCategoryId(?string $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryProductLinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryProductLinkInterface
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
}