<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CreditmemoIdCommentsPostBody
{
    /**
     * Credit memo comment interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases. A credit memo usually includes comments that detail why the credit memo amount was credited to the customer.
     *
     * @var SalesDataCreditmemoCommentInterface
     */
    protected $entity;
    /**
     * Credit memo comment interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases. A credit memo usually includes comments that detail why the credit memo amount was credited to the customer.
     *
     * @return SalesDataCreditmemoCommentInterface
     */
    public function getEntity(): SalesDataCreditmemoCommentInterface
    {
        return $this->entity;
    }
    /**
     * Credit memo comment interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases. A credit memo usually includes comments that detail why the credit memo amount was credited to the customer.
     *
     * @param SalesDataCreditmemoCommentInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataCreditmemoCommentInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
