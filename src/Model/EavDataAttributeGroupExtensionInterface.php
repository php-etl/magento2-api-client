<?php

namespace Kiboko\Magento\V2\Model;

class EavDataAttributeGroupExtensionInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $attributeGroupCode;
    /**
     * 
     *
     * @var string
     */
    protected $sortOrder;
    /**
     * 
     *
     * @return string
     */
    public function getAttributeGroupCode() : string
    {
        return $this->attributeGroupCode;
    }
    /**
     * 
     *
     * @param string $attributeGroupCode
     *
     * @return self
     */
    public function setAttributeGroupCode(string $attributeGroupCode) : self
    {
        $this->attributeGroupCode = $attributeGroupCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }
    /**
     * 
     *
     * @param string $sortOrder
     *
     * @return self
     */
    public function setSortOrder(string $sortOrder) : self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
}