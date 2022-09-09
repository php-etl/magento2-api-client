<?php

namespace Kiboko\Magento\V2_2\Model;

class SalesDataShipmentTrackCreationInterface
{
    /**
     * Carrier code.
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentTrackCreationInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * Track number.
     *
     * @var string|null
     */
    protected $trackNumber;
    /**
     * Carrier code.
     *
     * @return string|null
     */
    public function getCarrierCode(): ?string
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
    public function setCarrierCode(?string $carrierCode): self
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
     * @return string|null
     */
    public function getTitle(): ?string
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
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Track number.
     *
     * @return string|null
     */
    public function getTrackNumber(): ?string
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
    public function setTrackNumber(?string $trackNumber): self
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }
}
