<?php

namespace Kiboko\Magento\Model;

class V1ProductsAttributeSetsAttributesPostBody
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
    protected $attributeSetId;
    /**
     * 
     *
     * @var int|null
     */
    protected $attributeGroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * 
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * 
     *
     * @return int|null
     */
    public function getAttributeSetId() : ?int
    {
        return $this->attributeSetId;
    }
    /**
     * 
     *
     * @param int|null $attributeSetId
     *
     * @return self
     */
    public function setAttributeSetId(?int $attributeSetId) : self
    {
        $this->initialized['attributeSetId'] = true;
        $this->attributeSetId = $attributeSetId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAttributeGroupId() : ?int
    {
        return $this->attributeGroupId;
    }
    /**
     * 
     *
     * @param int|null $attributeGroupId
     *
     * @return self
     */
    public function setAttributeGroupId(?int $attributeGroupId) : self
    {
        $this->initialized['attributeGroupId'] = true;
        $this->attributeGroupId = $attributeGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeCode() : ?string
    {
        return $this->attributeCode;
    }
    /**
     * 
     *
     * @param string|null $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(?string $attributeCode) : self
    {
        $this->initialized['attributeCode'] = true;
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSortOrder() : ?int
    {
        return $this->sortOrder;
    }
    /**
     * 
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
}