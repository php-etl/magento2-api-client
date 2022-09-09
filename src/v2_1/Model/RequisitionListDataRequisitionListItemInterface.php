<?php

namespace Kiboko\Magento\V2_1\Model;

class RequisitionListDataRequisitionListItemInterface
{
    /**
     * Added_at value.
     *
     * @var string|null
     */
    protected $addedAt;
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Requisition List ID.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Requisition list item options.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * Product Qty.
     *
     * @var float|null
     */
    protected $qty;
    /**
     * Requisition List ID.
     *
     * @var int|null
     */
    protected $requisitionListId;
    /**
     * Product SKU.
     *
     * @var string|null
     */
    protected $sku;
    /**
     * Store ID.
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Added_at value.
     *
     * @return string|null
     */
    public function getAddedAt(): ?string
    {
        return $this->addedAt;
    }
    /**
     * Added_at value.
     *
     * @param string|null $addedAt
     *
     * @return self
     */
    public function setAddedAt(?string $addedAt): self
    {
        $this->addedAt = $addedAt;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListItemInterface
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
     * Requisition List ID.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Requisition List ID.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Requisition list item options.
     *
     * @return string[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * Requisition list item options.
     *
     * @param string[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Product Qty.
     *
     * @return float|null
     */
    public function getQty(): ?float
    {
        return $this->qty;
    }
    /**
     * Product Qty.
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
     * Requisition List ID.
     *
     * @return int|null
     */
    public function getRequisitionListId(): ?int
    {
        return $this->requisitionListId;
    }
    /**
     * Requisition List ID.
     *
     * @param int|null $requisitionListId
     *
     * @return self
     */
    public function setRequisitionListId(?int $requisitionListId): self
    {
        $this->requisitionListId = $requisitionListId;
        return $this;
    }
    /**
     * Product SKU.
     *
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
    /**
     * Product SKU.
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
     * Store ID.
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     * Store ID.
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
