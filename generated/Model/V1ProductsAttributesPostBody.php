<?php

namespace Kiboko\Magento\Model;

class V1ProductsAttributesPostBody
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
     * @var CatalogDataProductAttributeInterface|null
     */
    protected $attribute;
    /**
     * 
     *
     * @return CatalogDataProductAttributeInterface|null
     */
    public function getAttribute() : ?CatalogDataProductAttributeInterface
    {
        return $this->attribute;
    }
    /**
     * 
     *
     * @param CatalogDataProductAttributeInterface|null $attribute
     *
     * @return self
     */
    public function setAttribute(?CatalogDataProductAttributeInterface $attribute) : self
    {
        $this->initialized['attribute'] = true;
        $this->attribute = $attribute;
        return $this;
    }
}