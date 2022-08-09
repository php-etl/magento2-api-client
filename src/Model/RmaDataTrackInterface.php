<?php

namespace Kiboko\Magento\V2\Model;

class RmaDataTrackInterface
{
    /**
     * Carrier code
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Carrier title
     *
     * @var string
     */
    protected $carrierTitle;
    /**
     * Entity id
     *
     * @var int
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\TrackInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Rma entity id
     *
     * @var int
     */
    protected $rmaEntityId;
    /**
     * Track number
     *
     * @var string
     */
    protected $trackNumber;
    /**
     * Carrier code
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Carrier title
     *
     * @return string
     */
    public function getCarrierTitle() : string
    {
        return $this->carrierTitle;
    }
    /**
     * Carrier title
     *
     * @param string $carrierTitle
     *
     * @return self
     */
    public function setCarrierTitle(string $carrierTitle) : self
    {
        $this->carrierTitle = $carrierTitle;
        return $this;
    }
    /**
     * Entity id
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * Entity id
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\TrackInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\TrackInterface
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
    /**
     * Rma entity id
     *
     * @return int
     */
    public function getRmaEntityId() : int
    {
        return $this->rmaEntityId;
    }
    /**
     * Rma entity id
     *
     * @param int $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(int $rmaEntityId) : self
    {
        $this->rmaEntityId = $rmaEntityId;
        return $this;
    }
    /**
     * Track number
     *
     * @return string
     */
    public function getTrackNumber() : string
    {
        return $this->trackNumber;
    }
    /**
     * Track number
     *
     * @param string $trackNumber
     *
     * @return self
     */
    public function setTrackNumber(string $trackNumber) : self
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }
}