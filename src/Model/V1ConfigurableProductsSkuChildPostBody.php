<?php

namespace Kiboko\Magento\V2\Model;

class V1ConfigurableProductsSkuChildPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $childSku;
    /**
     *
     *
     * @return string
     */
    public function getChildSku(): string
    {
        return $this->childSku;
    }
    /**
     *
     *
     * @param string $childSku
     *
     * @return self
     */
    public function setChildSku(string $childSku): self
    {
        $this->childSku = $childSku;
        return $this;
    }
}
