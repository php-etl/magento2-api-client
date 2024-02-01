<?php

namespace Kiboko\Magento\Model;

class StoreDataStoreInterface
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
     * @var string|null
     */
    protected $code;
    /**
     * Store name
     *
     * @var string|null
     */
    protected $name;
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
    protected $storeGroupId;
    /**
     * 
     *
     * @var int|null
     */
    protected $isActive;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
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
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * 
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
     * Store name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Store name
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
    public function getStoreGroupId() : ?int
    {
        return $this->storeGroupId;
    }
    /**
     * 
     *
     * @param int|null $storeGroupId
     *
     * @return self
     */
    public function setStoreGroupId(?int $storeGroupId) : self
    {
        $this->initialized['storeGroupId'] = true;
        $this->storeGroupId = $storeGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIsActive() : ?int
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param int|null $isActive
     *
     * @return self
     */
    public function setIsActive(?int $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
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