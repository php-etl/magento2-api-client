<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataShipmentExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $extLocationId;
    /**
     *
     *
     * @var string|null
     */
    protected $extReturnShipmentId;
    /**
     *
     *
     * @var string|null
     */
    protected $extShipmentId;
    /**
     *
     *
     * @var string|null
     */
    protected $extTrackingReference;
    /**
     *
     *
     * @var string|null
     */
    protected $extTrackingUrl;
    /**
     *
     *
     * @return string|null
     */
    public function getExtLocationId(): ?string
    {
        return $this->extLocationId;
    }
    /**
     *
     *
     * @param string|null $extLocationId
     *
     * @return self
     */
    public function setExtLocationId(?string $extLocationId): self
    {
        $this->extLocationId = $extLocationId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExtReturnShipmentId(): ?string
    {
        return $this->extReturnShipmentId;
    }
    /**
     *
     *
     * @param string|null $extReturnShipmentId
     *
     * @return self
     */
    public function setExtReturnShipmentId(?string $extReturnShipmentId): self
    {
        $this->extReturnShipmentId = $extReturnShipmentId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExtShipmentId(): ?string
    {
        return $this->extShipmentId;
    }
    /**
     *
     *
     * @param string|null $extShipmentId
     *
     * @return self
     */
    public function setExtShipmentId(?string $extShipmentId): self
    {
        $this->extShipmentId = $extShipmentId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExtTrackingReference(): ?string
    {
        return $this->extTrackingReference;
    }
    /**
     *
     *
     * @param string|null $extTrackingReference
     *
     * @return self
     */
    public function setExtTrackingReference(?string $extTrackingReference): self
    {
        $this->extTrackingReference = $extTrackingReference;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExtTrackingUrl(): ?string
    {
        return $this->extTrackingUrl;
    }
    /**
     *
     *
     * @param string|null $extTrackingUrl
     *
     * @return self
     */
    public function setExtTrackingUrl(?string $extTrackingUrl): self
    {
        $this->extTrackingUrl = $extTrackingUrl;
        return $this;
    }
}
