<?php

namespace Kiboko\Magento\Model;

class V1InvoicesPostBody
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
    public function getEntity() : ?SalesDataInvoiceInterface
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
    public function setEntity(?SalesDataInvoiceInterface $entity) : self
    {
        $this->initialized['entity'] = true;
        $this->entity = $entity;
        return $this;
    }
}