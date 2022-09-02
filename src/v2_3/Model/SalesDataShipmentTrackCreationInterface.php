<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataShipmentTrackCreationInterface
{
    /**
     * Carrier code.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Title.
     *
     * @var string
     */
    protected $title;
    /**
     * Track number.
     *
     * @var string
     */
    protected $trackNumber;
    /**
     * Carrier code.
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Track number.
     *
     * @return string
     */
    public function getTrackNumber(): string
    {
        return $this->trackNumber;
    }
    /**
     * Track number.
     *
     * @param string $trackNumber
     *
     * @return self
     */
    public function setTrackNumber(string $trackNumber): self
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }
}
