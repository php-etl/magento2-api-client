<?php

namespace Kiboko\Magento\V2\Model;

class V1ProductsCostDeletePostBody
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
    public function getSkus() : array
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
    public function setSkus(array $skus) : self
    {
        $this->skus = $skus;
        return $this;
    }
}