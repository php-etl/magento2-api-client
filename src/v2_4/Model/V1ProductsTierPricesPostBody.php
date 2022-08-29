<?php

namespace Kiboko\Magento\v2_4\Model;

class V1ProductsTierPricesPostBody
{
    /**
     *
     *
     * @var CatalogDataTierPriceInterface[]
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataTierPriceInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataTierPriceInterface[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
