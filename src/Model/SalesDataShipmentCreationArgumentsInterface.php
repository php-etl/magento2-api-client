<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataShipmentCreationArgumentsInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @var SalesDataShipmentCreationArgumentsExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @return SalesDataShipmentCreationArgumentsExtensionInterface
     */
    public function getExtensionAttributes() : SalesDataShipmentCreationArgumentsExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @param SalesDataShipmentCreationArgumentsExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(SalesDataShipmentCreationArgumentsExtensionInterface $extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}