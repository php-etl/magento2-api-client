<?php

namespace Kiboko\Magento\V2_3\Model;

class V1ConfigurableProductsSkuChildPostBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $childSku;
    /**
     *
     *
     * @return string|null
     */
    public function getChildSku(): ?string
    {
        return $this->childSku;
    }
    /**
     *
     *
     * @param string|null $childSku
     *
     * @return self
     */
    public function setChildSku(?string $childSku): self
    {
        $this->childSku = $childSku;
        return $this;
    }
}
