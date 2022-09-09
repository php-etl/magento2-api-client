<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsCostPostBody
{
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
    public function getPrices(): ?array
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
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
