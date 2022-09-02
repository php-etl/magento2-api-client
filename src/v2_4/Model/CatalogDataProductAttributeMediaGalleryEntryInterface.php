<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductAttributeMediaGalleryEntryInterface
{
    /**
     * Image Content data interface
     *
     * @var FrameworkDataImageContentInterface
     */
    protected $content;
    /**
     * If gallery entry is hidden from product page
     *
     * @var bool
     */
    protected $disabled;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @var CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * File path
     *
     * @var string
     */
    protected $file;
    /**
     * Gallery entry ID
     *
     * @var int
     */
    protected $id;
    /**
     * Gallery entry alternative text
     *
     * @var string
     */
    protected $label;
    /**
     * Media type
     *
     * @var string
     */
    protected $mediaType;
    /**
     * Gallery entry position (sort order)
     *
     * @var int
     */
    protected $position;
    /**
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @var string[]
     */
    protected $types;
    /**
     * Image Content data interface
     *
     * @return FrameworkDataImageContentInterface
     */
    public function getContent(): FrameworkDataImageContentInterface
    {
        return $this->content;
    }
    /**
     * Image Content data interface
     *
     * @param FrameworkDataImageContentInterface $content
     *
     * @return self
     */
    public function setContent(FrameworkDataImageContentInterface $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * If gallery entry is hidden from product page
     *
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }
    /**
     * If gallery entry is hidden from product page
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductAttributeMediaGalleryEntryExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * File path
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }
    /**
     * File path
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file): self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Gallery entry ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Gallery entry ID
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
     * Gallery entry alternative text
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Gallery entry alternative text
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Media type
     *
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }
    /**
     * Media type
     *
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType(string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * Gallery entry position (sort order)
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Gallery entry position (sort order)
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
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @return string[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @param string[] $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->types = $types;
        return $this;
    }
}
