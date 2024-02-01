<?php

namespace Kiboko\Magento\Model;

class V1ProductsCostPostBody
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
     * @var CatalogDataCostInterface[]|null
     */
    protected $prices;
    /**
     * 
     *
     * @return CatalogDataCostInterface[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param CatalogDataCostInterface[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}