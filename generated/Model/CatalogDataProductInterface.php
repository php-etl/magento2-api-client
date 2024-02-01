<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductInterface
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
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Attribute set id
     *
     * @var int|null
     */
    protected $attributeSetId;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * Status
     *
     * @var int|null
     */
    protected $status;
    /**
     * Visibility
     *
     * @var int|null
     */
    protected $visibility;
    /**
     * Type id
     *
     * @var string|null
     */
    protected $typeId;
    /**
     * Created date
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Updated date
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Weight
     *
     * @var float|null
     */
    protected $weight;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @var CatalogDataProductExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Product links info
     *
     * @var CatalogDataProductLinkInterface[]|null
     */
    protected $productLinks;
    /**
     * List of product options
     *
     * @var CatalogDataProductCustomOptionInterface[]|null
     */
    protected $options;
    /**
     * Media gallery entries
     *
     * @var CatalogDataProductAttributeMediaGalleryEntryInterface[]|null
     */
    protected $mediaGalleryEntries;
    /**
     * List of product tier prices
     *
     * @var CatalogDataProductTierPriceInterface[]|null
     */
    protected $tierPrices;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Sku
     *
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * Sku
     *
     * @param string|null $sku
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Attribute set id
     *
     * @return int|null
     */
    public function getAttributeSetId() : ?int
    {
        return $this->attributeSetId;
    }
    /**
     * Attribute set id
     *
     * @param int|null $attributeSetId
     *
     * @return self
     */
    public function setAttributeSetId(?int $attributeSetId) : self
    {
        $this->initialized['attributeSetId'] = true;
        $this->attributeSetId = $attributeSetId;
        return $this;
    }
    /**
     * Price
     *
     * @return float|null
     */
    public function getPrice() : ?float
    {
        return $this->price;
    }
    /**
     * Price
     *
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Status
     *
     * @return int|null
     */
    public function getStatus() : ?int
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Visibility
     *
     * @return int|null
     */
    public function getVisibility() : ?int
    {
        return $this->visibility;
    }
    /**
     * Visibility
     *
     * @param int|null $visibility
     *
     * @return self
     */
    public function setVisibility(?int $visibility) : self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Type id
     *
     * @return string|null
     */
    public function getTypeId() : ?string
    {
        return $this->typeId;
    }
    /**
     * Type id
     *
     * @param string|null $typeId
     *
     * @return self
     */
    public function setTypeId(?string $typeId) : self
    {
        $this->initialized['typeId'] = true;
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * Created date
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * Created date
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Updated date
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * Updated date
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Weight
     *
     * @return float|null
     */
    public function getWeight() : ?float
    {
        return $this->weight;
    }
    /**
     * Weight
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @return CatalogDataProductExtensionInterface|null
     */
    public function getExtensionAttributes() : ?CatalogDataProductExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductInterface
     *
     * @param CatalogDataProductExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Product links info
     *
     * @return CatalogDataProductLinkInterface[]|null
     */
    public function getProductLinks() : ?array
    {
        return $this->productLinks;
    }
    /**
     * Product links info
     *
     * @param CatalogDataProductLinkInterface[]|null $productLinks
     *
     * @return self
     */
    public function setProductLinks(?array $productLinks) : self
    {
        $this->initialized['productLinks'] = true;
        $this->productLinks = $productLinks;
        return $this;
    }
    /**
     * List of product options
     *
     * @return CatalogDataProductCustomOptionInterface[]|null
     */
    public function getOptions() : ?array
    {
        return $this->options;
    }
    /**
     * List of product options
     *
     * @param CatalogDataProductCustomOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * Media gallery entries
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryInterface[]|null
     */
    public function getMediaGalleryEntries() : ?array
    {
        return $this->mediaGalleryEntries;
    }
    /**
     * Media gallery entries
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryInterface[]|null $mediaGalleryEntries
     *
     * @return self
     */
    public function setMediaGalleryEntries(?array $mediaGalleryEntries) : self
    {
        $this->initialized['mediaGalleryEntries'] = true;
        $this->mediaGalleryEntries = $mediaGalleryEntries;
        return $this;
    }
    /**
     * List of product tier prices
     *
     * @return CatalogDataProductTierPriceInterface[]|null
     */
    public function getTierPrices() : ?array
    {
        return $this->tierPrices;
    }
    /**
     * List of product tier prices
     *
     * @param CatalogDataProductTierPriceInterface[]|null $tierPrices
     *
     * @return self
     */
    public function setTierPrices(?array $tierPrices) : self
    {
        $this->initialized['tierPrices'] = true;
        $this->tierPrices = $tierPrices;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes() : ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes) : self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
}