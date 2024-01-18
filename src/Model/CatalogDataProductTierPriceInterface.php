<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductTierPriceInterface
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
     * Customer group id
     *
     * @var int|null
     */
    protected $customerGroupId;
    /**
     * Tier qty
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Price value
     *
     * @var float|null
     */
    protected $value;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @var CatalogDataProductTierPriceExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Customer group id
     *
     * @return int|null
     */
    public function getCustomerGroupId() : ?int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer group id
     *
     * @param int|null $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(?int $customerGroupId) : self
    {
        $this->initialized['customerGroupId'] = true;
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * Tier qty
     *
     * @return float|null
     */
    public function getQty() : ?float
    {
        return $this->qty;
    }
    /**
     * Tier qty
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * Price value
     *
     * @return float|null
     */
    public function getValue() : ?float
    {
        return $this->value;
    }
    /**
     * Price value
     *
     * @param float|null $value
     *
     * @return self
     */
    public function setValue(?float $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @return CatalogDataProductTierPriceExtensionInterface|null
     */
    public function getExtensionAttributes() : ?CatalogDataProductTierPriceExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @param CatalogDataProductTierPriceExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CatalogDataProductTierPriceExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}