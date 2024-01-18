<?php

namespace Kiboko\Magento\Model;

class StoreDataGroupInterface
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
     * 
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * 
     *
     * @var int|null
     */
    protected $rootCategoryId;
    /**
     * 
     *
     * @var int|null
     */
    protected $defaultStoreId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * Group code.
     *
     * @var string|null
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
     * 
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
    {
        return $this->websiteId;
    }
    /**
     * 
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRootCategoryId() : ?int
    {
        return $this->rootCategoryId;
    }
    /**
     * 
     *
     * @param int|null $rootCategoryId
     *
     * @return self
     */
    public function setRootCategoryId(?int $rootCategoryId) : self
    {
        $this->initialized['rootCategoryId'] = true;
        $this->rootCategoryId = $rootCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDefaultStoreId() : ?int
    {
        return $this->defaultStoreId;
    }
    /**
     * 
     *
     * @param int|null $defaultStoreId
     *
     * @return self
     */
    public function setDefaultStoreId(?int $defaultStoreId) : self
    {
        $this->initialized['defaultStoreId'] = true;
        $this->defaultStoreId = $defaultStoreId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * Group code.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Group code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
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