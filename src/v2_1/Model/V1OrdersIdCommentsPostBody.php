<?php

namespace Kiboko\Magento\v2_1\Model;

class V1OrdersIdCommentsPostBody
{
    /**
     * Order status history interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @var SalesDataOrderStatusHistoryInterface
     */
    protected $statusHistory;
    /**
     * Order status history interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @return SalesDataOrderStatusHistoryInterface
     */
    public function getStatusHistory(): SalesDataOrderStatusHistoryInterface
    {
        return $this->statusHistory;
    }
    /**
     * Order status history interface. An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as a purchase order, is emailed to the customer.
     *
     * @param SalesDataOrderStatusHistoryInterface $statusHistory
     *
     * @return self
     */
    public function setStatusHistory(SalesDataOrderStatusHistoryInterface $statusHistory): self
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }
}
