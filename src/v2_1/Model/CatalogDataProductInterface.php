<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Attribute set id
     *
     * @var int
     */
    protected $attributeSetId;
    /**
     * Price
     *
     * @var float
     */
    protected $price;
    /**
     * Status
     *
     * @var int
     */
    protected $status;
    /**
     * Visibility
     *
     * @var int
     */
    protected $visibility;
    /**
     * Type id
     *
     * @var string
     */
    protected $typeId;
    /**
     * Created date
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Updated date
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Weight
     *
     * @var float
     */
    protected $weight;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @var CatalogDataProductExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Product links info
     *
     * @var CatalogDataProductLinkInterface[]
     */
    protected $productLinks;
    /**
     * List of product options
     *
     * @var CatalogDataProductCustomOptionInterface[]
     */
    protected $options;
    /**
     * Media gallery entries
     *
     * @var CatalogDataProductAttributeMediaGalleryEntryInterface[]
     */
    protected $mediaGalleryEntries;
    /**
     * List of product tier prices
     *
     * @var CatalogDataProductTierPriceInterface[]
     */
    protected $tierPrices;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Sku
     *
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }
    /**
     * Sku
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
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Attribute set id
     *
     * @return int
     */
    public function getAttributeSetId(): int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set id
     *
     * @param int $attributeSetId
     *
     * @return self
     */
    public function setAttributeSetId(int $attributeSetId): self
    {
        $this->attributeSetId = $attributeSetId;
        return $this;
    }
    /**
     * Price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Status
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Visibility
     *
     * @return int
     */
    public function getVisibility(): int
    {
        return $this->visibility;
    }
    /**
     * Visibility
     *
     * @param int $visibility
     *
     * @return self
     */
    public function setVisibility(int $visibility): self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Type id
     *
     * @return string
     */
    public function getTypeId(): string
    {
        return $this->typeId;
    }
    /**
     * Type id
     *
     * @param string $typeId
     *
     * @return self
     */
    public function setTypeId(string $typeId): self
    {
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * Created date
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created date
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Updated date
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Updated date
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Weight
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * Weight
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @return CatalogDataProductExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @param CatalogDataProductExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Product links info
     *
     * @return CatalogDataProductLinkInterface[]
     */
    public function getProductLinks(): array
    {
        return $this->productLinks;
    }
    /**
     * Product links info
     *
     * @param CatalogDataProductLinkInterface[] $productLinks
     *
     * @return self
     */
    public function setProductLinks(array $productLinks): self
    {
        $this->productLinks = $productLinks;
        return $this;
    }
    /**
     * List of product options
     *
     * @return CatalogDataProductCustomOptionInterface[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * List of product options
     *
     * @param CatalogDataProductCustomOptionInterface[] $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Media gallery entries
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryInterface[]
     */
    public function getMediaGalleryEntries(): array
    {
        return $this->mediaGalleryEntries;
    }
    /**
     * Media gallery entries
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryInterface[] $mediaGalleryEntries
     *
     * @return self
     */
    public function setMediaGalleryEntries(array $mediaGalleryEntries): self
    {
        $this->mediaGalleryEntries = $mediaGalleryEntries;
        return $this;
    }
    /**
     * List of product tier prices
     *
     * @return CatalogDataProductTierPriceInterface[]
     */
    public function getTierPrices(): array
    {
        return $this->tierPrices;
    }
    /**
     * List of product tier prices
     *
     * @param CatalogDataProductTierPriceInterface[] $tierPrices
     *
     * @return self
     */
    public function setTierPrices(array $tierPrices): self
    {
        $this->tierPrices = $tierPrices;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
