<?php

namespace Kiboko\Magento\Model;

class AdobeStockAssetApiDataAssetInterface
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
     * ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * Media gallery asset id
     *
     * @var int|null
     */
    protected $mediaGalleryId;
    /**
     * Category
     *
     * @var int|null
     */
    protected $categoryId;
    /**
     * Adobe Stock asset Category data class
     *
     * @var AdobeStockAssetApiDataCategoryInterface|null
     */
    protected $category;
    /**
     * The creator
     *
     * @var int|null
     */
    protected $creatorId;
    /**
     * Adobe Stock creator data class
     *
     * @var AdobeStockAssetApiDataCreatorInterface|null
     */
    protected $creator;
    /**
     * Licensed
     *
     * @var int|null
     */
    protected $isLicensed;
    /**
     * Creation date
     *
     * @var string|null
     */
    protected $creationDate;
    /**
     * ExtensionInterface class for @see \Magento\AdobeStockAssetApi\Api\Data\AssetInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * ID
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * ID
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
     * Media gallery asset id
     *
     * @return int|null
     */
    public function getMediaGalleryId() : ?int
    {
        return $this->mediaGalleryId;
    }
    /**
     * Media gallery asset id
     *
     * @param int|null $mediaGalleryId
     *
     * @return self
     */
    public function setMediaGalleryId(?int $mediaGalleryId) : self
    {
        $this->initialized['mediaGalleryId'] = true;
        $this->mediaGalleryId = $mediaGalleryId;
        return $this;
    }
    /**
     * Category
     *
     * @return int|null
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    /**
     * Category
     *
     * @param int|null $categoryId
     *
     * @return self
     */
    public function setCategoryId(?int $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Adobe Stock asset Category data class
     *
     * @return AdobeStockAssetApiDataCategoryInterface|null
     */
    public function getCategory() : ?AdobeStockAssetApiDataCategoryInterface
    {
        return $this->category;
    }
    /**
     * Adobe Stock asset Category data class
     *
     * @param AdobeStockAssetApiDataCategoryInterface|null $category
     *
     * @return self
     */
    public function setCategory(?AdobeStockAssetApiDataCategoryInterface $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * The creator
     *
     * @return int|null
     */
    public function getCreatorId() : ?int
    {
        return $this->creatorId;
    }
    /**
     * The creator
     *
     * @param int|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?int $creatorId) : self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Adobe Stock creator data class
     *
     * @return AdobeStockAssetApiDataCreatorInterface|null
     */
    public function getCreator() : ?AdobeStockAssetApiDataCreatorInterface
    {
        return $this->creator;
    }
    /**
     * Adobe Stock creator data class
     *
     * @param AdobeStockAssetApiDataCreatorInterface|null $creator
     *
     * @return self
     */
    public function setCreator(?AdobeStockAssetApiDataCreatorInterface $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
        return $this;
    }
    /**
     * Licensed
     *
     * @return int|null
     */
    public function getIsLicensed() : ?int
    {
        return $this->isLicensed;
    }
    /**
     * Licensed
     *
     * @param int|null $isLicensed
     *
     * @return self
     */
    public function setIsLicensed(?int $isLicensed) : self
    {
        $this->initialized['isLicensed'] = true;
        $this->isLicensed = $isLicensed;
        return $this;
    }
    /**
     * Creation date
     *
     * @return string|null
     */
    public function getCreationDate() : ?string
    {
        return $this->creationDate;
    }
    /**
     * Creation date
     *
     * @param string|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}