<?php

namespace Kiboko\Magento\Model;

class V1BundleProductsOptionsOptionIdPutBody
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
     * @var BundleDataOptionInterface|null
     */
    protected $option;
    /**
     * Interface OptionInterface
     *
     * @return BundleDataOptionInterface|null
     */
    public function getOption() : ?BundleDataOptionInterface
    {
        return $this->option;
    }
    /**
     * Interface OptionInterface
     *
     * @param BundleDataOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?BundleDataOptionInterface $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
}