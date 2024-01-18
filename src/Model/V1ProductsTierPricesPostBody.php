<?php

namespace Kiboko\Magento\Model;

class V1ProductsTierPricesPostBody
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
     * @var CatalogDataTierPriceInterface[]|null
     */
    protected $prices;
    /**
     * 
     *
     * @return CatalogDataTierPriceInterface[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param CatalogDataTierPriceInterface[]|null $prices
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