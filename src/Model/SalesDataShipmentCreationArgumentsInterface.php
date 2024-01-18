<?php

namespace Kiboko\Magento\Model;

class SalesDataShipmentCreationArgumentsInterface
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
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