<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductAttributeMediaGalleryEntryInterface
{
    /**
     * Image Content data interface
     *
     * @var FrameworkDataImageContentInterface|null
     */
    protected $content;
    /**
     * If gallery entry is hidden from product page
     *
     * @var bool|null
     */
    protected $disabled;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @var CatalogDataProductAttributeMediaGalleryEntryExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * File path
     *
     * @var string|null
     */
    protected $file;
    /**
     * Gallery entry ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * Gallery entry alternative text
     *
     * @var string|null
     */
    protected $label;
    /**
     * Media type
     *
     * @var string|null
     */
    protected $mediaType;
    /**
     * Gallery entry position (sort order)
     *
     * @var int|null
     */
    protected $position;
    /**
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @var string[]|null
     */
    protected $types;
    /**
     * Image Content data interface
     *
     * @return FrameworkDataImageContentInterface|null
     */
    public function getContent(): ?FrameworkDataImageContentInterface
    {
        return $this->content;
    }
    /**
     * Image Content data interface
     *
     * @param FrameworkDataImageContentInterface|null $content
     *
     * @return self
     */
    public function setContent(?FrameworkDataImageContentInterface $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * If gallery entry is hidden from product page
     *
     * @return bool|null
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
    /**
     * If gallery entry is hidden from product page
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @return CatalogDataProductAttributeMediaGalleryEntryExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CatalogDataProductAttributeMediaGalleryEntryExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductAttributeMediaGalleryEntryInterface
     *
     * @param CatalogDataProductAttributeMediaGalleryEntryExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductAttributeMediaGalleryEntryExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * File path
     *
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }
    /**
     * File path
     *
     * @param string|null $file
     *
     * @return self
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * Gallery entry ID
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Gallery entry ID
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gallery entry alternative text
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     * Gallery entry alternative text
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Media type
     *
     * @return string|null
     */
    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }
    /**
     * Media type
     *
     * @param string|null $mediaType
     *
     * @return self
     */
    public function setMediaType(?string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * Gallery entry position (sort order)
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Gallery entry position (sort order)
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
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }
    /**
     * Gallery entry image types (thumbnail, image, small_image etc)
     *
     * @param string[]|null $types
     *
     * @return self
     */
    public function setTypes(?array $types): self
    {
        $this->types = $types;
        return $this;
    }
}
