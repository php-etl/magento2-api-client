<?php

namespace Kiboko\Magento\Model;

class V1InvoicesCommentsPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @var SalesDataInvoiceCommentInterface|null
     */
    protected $entity;
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @return SalesDataInvoiceCommentInterface|null
     */
    public function getEntity() : ?SalesDataInvoiceCommentInterface
    {
        return $this->entity;
    }
    /**
     * Invoice comment interface. An invoice is a record of the receipt of payment for an order. An invoice can include comments that detail the invoice history.
     *
     * @param SalesDataInvoiceCommentInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataInvoiceCommentInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}