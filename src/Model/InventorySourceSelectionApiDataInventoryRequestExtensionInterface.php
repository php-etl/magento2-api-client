<?php

namespace Kiboko\Magento\Model;

class InventorySourceSelectionApiDataInventoryRequestExtensionInterface
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
     * Data interface for shipping source or shipping destination
     *
     * @var InventorySourceSelectionApiDataAddressInterface|null
     */
    protected $destinationAddress;
    /**
     * Data interface for shipping source or shipping destination
     *
     * @return InventorySourceSelectionApiDataAddressInterface|null
     */
    public function getDestinationAddress() : ?InventorySourceSelectionApiDataAddressInterface
    {
        return $this->destinationAddress;
    }
    /**
     * Data interface for shipping source or shipping destination
     *
     * @param InventorySourceSelectionApiDataAddressInterface|null $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(?InventorySourceSelectionApiDataAddressInterface $destinationAddress) : self
    {
        $this->initialized['destinationAddress'] = true;
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
}