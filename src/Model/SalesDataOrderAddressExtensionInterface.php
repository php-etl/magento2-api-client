<?php

namespace Kiboko\Magento\Model;

class SalesDataOrderAddressExtensionInterface
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
    protected $vertexVatCountryCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getVertexVatCountryCode() : ?string
    {
        return $this->vertexVatCountryCode;
    }
    /**
     * 
     *
     * @param string|null $vertexVatCountryCode
     *
     * @return self
     */
    public function setVertexVatCountryCode(?string $vertexVatCountryCode) : self
    {
        $this->initialized['vertexVatCountryCode'] = true;
        $this->vertexVatCountryCode = $vertexVatCountryCode;
        return $this;
    }
}