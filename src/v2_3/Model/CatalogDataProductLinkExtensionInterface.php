<?php

namespace Kiboko\Magento\V2_3\Model;

class CatalogDataProductLinkExtensionInterface
{
    /**
     *
     *
     * @var float|null
     */
    protected $qty;
    /**
     *
     *
     * @return float|null
     */
    public function getQty(): ?float
    {
        return $this->qty;
    }
    /**
     *
     *
     * @param float|null $qty
     *
     * @return self
     */
    public function setQty(?float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }
}
