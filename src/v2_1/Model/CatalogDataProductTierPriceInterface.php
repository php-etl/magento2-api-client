<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataProductTierPriceInterface
{
    /**
     * Customer group id
     *
     * @var int
     */
    protected $customerGroupId;
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
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
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
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
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
