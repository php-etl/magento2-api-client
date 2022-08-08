<?php

namespace Kiboko\Magento\V2\Model;

class V1InvoicesCommentsPostBody
{
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @var SalesDataInvoiceCommentInterface
     */
    protected $entity;
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @return SalesDataInvoiceCommentInterface
     */
    public function getEntity(): SalesDataInvoiceCommentInterface
    {
        return $this->entity;
    }
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @param SalesDataInvoiceCommentInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataInvoiceCommentInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
