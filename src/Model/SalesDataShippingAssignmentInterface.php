<?php

namespace Kiboko\Magento\Model;

class SalesDataShippingAssignmentInterface
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
     * Interface ShippingInterface
     *
     * @var SalesDataShippingInterface|null
     */
    protected $shipping;
    /**
     * Order items of shipping assignment
     *
     * @var SalesDataOrderItemInterface[]|null
     */
    protected $items;
    /**
     * Stock id
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Interface ShippingInterface
     *
     * @return SalesDataShippingInterface|null
     */
    public function getShipping() : ?SalesDataShippingInterface
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
    public function setShipping(?SalesDataShippingInterface $shipping) : self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * Order items of shipping assignment
     *
     * @return SalesDataOrderItemInterface[]|null
     */
    public function getItems() : ?array
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
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Stock id
     *
     * @return int|null
     */
    public function getStockId() : ?int
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
    public function setStockId(?int $stockId) : self
    {
        $this->initialized['stockId'] = true;
        $this->stockId = $stockId;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}