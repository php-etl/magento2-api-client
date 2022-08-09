<?php

namespace Kiboko\Magento\V2\Model;

class RequisitionListDataRequisitionListItemInterface
{
    /**
     * Added_at value.
     *
     * @var string
     */
    protected $addedAt;
    /**
     * ExtensionInterface class for @see \Magento\RequisitionList\Api\Data\RequisitionListItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Requisition List ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Requisition list item options.
     *
     * @var string[]
     */
    protected $options;
    /**
     * Product Qty.
     *
     * @var float
     */
    protected $qty;
    /**
     * Requisition List ID.
     *
     * @var int
     */
    protected $requisitionListId;
    /**
     * Product SKU.
     *
     * @var string
     */
    protected $sku;
    /**
     * Store ID.
     *
     * @var int
     */
    protected $storeId;
    /**
     * Added_at value.
     *
     * @return string
     */
    public function getAddedAt() : string
    {
        return $this->addedAt;
    }
    /**
     * Added_at value.
     *
     * @param string $addedAt
     *
     * @return self
     */
    public function setAddedAt(string $addedAt) : self
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Requisition List ID.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Requisition List ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Requisition list item options.
     *
     * @return string[]
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Requisition list item options.
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Product Qty.
     *
     * @return float
     */
    public function getQty() : float
    {
        return $this->qty;
    }
    /**
     * Product Qty.
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty) : self
    {
        $this->qty = $qty;
        return $this;
    }
    /**
     * Requisition List ID.
     *
     * @return int
     */
    public function getRequisitionListId() : int
    {
        return $this->requisitionListId;
    }
    /**
     * Requisition List ID.
     *
     * @param int $requisitionListId
     *
     * @return self
     */
    public function setRequisitionListId(int $requisitionListId) : self
    {
        $this->requisitionListId = $requisitionListId;
        return $this;
    }
    /**
     * Product SKU.
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->sku;
    }
    /**
     * Product SKU.
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
     * Store ID.
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * Store ID.
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
}