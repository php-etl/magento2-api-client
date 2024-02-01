<?php

namespace Kiboko\Magento\Model;

class V1ConfigurableProductsVariationPutBody
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
     * @var ConfigurableProductDataOptionInterface[]|null
     */
    protected $options;
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
     * @return ConfigurableProductDataOptionInterface[]|null
     */
    public function getOptions() : ?array
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param ConfigurableProductDataOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}