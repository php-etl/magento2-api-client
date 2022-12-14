<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataShipmentPackageCreationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageCreationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageCreationInterface
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
}
