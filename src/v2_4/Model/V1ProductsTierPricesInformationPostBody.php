<?php

namespace Kiboko\Magento\v2_4\Model;

class V1ProductsTierPricesInformationPostBody
{
    /**
     *
     *
     * @var string[]
     */
    protected $skus;
    /**
     *
     *
     * @return string[]
     */
    public function getSkus(): array
    {
        return $this->skus;
    }
    /**
     *
     *
     * @param string[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus): self
    {
        $this->skus = $skus;
        return $this;
    }
}