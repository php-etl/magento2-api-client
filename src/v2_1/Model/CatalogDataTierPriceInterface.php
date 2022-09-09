<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataTierPriceInterface
{
    /**
     * Customer group.
     *
     * @var string|null
     */
    protected $customerGroup;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\TierPriceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Tier price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Tier price type.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Website id.
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * Customer group.
     *
     * @return string|null
     */
    public function getCustomerGroup(): ?string
    {
        return $this->customerGroup;
    }
    /**
     * Customer group.
     *
     * @param string|null $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(?string $customerGroup): self
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\TierPriceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\TierPriceInterface
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
     * Tier price.
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Tier price.
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
     * Tier price type.
     *
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * Tier price type.
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
     * Quantity.
     *
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
    /**
     * Quantity.
     *
     * @param float|null $quantity
     *
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * SKU.
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
     * Website id.
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     * Website id.
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
