<?php

namespace Kiboko\Magento\Model;

class InventoryDistanceBasedSourceSelectionApiDataLatLngInterface
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
     * Latitude
     *
     * @var float|null
     */
    protected $lat;
    /**
     * Longitude
     *
     * @var float|null
     */
    protected $lng;
    /**
     * Latitude
     *
     * @return float|null
     */
    public function getLat() : ?float
    {
        return $this->lat;
    }
    /**
     * Latitude
     *
     * @param float|null $lat
     *
     * @return self
     */
    public function setLat(?float $lat) : self
    {
        $this->initialized['lat'] = true;
        $this->lat = $lat;
        return $this;
    }
    /**
     * Longitude
     *
     * @return float|null
     */
    public function getLng() : ?float
    {
        return $this->lng;
    }
    /**
     * Longitude
     *
     * @param float|null $lng
     *
     * @return self
     */
    public function setLng(?float $lng) : self
    {
        $this->initialized['lng'] = true;
        $this->lng = $lng;
        return $this;
    }
}