<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CompanyCreditsHistoryHistoryIdPutBody
{
    /**
     * [optional]
     *
     * @var string|null
     */
    protected $comment;
    /**
     * [optional]
     *
     * @var string|null
     */
    protected $purchaseOrder;
    /**
     * [optional]
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * [optional]
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * [optional]
     *
     * @return string|null
     */
    public function getPurchaseOrder(): ?string
    {
        return $this->purchaseOrder;
    }
    /**
     * [optional]
     *
     * @param string|null $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(?string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
}
