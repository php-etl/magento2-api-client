<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductLinkInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @var CatalogDataProductLinkExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Link type
     *
     * @var string|null
     */
    protected $linkType;
    /**
     * Linked product sku
     *
     * @var string|null
     */
    protected $linkedProductSku;
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @var string|null
     */
    protected $linkedProductType;
    /**
     * Linked item position
     *
     * @var int|null
     */
    protected $position;
    /**
     * SKU
     *
     * @var string|null
     */
    protected $sku;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @return CatalogDataProductLinkExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataProductLinkExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductLinkInterface
     *
     * @param CatalogDataProductLinkExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductLinkExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Link type
     *
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }
    /**
     * Link type
     *
     * @param string|null $linkType
     *
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }
    /**
     * Linked product sku
     *
     * @return string|null
     */
    public function getLinkedProductSku(): ?string
    {
        return $this->linkedProductSku;
    }
    /**
     * Linked product sku
     *
     * @param string|null $linkedProductSku
     *
     * @return self
     */
    public function setLinkedProductSku(?string $linkedProductSku): self
    {
        $this->linkedProductSku = $linkedProductSku;
        return $this;
    }
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @return string|null
     */
    public function getLinkedProductType(): ?string
    {
        return $this->linkedProductType;
    }
    /**
     * Linked product type (simple, virtual, etc)
     *
     * @param string|null $linkedProductType
     *
     * @return self
     */
    public function setLinkedProductType(?string $linkedProductType): self
    {
        $this->linkedProductType = $linkedProductType;
        return $this;
    }
    /**
     * Linked item position
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Linked item position
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * SKU
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * SKU
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
}
