<?php

namespace Kiboko\Magento\v2_3\Model;

class CatalogDataProductLinkExtensionInterface
{
    /**
     *
     *
     * @var float
     */
    protected $qty;
    /**
     *
     *
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }
    /**
     *
     *
     * @param float $qty
     *
     * @return self
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
}
