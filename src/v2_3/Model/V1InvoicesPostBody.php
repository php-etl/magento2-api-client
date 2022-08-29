<?php

namespace Kiboko\Magento\v2_3\Model;

class V1InvoicesPostBody
{
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @var SalesDataInvoiceInterface
     */
    protected $entity;
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @return SalesDataInvoiceInterface
     */
    public function getEntity() : SalesDataInvoiceInterface
    {
        return $this->entity;
    }
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @param SalesDataInvoiceInterface $entity
     *
     * @return self
     */
    public function setEntity(SalesDataInvoiceInterface $entity) : self
    {
        $this->entity = $entity;
        return $this;
    }
}