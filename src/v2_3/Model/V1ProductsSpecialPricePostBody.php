<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ProductsSpecialPricePostBody
{
    /**
     *
     *
     * @var CatalogDataSpecialPriceInterface[]
     */
    protected $prices;
    /**
     *
     *
     * @return CatalogDataSpecialPriceInterface[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param CatalogDataSpecialPriceInterface[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
