<?php

namespace Kiboko\Magento\V2_2\Model;

class RmaDataItemInterface
{
    /**
     * Condition
     *
     * @var string|null
     */
    protected $condition;
    /**
     * Id
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\ItemInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Order_item_id
     *
     * @var int|null
     */
    protected $orderItemId;
    /**
     * Qty_approved
     *
     * @var int|null
     */
    protected $qtyApproved;
    /**
     * Qty_authorized
     *
     * @var int|null
     */
    protected $qtyAuthorized;
    /**
     * Qty_requested
     *
     * @var int|null
     */
    protected $qtyRequested;
    /**
     * Qty_returned
     *
     * @var int|null
     */
    protected $qtyReturned;
    /**
     * Reason
     *
     * @var string|null
     */
    protected $reason;
    /**
     * Resolution
     *
     * @var string|null
     */
    protected $resolution;
    /**
     * RMA id
     *
     * @var int|null
     */
    protected $rmaEntityId;
    /**
     * Status
     *
     * @var string|null
     */
    protected $status;
    /**
     * Condition
     *
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }
    /**
     * Condition
     *
     * @param string|null $condition
     *
     * @return self
     */
    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Id
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Id
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
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\ItemInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\ItemInterface
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
     * Order_item_id
     *
     * @return int|null
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }
    /**
     * Order_item_id
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
     * Qty_approved
     *
     * @return int|null
     */
    public function getQtyApproved(): ?int
    {
        return $this->qtyApproved;
    }
    /**
     * Qty_approved
     *
     * @param int|null $qtyApproved
     *
     * @return self
     */
    public function setQtyApproved(?int $qtyApproved): self
    {
        $this->qtyApproved = $qtyApproved;
        return $this;
    }
    /**
     * Qty_authorized
     *
     * @return int|null
     */
    public function getQtyAuthorized(): ?int
    {
        return $this->qtyAuthorized;
    }
    /**
     * Qty_authorized
     *
     * @param int|null $qtyAuthorized
     *
     * @return self
     */
    public function setQtyAuthorized(?int $qtyAuthorized): self
    {
        $this->qtyAuthorized = $qtyAuthorized;
        return $this;
    }
    /**
     * Qty_requested
     *
     * @return int|null
     */
    public function getQtyRequested(): ?int
    {
        return $this->qtyRequested;
    }
    /**
     * Qty_requested
     *
     * @param int|null $qtyRequested
     *
     * @return self
     */
    public function setQtyRequested(?int $qtyRequested): self
    {
        $this->qtyRequested = $qtyRequested;
        return $this;
    }
    /**
     * Qty_returned
     *
     * @return int|null
     */
    public function getQtyReturned(): ?int
    {
        return $this->qtyReturned;
    }
    /**
     * Qty_returned
     *
     * @param int|null $qtyReturned
     *
     * @return self
     */
    public function setQtyReturned(?int $qtyReturned): self
    {
        $this->qtyReturned = $qtyReturned;
        return $this;
    }
    /**
     * Reason
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Reason
     *
     * @param string|null $reason
     *
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Resolution
     *
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }
    /**
     * Resolution
     *
     * @param string|null $resolution
     *
     * @return self
     */
    public function setResolution(?string $resolution): self
    {
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * RMA id
     *
     * @return int|null
     */
    public function getRmaEntityId(): ?int
    {
        return $this->rmaEntityId;
    }
    /**
     * RMA id
     *
     * @param int|null $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(?int $rmaEntityId): self
    {
        $this->rmaEntityId = $rmaEntityId;
        return $this;
    }
    /**
     * Status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
