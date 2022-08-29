<?php

namespace Kiboko\Magento\v2_3\Model;

class RmaDataItemInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $entityId;
    /**
     * RMA id
     *
     * @var int
     */
    protected $rmaEntityId;
    /**
     * Order_item_id
     *
     * @var int
     */
    protected $orderItemId;
    /**
     * Qty_requested
     *
     * @var int
     */
    protected $qtyRequested;
    /**
     * Qty_authorized
     *
     * @var int
     */
    protected $qtyAuthorized;
    /**
     * Qty_approved
     *
     * @var int
     */
    protected $qtyApproved;
    /**
     * Qty_returned
     *
     * @var int
     */
    protected $qtyReturned;
    /**
     * Reason
     *
     * @var string
     */
    protected $reason;
    /**
     * Condition
     *
     * @var string
     */
    protected $condition;
    /**
     * Resolution
     *
     * @var string
     */
    protected $resolution;
    /**
     * Status
     *
     * @var string
     */
    protected $status;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\ItemInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * Id
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * RMA id
     *
     * @return int
     */
    public function getRmaEntityId() : int
    {
        return $this->rmaEntityId;
    }
    /**
     * RMA id
     *
     * @param int $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(int $rmaEntityId) : self
    {
        $this->rmaEntityId = $rmaEntityId;
        return $this;
    }
    /**
     * Order_item_id
     *
     * @return int
     */
    public function getOrderItemId() : int
    {
        return $this->orderItemId;
    }
    /**
     * Order_item_id
     *
     * @param int $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(int $orderItemId) : self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * Qty_requested
     *
     * @return int
     */
    public function getQtyRequested() : int
    {
        return $this->qtyRequested;
    }
    /**
     * Qty_requested
     *
     * @param int $qtyRequested
     *
     * @return self
     */
    public function setQtyRequested(int $qtyRequested) : self
    {
        $this->qtyRequested = $qtyRequested;
        return $this;
    }
    /**
     * Qty_authorized
     *
     * @return int
     */
    public function getQtyAuthorized() : int
    {
        return $this->qtyAuthorized;
    }
    /**
     * Qty_authorized
     *
     * @param int $qtyAuthorized
     *
     * @return self
     */
    public function setQtyAuthorized(int $qtyAuthorized) : self
    {
        $this->qtyAuthorized = $qtyAuthorized;
        return $this;
    }
    /**
     * Qty_approved
     *
     * @return int
     */
    public function getQtyApproved() : int
    {
        return $this->qtyApproved;
    }
    /**
     * Qty_approved
     *
     * @param int $qtyApproved
     *
     * @return self
     */
    public function setQtyApproved(int $qtyApproved) : self
    {
        $this->qtyApproved = $qtyApproved;
        return $this;
    }
    /**
     * Qty_returned
     *
     * @return int
     */
    public function getQtyReturned() : int
    {
        return $this->qtyReturned;
    }
    /**
     * Qty_returned
     *
     * @param int $qtyReturned
     *
     * @return self
     */
    public function setQtyReturned(int $qtyReturned) : self
    {
        $this->qtyReturned = $qtyReturned;
        return $this;
    }
    /**
     * Reason
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * Reason
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Condition
     *
     * @return string
     */
    public function getCondition() : string
    {
        return $this->condition;
    }
    /**
     * Condition
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Resolution
     *
     * @return string
     */
    public function getResolution() : string
    {
        return $this->resolution;
    }
    /**
     * Resolution
     *
     * @param string $resolution
     *
     * @return self
     */
    public function setResolution(string $resolution) : self
    {
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * Status
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}