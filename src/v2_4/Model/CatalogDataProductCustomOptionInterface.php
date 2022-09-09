<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductCustomOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @var CatalogDataProductCustomOptionExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var string|null
     */
    protected $fileExtension;
    /**
     *
     *
     * @var int|null
     */
    protected $imageSizeX;
    /**
     *
     *
     * @var int|null
     */
    protected $imageSizeY;
    /**
     * Is require
     *
     * @var bool|null
     */
    protected $isRequire;
    /**
     *
     *
     * @var int|null
     */
    protected $maxCharacters;
    /**
     * Option id
     *
     * @var int|null
     */
    protected $optionId;
    /**
     * Price
     *
     * @var float|null
     */
    protected $price;
    /**
     * Price type
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * Product SKU
     *
     * @var string|null
     */
    protected $productSku;
    /**
     * Sku
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Sort order
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Option title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Option type
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var CatalogDataProductCustomOptionValuesInterface[]|null
     */
    protected $values;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @return CatalogDataProductCustomOptionExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataProductCustomOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @param CatalogDataProductCustomOptionExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductCustomOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }
    /**
     *
     *
     * @param string|null $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension): self
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getImageSizeX(): ?int
    {
        return $this->imageSizeX;
    }
    /**
     *
     *
     * @param int|null $imageSizeX
     *
     * @return self
     */
    public function setImageSizeX(?int $imageSizeX): self
    {
        $this->imageSizeX = $imageSizeX;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getImageSizeY(): ?int
    {
        return $this->imageSizeY;
    }
    /**
     *
     *
     * @param int|null $imageSizeY
     *
     * @return self
     */
    public function setImageSizeY(?int $imageSizeY): self
    {
        $this->imageSizeY = $imageSizeY;
        return $this;
    }
    /**
     * Is require
     *
     * @return bool|null
     */
    public function getIsRequire(): ?bool
    {
        return $this->isRequire;
    }
    /**
     * Is require
     *
     * @param bool|null $isRequire
     *
     * @return self
     */
    public function setIsRequire(?bool $isRequire): self
    {
        $this->isRequire = $isRequire;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getMaxCharacters(): ?int
    {
        return $this->maxCharacters;
    }
    /**
     *
     *
     * @param int|null $maxCharacters
     *
     * @return self
     */
    public function setMaxCharacters(?int $maxCharacters): self
    {
        $this->maxCharacters = $maxCharacters;
        return $this;
    }
    /**
     * Option id
     *
     * @return int|null
     */
    public function getOptionId(): ?int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int|null $optionId
     *
     * @return self
     */
    public function setOptionId(?int $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }
    /**
     * Price
     *
     * @return float|null
     */
    public function getPrice(): ?float
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
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Price type
     *
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param string|null $priceType
     *
     * @return self
     */
    public function setPriceType(?string $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Product SKU
     *
     * @return string|null
     */
    public function getProductSku(): ?string
    {
        return $this->productSku;
    }
    /**
     * Product SKU
     *
     * @param string|null $productSku
     *
     * @return self
     */
    public function setProductSku(?string $productSku): self
    {
        $this->productSku = $productSku;
        return $this;
    }
    /**
     * Sku
     *
     * @return string|null
     */
    public function getSku(): ?string
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
    public function setSku(?string $sku): self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Sort order
     *
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Option title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Option type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Option type
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     *
     *
     * @return CatalogDataProductCustomOptionValuesInterface[]|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }
    /**
     *
     *
     * @param CatalogDataProductCustomOptionValuesInterface[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
