<?php

namespace Kiboko\Magento\Model;

class V1ProductsOptionsOptionIdPutBody
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
     * @var CatalogDataProductCustomOptionInterface|null
     */
    protected $option;
    /**
     * 
     *
     * @return CatalogDataProductCustomOptionInterface|null
     */
    public function getOption() : ?CatalogDataProductCustomOptionInterface
    {
        return $this->option;
    }
    /**
     * 
     *
     * @param CatalogDataProductCustomOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?CatalogDataProductCustomOptionInterface $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
}