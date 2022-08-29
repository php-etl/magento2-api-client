<?php

namespace Kiboko\Magento\v2_3\Model;

class StoreDataGroupInterface
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $websiteId;
    /**
     * 
     *
     * @var int
     */
    protected $rootCategoryId;
    /**
     * 
     *
     * @var int
     */
    protected $defaultStoreId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Group code.
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\GroupInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
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
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWebsiteId() : int
    {
        return $this->websiteId;
    }
    /**
     * 
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId) : self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRootCategoryId() : int
    {
        return $this->rootCategoryId;
    }
    /**
     * 
     *
     * @param int $rootCategoryId
     *
     * @return self
     */
    public function setRootCategoryId(int $rootCategoryId) : self
    {
        $this->rootCategoryId = $rootCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDefaultStoreId() : int
    {
        return $this->defaultStoreId;
    }
    /**
     * 
     *
     * @param int $defaultStoreId
     *
     * @return self
     */
    public function setDefaultStoreId(int $defaultStoreId) : self
    {
        $this->defaultStoreId = $defaultStoreId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * Group code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Group code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}