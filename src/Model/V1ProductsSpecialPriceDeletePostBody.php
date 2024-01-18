<?php

namespace Kiboko\Magento\Model;

class V1ProductsSpecialPriceDeletePostBody
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
     * @var CatalogDataSpecialPriceInterface[]|null
     */
    protected $prices;
    /**
     * 
     *
     * @return CatalogDataSpecialPriceInterface[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param CatalogDataSpecialPriceInterface[]|null $prices
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