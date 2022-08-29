<?php

namespace Kiboko\Magento\v2_3\Model;

class InventoryDistanceBasedSourceSelectionApiDataLatLngInterface
{
    /**
     * Latitude
     *
     * @var float
     */
    protected $lat;
    /**
     * Longitude
     *
     * @var float
     */
    protected $lng;
    /**
     * Latitude
     *
     * @return float
     */
    public function getLat() : float
    {
        return $this->lat;
    }
    /**
     * Latitude
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat(float $lat) : self
    {
        $this->lat = $lat;
        return $this;
    }
    /**
     * Longitude
     *
     * @return float
     */
    public function getLng() : float
    {
        return $this->lng;
    }
    /**
     * Longitude
     *
     * @param float $lng
     *
     * @return self
     */
    public function setLng(float $lng) : self
    {
        $this->lng = $lng;
        return $this;
    }
}