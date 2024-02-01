<?php

namespace Kiboko\Magento\Model;

class EavDataAttributeGroupExtensionInterface
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
    protected $attributeGroupCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $sortOrder;
    /**
     * 
     *
     * @return string|null
     */
    public function getAttributeGroupCode() : ?string
    {
        return $this->attributeGroupCode;
    }
    /**
     * 
     *
     * @param string|null $attributeGroupCode
     *
     * @return self
     */
    public function setAttributeGroupCode(?string $attributeGroupCode) : self
    {
        $this->initialized['attributeGroupCode'] = true;
        $this->attributeGroupCode = $attributeGroupCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSortOrder() : ?string
    {
        return $this->sortOrder;
    }
    /**
     * 
     *
     * @param string|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?string $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
}