<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataCostInterface
{
    /**
     * Cost value.
     *
     * @var float|null
     */
    protected $cost;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Store id.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Cost value.
     *
     * @return float|null
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }
    /**
     * Cost value.
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CostInterface
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
     * Store id.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store id.
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
