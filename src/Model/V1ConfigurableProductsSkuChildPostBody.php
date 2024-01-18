<?php

namespace Kiboko\Magento\Model;

class V1ConfigurableProductsSkuChildPostBody
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
     * @var string|null
     */
    protected $childSku;
    /**
     * 
     *
     * @return string|null
     */
    public function getChildSku() : ?string
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
    public function setChildSku(?string $childSku) : self
    {
        $this->initialized['childSku'] = true;
        $this->childSku = $childSku;
        return $this;
    }
}