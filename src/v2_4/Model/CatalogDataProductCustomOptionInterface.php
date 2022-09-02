<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductCustomOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @var CatalogDataProductCustomOptionExtensionInterface
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var string
     */
    protected $fileExtension;
    /**
     *
     *
     * @var int
     */
    protected $imageSizeX;
    /**
     *
     *
     * @var int
     */
    protected $imageSizeY;
    /**
     * Is require
     *
     * @var bool
     */
    protected $isRequire;
    /**
     *
     *
     * @var int
     */
    protected $maxCharacters;
    /**
     * Option id
     *
     * @var int
     */
    protected $optionId;
    /**
     * Price
     *
     * @var float
     */
    protected $price;
    /**
     * Price type
     *
     * @var string
     */
    protected $priceType;
    /**
     * Product SKU
     *
     * @var string
     */
    protected $productSku;
    /**
     * Sku
     *
     * @var string
     */
    protected $sku;
    /**
     * Sort order
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Option title
     *
     * @var string
     */
    protected $title;
    /**
     * Option type
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var CatalogDataProductCustomOptionValuesInterface[]
     */
    protected $values;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @return CatalogDataProductCustomOptionExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductCustomOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductCustomOptionInterface
     *
     * @param CatalogDataProductCustomOptionExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductCustomOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getFileExtension(): string
    {
        return $this->fileExtension;
    }
    /**
     *
     *
     * @param string $fileExtension
     *
     * @return self
     */
    public function setFileExtension(string $fileExtension): self
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getImageSizeX(): int
    {
        return $this->imageSizeX;
    }
    /**
     *
     *
     * @param int $imageSizeX
     *
     * @return self
     */
    public function setImageSizeX(int $imageSizeX): self
    {
        $this->imageSizeX = $imageSizeX;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getImageSizeY(): int
    {
        return $this->imageSizeY;
    }
    /**
     *
     *
     * @param int $imageSizeY
     *
     * @return self
     */
    public function setImageSizeY(int $imageSizeY): self
    {
        $this->imageSizeY = $imageSizeY;
        return $this;
    }
    /**
     * Is require
     *
     * @return bool
     */
    public function getIsRequire(): bool
    {
        return $this->isRequire;
    }
    /**
     * Is require
     *
     * @param bool $isRequire
     *
     * @return self
     */
    public function setIsRequire(bool $isRequire): self
    {
        $this->isRequire = $isRequire;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getMaxCharacters(): int
    {
        return $this->maxCharacters;
    }
    /**
     *
     *
     * @param int $maxCharacters
     *
     * @return self
     */
    public function setMaxCharacters(int $maxCharacters): self
    {
        $this->maxCharacters = $maxCharacters;
        return $this;
    }
    /**
     * Option id
     *
     * @return int
     */
    public function getOptionId(): int
    {
        return $this->optionId;
    }
    /**
     * Option id
     *
     * @param int $optionId
     *
     * @return self
     */
    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;
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
     * Price type
     *
     * @return string
     */
    public function getPriceType(): string
    {
        return $this->priceType;
    }
    /**
     * Price type
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType(string $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Product SKU
     *
     * @return string
     */
    public function getProductSku(): string
    {
        return $this->productSku;
    }
    /**
     * Product SKU
     *
     * @param string $productSku
     *
     * @return self
     */
    public function setProductSku(string $productSku): self
    {
        $this->productSku = $productSku;
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
     * Sort order
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Option title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Option title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Option type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Option type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     *
     *
     * @return CatalogDataProductCustomOptionValuesInterface[]
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     *
     *
     * @param CatalogDataProductCustomOptionValuesInterface[] $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }
}
