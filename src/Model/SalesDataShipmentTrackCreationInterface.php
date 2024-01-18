<?php

namespace Kiboko\Magento\Model;

class SalesDataShipmentTrackCreationInterface
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
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Track number.
     *
     * @var string|null
     */
    protected $trackNumber;
    /**
     * Title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * Carrier code.
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
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
    /**
     * Track number.
     *
     * @return string|null
     */
    public function getTrackNumber() : ?string
    {
        return $this->trackNumber;
    }
    /**
     * Track number.
     *
     * @param string|null $trackNumber
     *
     * @return self
     */
    public function setTrackNumber(?string $trackNumber) : self
    {
        $this->initialized['trackNumber'] = true;
        $this->trackNumber = $trackNumber;
        return $this;
    }
    /**
     * Title.
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Title.
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Carrier code.
     *
     * @return string|null
     */
    public function getCarrierCode() : ?string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code.
     *
     * @param string|null $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
}