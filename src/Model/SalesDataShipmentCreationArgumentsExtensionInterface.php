<?php

namespace Kiboko\Magento\Model;

class SalesDataShipmentCreationArgumentsExtensionInterface
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
    protected $sourceCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }
    /**
     * 
     *
     * @param string|null $sourceCode
     *
     * @return self
     */
    public function setSourceCode(?string $sourceCode) : self
    {
        $this->initialized['sourceCode'] = true;
        $this->sourceCode = $sourceCode;
        return $this;
    }
}