<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataProductTierPriceInterface
{
    /**
     * Customer group id
     *
     * @var int
     */
    protected $customerGroupId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @var CatalogDataProductTierPriceExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Tier qty
     *
     * @var float
     */
    protected $qty;
    /**
     * Price value
     *
     * @var float
     */
    protected $value;
    /**
     * Customer group id
     *
     * @return int
     */
    public function getCustomerGroupId(): int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer group id
     *
     * @param int $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @return CatalogDataProductTierPriceExtensionInterface
     */
    public function getExtensionAttributes(): CatalogDataProductTierPriceExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @param CatalogDataProductTierPriceExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CatalogDataProductTierPriceExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Tier qty
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     * Tier qty
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Price value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Price value
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;
        return $this;
    }
}
