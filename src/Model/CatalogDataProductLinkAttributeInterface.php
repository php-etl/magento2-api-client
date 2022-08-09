<?php

namespace Kiboko\Magento\V2\Model;

class CatalogDataProductLinkAttributeInterface
{
    /**
     * Attribute code
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Attribute type
     *
     * @var string
     */
    protected $type;
    /**
     * Attribute code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Attribute code
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
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkAttributeInterface
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
    /**
     * Attribute type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Attribute type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}