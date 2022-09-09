<?php

namespace Kiboko\Magento\V2_1\Model;

class V1ProductsBasePricesInformationPostBody
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $skus;
    /**
     *
     *
     * @return string[]|null
     */
    public function getSkus(): ?array
    {
        return $this->skus;
    }
    /**
     *
     *
     * @param string[]|null $skus
     *
     * @return self
     */
    public function setSkus(?array $skus): self
    {
        $this->skus = $skus;
        return $this;
    }
}
