<?php

namespace Kiboko\Magento\V2_1\Model;

class SalesDataShipmentExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $extLocationId;
    /**
     *
     *
     * @var string
     */
    protected $extReturnShipmentId;
    /**
     *
     *
     * @var string
     */
    protected $extShipmentId;
    /**
     *
     *
     * @var string
     */
    protected $extTrackingReference;
    /**
     *
     *
     * @var string
     */
    protected $extTrackingUrl;
    /**
     *
     *
     * @return string
     */
    public function getExtLocationId(): string
    {
        return $this->extLocationId;
    }
    /**
     *
     *
     * @param string $extLocationId
     *
     * @return self
     */
    public function setExtLocationId(string $extLocationId): self
    {
        $this->extLocationId = $extLocationId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExtReturnShipmentId(): string
    {
        return $this->extReturnShipmentId;
    }
    /**
     *
     *
     * @param string $extReturnShipmentId
     *
     * @return self
     */
    public function setExtReturnShipmentId(string $extReturnShipmentId): self
    {
        $this->extReturnShipmentId = $extReturnShipmentId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExtShipmentId(): string
    {
        return $this->extShipmentId;
    }
    /**
     *
     *
     * @param string $extShipmentId
     *
     * @return self
     */
    public function setExtShipmentId(string $extShipmentId): self
    {
        $this->extShipmentId = $extShipmentId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExtTrackingReference(): string
    {
        return $this->extTrackingReference;
    }
    /**
     *
     *
     * @param string $extTrackingReference
     *
     * @return self
     */
    public function setExtTrackingReference(string $extTrackingReference): self
    {
        $this->extTrackingReference = $extTrackingReference;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExtTrackingUrl(): string
    {
        return $this->extTrackingUrl;
    }
    /**
     *
     *
     * @param string $extTrackingUrl
     *
     * @return self
     */
    public function setExtTrackingUrl(string $extTrackingUrl): self
    {
        $this->extTrackingUrl = $extTrackingUrl;
        return $this;
    }
}
