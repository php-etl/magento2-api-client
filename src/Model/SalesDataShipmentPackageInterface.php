<?php

namespace Kiboko\Magento\V2\Model;

class SalesDataShipmentPackageInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentPackageInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}