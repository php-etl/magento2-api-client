<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataTierPriceInterface
{
    /**
     * Tier price.
     *
     * @var float
     */
    protected $price;
    /**
     * Tier price type.
     *
     * @var string
     */
    protected $priceType;
    /**
     * Website id.
     *
     * @var int
     */
    protected $websiteId;
    /**
     * SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Customer group.
     *
     * @var string
     */
    protected $customerGroup;
    /**
     * Quantity.
     *
     * @var float
     */
    protected $quantity;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\TierPriceInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Tier price.
     *
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * Tier price.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price) : self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Tier price type.
     *
     * @return string
     */
    public function getPriceType() : string
    {
        return $this->priceType;
    }
    /**
     * Tier price type.
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType(string $priceType) : self
    {
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Website id.
     *
     * @return int
     */
    public function getWebsiteId() : int
    {
        return $this->websiteId;
    }
    /**
     * Website id.
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId) : self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * SKU.
     *
     * @param string $sku
     *
     * @return self
     */
    public function setSku(string $sku) : self
    {
        $this->sku = $sku;
        return $this;
    }
    /**
     * Customer group.
     *
     * @return string
     */
    public function getCustomerGroup() : string
    {
        return $this->customerGroup;
    }
    /**
     * Customer group.
     *
     * @param string $customerGroup
     *
     * @return self
     */
    public function setCustomerGroup(string $customerGroup) : self
    {
        $this->customerGroup = $customerGroup;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float
     */
    public function getQuantity() : float
    {
        return $this->quantity;
    }
    /**
     * Quantity.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->quantity = $quantity;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}