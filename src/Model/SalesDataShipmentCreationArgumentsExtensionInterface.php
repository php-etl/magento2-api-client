<?php

namespace Kiboko\Magento\Model;

class SalesDataShipmentCreationArgumentsExtensionInterface
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
     * 
     *
     * @var string|null
     */
    protected $shippingLabel;
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
    protected $extReturnShipmentId;
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
    protected $extTrackingUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $extTrackingReference;
    /**
     * 
     *
     * @return string|null
     */
    public function getShippingLabel() : ?string
    {
        return $this->shippingLabel;
    }
    /**
     * 
     *
     * @param string|null $shippingLabel
     *
     * @return self
     */
    public function setShippingLabel(?string $shippingLabel) : self
    {
        $this->initialized['shippingLabel'] = true;
        $this->shippingLabel = $shippingLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtShipmentId() : ?string
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
    public function setExtShipmentId(?string $extShipmentId) : self
    {
        $this->initialized['extShipmentId'] = true;
        $this->extShipmentId = $extShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtReturnShipmentId() : ?string
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
    public function setExtReturnShipmentId(?string $extReturnShipmentId) : self
    {
        $this->initialized['extReturnShipmentId'] = true;
        $this->extReturnShipmentId = $extReturnShipmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtLocationId() : ?string
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
    public function setExtLocationId(?string $extLocationId) : self
    {
        $this->initialized['extLocationId'] = true;
        $this->extLocationId = $extLocationId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtTrackingUrl() : ?string
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
    public function setExtTrackingUrl(?string $extTrackingUrl) : self
    {
        $this->initialized['extTrackingUrl'] = true;
        $this->extTrackingUrl = $extTrackingUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtTrackingReference() : ?string
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
    public function setExtTrackingReference(?string $extTrackingReference) : self
    {
        $this->initialized['extTrackingReference'] = true;
        $this->extTrackingReference = $extTrackingReference;
        return $this;
    }
}