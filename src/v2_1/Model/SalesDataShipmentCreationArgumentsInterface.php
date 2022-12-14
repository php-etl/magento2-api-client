<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataShipmentCreationArgumentsInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @var SalesDataShipmentCreationArgumentsExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @return SalesDataShipmentCreationArgumentsExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataShipmentCreationArgumentsExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @param SalesDataShipmentCreationArgumentsExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataShipmentCreationArgumentsExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
