<?php

namespace Kiboko\Magento\V2_1\Model;

class V1OrdersParentIdPutBody
{
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderAddressInterface|null
     */
    protected $entity;
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderAddressInterface|null
     */
    public function getEntity(): ?SalesDataOrderAddressInterface
    {
        return $this->entity;
    }
    /**
     * Order address interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderAddressInterface|null $entity
     *
     * @return self
     */
    public function setEntity(?SalesDataOrderAddressInterface $entity): self
    {
        $this->entity = $entity;
        return $this;
    }
}
