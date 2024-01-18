<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductOptionInterface
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
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @var CatalogDataProductOptionExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @return CatalogDataProductOptionExtensionInterface|null
     */
    public function getExtensionAttributes() : ?CatalogDataProductOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @param CatalogDataProductOptionExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductOptionExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}