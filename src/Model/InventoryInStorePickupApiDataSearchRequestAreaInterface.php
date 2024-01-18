<?php

namespace Kiboko\Magento\Model;

class InventoryInStorePickupApiDataSearchRequestAreaInterface
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
     * Search radius in KM.
     *
     * @var int|null
     */
    protected $radius;
    /**
     * Search term string.
     *
     * @var string|null
     */
    protected $searchTerm;
    /**
     * Search radius in KM.
     *
     * @return int|null
     */
    public function getRadius() : ?int
    {
        return $this->radius;
    }
    /**
     * Search radius in KM.
     *
     * @param int|null $radius
     *
     * @return self
     */
    public function setRadius(?int $radius) : self
    {
        $this->initialized['radius'] = true;
        $this->radius = $radius;
        return $this;
    }
    /**
     * Search term string.
     *
     * @return string|null
     */
    public function getSearchTerm() : ?string
    {
        return $this->searchTerm;
    }
    /**
     * Search term string.
     *
     * @param string|null $searchTerm
     *
     * @return self
     */
    public function setSearchTerm(?string $searchTerm) : self
    {
        $this->initialized['searchTerm'] = true;
        $this->searchTerm = $searchTerm;
        return $this;
    }
}