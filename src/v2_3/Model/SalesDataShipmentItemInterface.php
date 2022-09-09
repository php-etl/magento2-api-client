<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataShipmentItemInterface
{
    /**
     * Additional data.
     *
     * @var string|null
     */
    protected $additionalData;
    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Shipment item ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Order item ID.
     *
     * @var int|null
     */
    protected $orderItemId;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Price.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Product ID.
     *
     * @var int|null
     */
    protected $productId;
    /**
     * Quantity.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Row total.
     *
     * @var float|null
     */
    protected $rowTotal;
    /**
     * SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Weight.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Additional data.
     *
     * @return string|null
     */
    public function getAdditionalData(): ?string
    {
        return $this->additionalData;
    }
    /**
     * Additional data.
     *
     * @param string|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?string $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * Description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Description.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Shipment item ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Shipment item ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentItemInterface
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
     * Name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Order item ID.
     *
     * @return int|null
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }
    /**
     * Order item ID.
     *
     * @param int|null $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(?int $orderItemId): self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Price.
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Price.
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
     * Product ID.
     *
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    /**
     * Product ID.
     *
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
    /**
     * Quantity.
     *
     * @return float|null
     */
    public function getQty(): ?float
    {
        return $this->qty;
    }
    /**
     * Quantity.
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Row total.
     *
     * @return float|null
     */
    public function getRowTotal(): ?float
    {
        return $this->rowTotal;
    }
    /**
     * Row total.
     *
     * @param float|null $rowTotal
     *
     * @return self
     */
    public function setRowTotal(?float $rowTotal): self
    {
        $this->rowTotal = $rowTotal;
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
     * Weight.
     *
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }
    /**
     * Weight.
     *
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
}
