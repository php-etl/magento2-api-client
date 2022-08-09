<?php

namespace Kiboko\Magento\V2\Model;

class GiftWrappingDataWrappingInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $baseCurrencyCode;
    /**
     * 
     *
     * @var float
     */
    protected $basePrice;
    /**
     * 
     *
     * @var string
     */
    protected $design;
    /**
     * ExtensionInterface class for @see \Magento\GiftWrapping\Api\Data\WrappingInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * 
     *
     * @var string
     */
    protected $imageBase64Content;
    /**
     * 
     *
     * @var string
     */
    protected $imageName;
    /**
     * Wrapping image URL.
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var int
     */
    protected $status;
    /**
     * 
     *
     * @var int[]
     */
    protected $websiteIds;
    /**
     * 
     *
     * @var int
     */
    protected $wrappingId;
    /**
     * 
     *
     * @return string
     */
    public function getBaseCurrencyCode() : string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * 
     *
     * @param string $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(string $baseCurrencyCode) : self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBasePrice() : float
    {
        return $this->basePrice;
    }
    /**
     * 
     *
     * @param float $basePrice
     *
     * @return self
     */
    public function setBasePrice(float $basePrice) : self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDesign() : string
    {
        return $this->design;
    }
    /**
     * 
     *
     * @param string $design
     *
     * @return self
     */
    public function setDesign(string $design) : self
    {
        $this->design = $design;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftWrapping\Api\Data\WrappingInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GiftWrapping\Api\Data\WrappingInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageBase64Content() : string
    {
        return $this->imageBase64Content;
    }
    /**
     * 
     *
     * @param string $imageBase64Content
     *
     * @return self
     */
    public function setImageBase64Content(string $imageBase64Content) : self
    {
        $this->imageBase64Content = $imageBase64Content;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageName() : string
    {
        return $this->imageName;
    }
    /**
     * 
     *
     * @param string $imageName
     *
     * @return self
     */
    public function setImageName(string $imageName) : self
    {
        $this->imageName = $imageName;
        return $this;
    }
    /**
     * Wrapping image URL.
     *
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }
    /**
     * Wrapping image URL.
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl) : self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getWebsiteIds() : array
    {
        return $this->websiteIds;
    }
    /**
     * 
     *
     * @param int[] $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(array $websiteIds) : self
    {
        $this->websiteIds = $websiteIds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWrappingId() : int
    {
        return $this->wrappingId;
    }
    /**
     * 
     *
     * @param int $wrappingId
     *
     * @return self
     */
    public function setWrappingId(int $wrappingId) : self
    {
        $this->wrappingId = $wrappingId;
        return $this;
    }
}