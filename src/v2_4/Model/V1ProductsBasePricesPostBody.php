<?php

namespace Kiboko\Magento\V2_4\Model;

class V1ProductsBasePricesPostBody
{
    /**
     *
     *
     * @var CatalogDataBasePriceInterface[]|null
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataBasePriceInterface[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataBasePriceInterface[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
