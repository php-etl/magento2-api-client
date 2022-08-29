<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @var CatalogDataProductOptionExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @return CatalogDataProductOptionExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductOptionInterface
     *
     * @param CatalogDataProductOptionExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
