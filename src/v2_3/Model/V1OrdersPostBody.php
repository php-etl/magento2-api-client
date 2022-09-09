<?php

namespace Kiboko\Magento\V2_3\Model;

class V1OrdersPostBody
{
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderInterface|null
     */
    protected $entity;
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderInterface|null
     */
    public function getEntity(): ?SalesDataOrderInterface
    {
        return $this->entity;
    }
    /**
     * Order interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataOrderInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
