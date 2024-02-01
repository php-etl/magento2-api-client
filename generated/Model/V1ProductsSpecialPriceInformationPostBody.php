<?php

namespace Kiboko\Magento\Model;

class V1ProductsSpecialPriceInformationPostBody
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getSkus() : ?array
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
    public function setSkus(?array $skus) : self
    {
        $this->initialized['skus'] = true;
        $this->skus = $skus;
        return $this;
    }
}