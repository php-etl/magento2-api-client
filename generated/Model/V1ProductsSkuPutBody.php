<?php

namespace Kiboko\Magento\Model;

class V1ProductsSkuPutBody
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
     * @var CatalogDataProductInterface|null
     */
    protected $product;
    /**
     * 
     *
     * @var bool|null
     */
    protected $saveOptions;
    /**
     * 
     *
     * @return CatalogDataProductInterface|null
     */
    public function getProduct() : ?CatalogDataProductInterface
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param CatalogDataProductInterface|null $product
     *
     * @return self
     */
    public function setProduct(?CatalogDataProductInterface $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSaveOptions() : ?bool
    {
        return $this->saveOptions;
    }
    /**
     * 
     *
     * @param bool|null $saveOptions
     *
     * @return self
     */
    public function setSaveOptions(?bool $saveOptions) : self
    {
        $this->initialized['saveOptions'] = true;
        $this->saveOptions = $saveOptions;
        return $this;
    }
}