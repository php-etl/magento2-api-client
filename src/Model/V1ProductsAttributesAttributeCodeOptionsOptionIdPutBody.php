<?php

namespace Kiboko\Magento\Model;

class V1ProductsAttributesAttributeCodeOptionsOptionIdPutBody
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
     * Created from:
     *
     * @var EavDataAttributeOptionInterface|null
     */
    protected $option;
    /**
     * Created from:
     *
     * @return EavDataAttributeOptionInterface|null
     */
    public function getOption() : ?EavDataAttributeOptionInterface
    {
        return $this->option;
    }
    /**
     * Created from:
     *
     * @param EavDataAttributeOptionInterface|null $option
     *
     * @return self
     */
    public function setOption(?EavDataAttributeOptionInterface $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
}