<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsBasePricesPostBody
{
    /**
     *
     *
     * @var CatalogDataBasePriceInterface[]
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataBasePriceInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataBasePriceInterface[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
