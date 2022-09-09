<?php

namespace Kiboko\Magento\V2_3\Model;

class GiftWrappingDataWrappingInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     *
     *
     * @var float|null
     */
    protected $basePrice;
    /**
     *
     *
     * @var string|null
     */
    protected $design;
    /**
     * ExtensionInterface class for @see \Magento\GiftWrapping\Api\Data\WrappingInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var string|null
     */
    protected $imageBase64Content;
    /**
     *
     *
     * @var string|null
     */
    protected $imageName;
    /**
     * Wrapping image URL.
     *
     * @var string|null
     */
    protected $imageUrl;
    /**
     *
     *
     * @var int|null
     */
    protected $status;
    /**
     *
     *
     * @var int[]|null
     */
    protected $websiteIds;
    /**
     *
     *
     * @var int|null
     */
    protected $wrappingId;
    /**
     *
     *
     * @return string|null
     */
    public function getBaseCurrencyCode(): ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     *
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode): self
    {
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    /**
     *
     *
     * @param float|null $basePrice
     *
     * @return self
     */
    public function setBasePrice(?float $basePrice): self
    {
        $this->basePrice = $basePrice;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDesign(): ?string
    {
        return $this->design;
    }
    /**
     *
     *
     * @param string|null $design
     *
     * @return self
     */
    public function setDesign(?string $design): self
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getImageBase64Content(): ?string
    {
        return $this->imageBase64Content;
    }
    /**
     *
     *
     * @param string|null $imageBase64Content
     *
     * @return self
     */
    public function setImageBase64Content(?string $imageBase64Content): self
    {
        $this->imageBase64Content = $imageBase64Content;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }
    /**
     *
     *
     * @param string|null $imageName
     *
     * @return self
     */
    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;
        return $this;
    }
    /**
     * Wrapping image URL.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }
    /**
     * Wrapping image URL.
     *
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     *
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getWebsiteIds(): ?array
    {
        return $this->websiteIds;
    }
    /**
     *
     *
     * @param int[]|null $websiteIds
     *
     * @return self
     */
    public function setWebsiteIds(?array $websiteIds): self
    {
        $this->websiteIds = $websiteIds;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWrappingId(): ?int
    {
        return $this->wrappingId;
    }
    /**
     *
     *
     * @param int|null $wrappingId
     *
     * @return self
     */
    public function setWrappingId(?int $wrappingId): self
    {
        $this->wrappingId = $wrappingId;
        return $this;
    }
}
