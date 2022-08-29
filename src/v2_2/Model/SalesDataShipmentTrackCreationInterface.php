<?php

namespace Kiboko\Magento\v2_2\Model;

class SalesDataShipmentTrackCreationInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Track number.
     *
     * @var string
     */
    protected $trackNumber;
    /**
     * Title.
     *
     * @var string
     */
    protected $title;
    /**
     * Carrier code.
     *
     * @var string
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
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
}
