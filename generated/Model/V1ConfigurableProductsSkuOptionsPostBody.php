<?php

namespace Kiboko\Magento\Model;

class V1ConfigurableProductsSkuOptionsPostBody
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
     * Interface OptionInterface
     *
     * @var ConfigurableProductDataOptionInterface|null
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return ConfigurableProductDataOptionInterface|null
     */
    public function getOption() : ?ConfigurableProductDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param ConfigurableProductDataOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?ConfigurableProductDataOptionInterface $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
}