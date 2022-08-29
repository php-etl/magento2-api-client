<?php

namespace Kiboko\Magento\v2_1\Model;

class SalesDataShippingAssignmentInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Order items of shipping assignment
     *
     * @var SalesDataOrderItemInterface[]
     */
    protected $items;
    /**
     * Interface ShippingInterface
     *
     * @var SalesDataShippingInterface
     */
    protected $shipping;
    /**
     * Stock id
     *
     * @var int
     */
    protected $stockId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Order items of shipping assignment
     *
     * @return SalesDataOrderItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Order items of shipping assignment
     *
     * @param SalesDataOrderItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface ShippingInterface
     *
     * @return SalesDataShippingInterface
     */
    public function getShipping(): SalesDataShippingInterface
    {
        return $this->shipping;
    }
    /**
     * Interface ShippingInterface
     *
     * @param SalesDataShippingInterface $shipping
     *
     * @return self
     */
    public function setShipping(SalesDataShippingInterface $shipping): self
    {
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * Stock id
     *
     * @return int
     */
    public function getStockId(): int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int $stockId
     *
     * @return self
     */
    public function setStockId(int $stockId): self
    {
        $this->stockId = $stockId;
        return $this;
    }
}
