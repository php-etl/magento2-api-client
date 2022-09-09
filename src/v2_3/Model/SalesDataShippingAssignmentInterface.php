<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataShippingAssignmentInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Order items of shipping assignment
     *
     * @var SalesDataOrderItemInterface[]|null
     */
    protected $items;
    /**
     * Interface ShippingInterface
     *
     * @var SalesDataShippingInterface|null
     */
    protected $shipping;
    /**
     * Stock id
     *
     * @var int|null
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
     * @return SalesDataOrderItemInterface[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Order items of shipping assignment
     *
     * @param SalesDataOrderItemInterface[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface ShippingInterface
     *
     * @return SalesDataShippingInterface|null
     */
    public function getShipping(): ?SalesDataShippingInterface
    {
        return $this->shipping;
    }
    /**
     * Interface ShippingInterface
     *
     * @param SalesDataShippingInterface|null $shipping
     *
     * @return self
     */
    public function setShipping(?SalesDataShippingInterface $shipping): self
    {
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * Stock id
     *
     * @return int|null
     */
    public function getStockId(): ?int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int|null $stockId
     *
     * @return self
     */
    public function setStockId(?int $stockId): self
    {
        $this->stockId = $stockId;
        return $this;
    }
}
