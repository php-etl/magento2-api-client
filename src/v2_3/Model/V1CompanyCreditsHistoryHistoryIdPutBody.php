<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CompanyCreditsHistoryHistoryIdPutBody
{
    /**
     * [optional]
     *
     * @var string
     */
    protected $comment;
    /**
     * [optional]
     *
     * @var string
     */
    protected $purchaseOrder;
    /**
     * [optional]
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * [optional]
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * [optional]
     *
     * @return string
     */
    public function getPurchaseOrder(): string
    {
        return $this->purchaseOrder;
    }
    /**
     * [optional]
     *
     * @param string $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
}
