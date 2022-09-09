<?php

namespace Kiboko\Magento\V2_2\Model;

class V1ProductsSpecialPriceDeletePostBody
{
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
    public function getPrices(): ?array
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
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
