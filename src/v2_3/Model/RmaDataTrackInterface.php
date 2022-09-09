<?php

namespace Kiboko\Magento\V2_3\Model;

class RmaDataTrackInterface
{
    /**
     * Carrier code
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * Carrier title
     *
     * @var string|null
     */
    protected $carrierTitle;
    /**
     * Entity id
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Rma\Api\Data\TrackInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Rma entity id
     *
     * @var int|null
     */
    protected $rmaEntityId;
    /**
     * Track number
     *
     * @var string|null
     */
    protected $trackNumber;
    /**
     * Carrier code
     *
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code
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
     * Carrier title
     *
     * @return string|null
     */
    public function getCarrierTitle(): ?string
    {
        return $this->carrierTitle;
    }
    /**
     * Carrier title
     *
     * @param string|null $carrierTitle
     *
     * @return self
     */
    public function setCarrierTitle(?string $carrierTitle): self
    {
        $this->carrierTitle = $carrierTitle;
        return $this;
    }
    /**
     * Entity id
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Entity id
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Rma entity id
     *
     * @return int|null
     */
    public function getRmaEntityId(): ?int
    {
        return $this->rmaEntityId;
    }
    /**
     * Rma entity id
     *
     * @param int|null $rmaEntityId
     *
     * @return self
     */
    public function setRmaEntityId(?int $rmaEntityId): self
    {
        $this->rmaEntityId = $rmaEntityId;
        return $this;
    }
    /**
     * Track number
     *
     * @return string|null
     */
    public function getTrackNumber(): ?string
    {
        return $this->trackNumber;
    }
    /**
     * Track number
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
