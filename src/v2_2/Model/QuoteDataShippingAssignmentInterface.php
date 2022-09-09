<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataShippingAssignmentInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var QuoteDataCartItemInterface[]|null
     */
    protected $items;
    /**
     * Interface ShippingInterface
     *
     * @var QuoteDataShippingInterface|null
     */
    protected $shipping;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     *
     *
     * @return QuoteDataCartItemInterface[]|null
     */
    public function getItems(): ?array
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
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Interface ShippingInterface
     *
     * @return QuoteDataShippingInterface|null
     */
    public function getShipping(): ?QuoteDataShippingInterface
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
    public function setShipping(?QuoteDataShippingInterface $shipping): self
    {
        $this->shipping = $shipping;
        return $this;
    }
}
