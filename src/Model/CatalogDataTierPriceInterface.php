<?php

namespace Kiboko\Magento\Model;

class CatalogDataTierPriceInterface
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
     * Website id.
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Customer group.
     *
     * @var string|null
     */
    protected $customerGroup;
    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\TierPriceInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Tier price.
     *
     * @return float|null
     */
    public function getPrice() : ?float
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
    public function setPrice(?float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Tier price type.
     *
     * @return string|null
     */
    public function getPriceType() : ?string
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
    public function setPriceType(?string $priceType) : self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * Website id.
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
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
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     * SKU.
     *
     * @return string|null
     */
    public function getSku() : ?string
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
    public function setSku(?string $sku) : self
    {
        $this->initialized['sku'] = true;
        $this->sku = $sku;
        return $this;
    }
    /**
     * Customer group.
     *
     * @return string|null
     */
    public function getCustomerGroup() : ?string
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
    public function setCustomerGroup(?string $customerGroup) : self
    {
        $this->initialized['customerGroup'] = true;
        $this->customerGroup = $customerGroup;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float|null
     */
    public function getQuantity() : ?float
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
    public function setQuantity(?float $quantity) : self
    {
        $this->initialized['quantity'] = true;
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
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}