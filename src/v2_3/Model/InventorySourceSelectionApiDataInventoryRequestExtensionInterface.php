<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySourceSelectionApiDataInventoryRequestExtensionInterface
{
    /**
     * Data interface for shipping source or shipping destination
     *
     * @var InventorySourceSelectionApiDataAddressInterface
     */
    protected $destinationAddress;
    /**
     * Data interface for shipping source or shipping destination
     *
     * @return InventorySourceSelectionApiDataAddressInterface
     */
    public function getDestinationAddress() : InventorySourceSelectionApiDataAddressInterface
    {
        return $this->destinationAddress;
    }
    /**
     * Data interface for shipping source or shipping destination
     *
     * @param InventorySourceSelectionApiDataAddressInterface $destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress(InventorySourceSelectionApiDataAddressInterface $destinationAddress) : self
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }
}