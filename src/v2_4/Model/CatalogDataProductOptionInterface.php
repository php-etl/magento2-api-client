<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductOptionInterface
{
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
    public function getExtensionAttributes(): ?CatalogDataProductOptionExtensionInterface
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
    public function setExtensionAttributes(?CatalogDataProductOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
