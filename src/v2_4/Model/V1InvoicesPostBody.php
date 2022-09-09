<?php

namespace Kiboko\Magento\V2_4\Model;

class V1InvoicesPostBody
{
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @var SalesDataInvoiceInterface|null
     */
    protected $entity;
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @return SalesDataInvoiceInterface|null
     */
    public function getEntity(): ?SalesDataInvoiceInterface
    {
        return $this->entity;
    }
    /**
     * Invoice interface. An invoice is a record of the receipt of payment for an order.
     *
     * @param SalesDataInvoiceInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataInvoiceInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
