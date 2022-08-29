<?php

namespace Kiboko\Magento\v2_3\Model;

class AdobeStockAssetApiDataAssetInterface
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;
    /**
     * Media gallery asset id
     *
     * @var int
     */
    protected $mediaGalleryId;
    /**
     * Category
     *
     * @var int
     */
    protected $categoryId;
    /**
     * Adobe Stock asset Category data class
     *
     * @var AdobeStockAssetApiDataCategoryInterface
     */
    protected $category;
    /**
     * The creator
     *
     * @var int
     */
    protected $creatorId;
    /**
     * Adobe Stock creator data class
     *
     * @var AdobeStockAssetApiDataCreatorInterface
     */
    protected $creator;
    /**
     * Licensed
     *
     * @var int
     */
    protected $isLicensed;
    /**
     * Creation date
     *
     * @var string
     */
    protected $creationDate;
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\AssetInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID
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
     * Media gallery asset id
     *
     * @return int
     */
    public function getMediaGalleryId(): int
    {
        return $this->mediaGalleryId;
    }
    /**
     * Media gallery asset id
     *
     * @param int $mediaGalleryId
     *
     * @return self
     */
    public function setMediaGalleryId(int $mediaGalleryId): self
    {
        $this->mediaGalleryId = $mediaGalleryId;
        return $this;
    }
    /**
     * Category
     *
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Category
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Adobe Stock asset Category data class
     *
     * @return AdobeStockAssetApiDataCategoryInterface
     */
    public function getCategory(): AdobeStockAssetApiDataCategoryInterface
    {
        return $this->category;
    }
    /**
     * Adobe Stock asset Category data class
     *
     * @param AdobeStockAssetApiDataCategoryInterface $category
     *
     * @return self
     */
    public function setCategory(AdobeStockAssetApiDataCategoryInterface $category): self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * The creator
     *
     * @return int
     */
    public function getCreatorId(): int
    {
        return $this->creatorId;
    }
    /**
     * The creator
     *
     * @param int $creatorId
     *
     * @return self
     */
    public function setCreatorId(int $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Adobe Stock creator data class
     *
     * @return AdobeStockAssetApiDataCreatorInterface
     */
    public function getCreator(): AdobeStockAssetApiDataCreatorInterface
    {
        return $this->creator;
    }
    /**
     * Adobe Stock creator data class
     *
     * @param AdobeStockAssetApiDataCreatorInterface $creator
     *
     * @return self
     */
    public function setCreator(AdobeStockAssetApiDataCreatorInterface $creator): self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * Licensed
     *
     * @return int
     */
    public function getIsLicensed(): int
    {
        return $this->isLicensed;
    }
    /**
     * Licensed
     *
     * @param int $isLicensed
     *
     * @return self
     */
    public function setIsLicensed(int $isLicensed): self
    {
        $this->isLicensed = $isLicensed;
        return $this;
    }
    /**
     * Creation date
     *
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }
    /**
     * Creation date
     *
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate): self
    {
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\AssetInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\AssetInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
