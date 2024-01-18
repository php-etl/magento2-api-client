<?php

namespace Kiboko\Magento\Model;

class QuoteDataShippingAssignmentInterface
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
     * @var QuoteDataShippingInterface|null
     */
    protected $shipping;
    /**
     * 
     *
     * @var QuoteDataCartItemInterface[]|null
     */
    protected $items;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Interface ShippingInterface
     *
     * @return QuoteDataShippingInterface|null
     */
    public function getShipping() : ?QuoteDataShippingInterface
    {
        return $this->shipping;
    }
    /**
     * Interface ShippingInterface
     *
     * @param QuoteDataShippingInterface|null $shipping
     *
     * @return self
     */
    public function setShipping(?QuoteDataShippingInterface $shipping) : self
    {
        $this->initialized['shipping'] = true;
        $this->shipping = $shipping;
        return $this;
    }
    /**
     * 
     *
     * @return QuoteDataCartItemInterface[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param QuoteDataCartItemInterface[]|null $items
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
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