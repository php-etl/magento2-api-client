<?php

namespace Kiboko\Magento\v2_2\Model;

class CatalogDataProductLinkInterface
{
    /**
     * SKU
     *
     * @var string
     */
    protected $sku;
    /**
     * Link type
     *
     * @var string
     */
    protected $linkType;
    /**
     * Linked product sku
     *
     * @var string
     */
    protected $linkedProductSku;
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @var string
     */
    protected $linkedProductType;
    /**
     * Linked item position
     *
     * @var int
     */
    protected $position;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @var CatalogDataProductLinkExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * SKU
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * SKU
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Link type
     *
     * @return string
     */
    public function getLinkType(): string
    {
        return $this->linkType;
    }
    /**
     * Link type
     *
     * @param string $linkType
     *
     * @return self
     */
    public function setLinkType(string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }
    /**
     * Linked product sku
     *
     * @return string
     */
    public function getLinkedProductSku(): string
    {
        return $this->linkedProductSku;
    }
    /**
     * Linked product sku
     *
     * @param string $linkedProductSku
     *
     * @return self
     */
    public function setLinkedProductSku(string $linkedProductSku): self
    {
        $this->linkedProductSku = $linkedProductSku;
        return $this;
    }
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @return string
     */
    public function getLinkedProductType(): string
    {
        return $this->linkedProductType;
    }
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @param string $linkedProductType
     *
     * @return self
     */
    public function setLinkedProductType(string $linkedProductType): self
    {
        $this->linkedProductType = $linkedProductType;
        return $this;
    }
    /**
     * Linked item position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Linked item position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @return CatalogDataProductLinkExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductLinkExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @param CatalogDataProductLinkExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductLinkExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
