<?php

namespace Kiboko\Magento\Model;

class V1AddressCleansePostBody
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
     * This is the interface for submission to the API.  For ease the API only takes interfaces the same as the SDK, but the SDK model cannot implement the interface.  Since the SDK model technically isn't API, we re-implement a simple DTO to handle the scenario.
     *
     * @var VertexAddressValidationApiDataAddressInterface|null
     */
    protected $address;
    /**
     * 
     *
     * @var string|null
     */
    protected $scopeCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $scopeType;
    /**
     * This is the interface for submission to the API.  For ease the API only takes interfaces the same as the SDK, but the SDK model cannot implement the interface.  Since the SDK model technically isn't API, we re-implement a simple DTO to handle the scenario.
     *
     * @return VertexAddressValidationApiDataAddressInterface|null
     */
    public function getAddress() : ?VertexAddressValidationApiDataAddressInterface
    {
        return $this->address;
    }
    /**
     * This is the interface for submission to the API.  For ease the API only takes interfaces the same as the SDK, but the SDK model cannot implement the interface.  Since the SDK model technically isn't API, we re-implement a simple DTO to handle the scenario.
     *
     * @param VertexAddressValidationApiDataAddressInterface|null $address
     *
     * @return self
     */
    public function setAddress(?VertexAddressValidationApiDataAddressInterface $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScopeCode() : ?string
    {
        return $this->scopeCode;
    }
    /**
     * 
     *
     * @param string|null $scopeCode
     *
     * @return self
     */
    public function setScopeCode(?string $scopeCode) : self
    {
        $this->initialized['scopeCode'] = true;
        $this->scopeCode = $scopeCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScopeType() : ?string
    {
        return $this->scopeType;
    }
    /**
     * 
     *
     * @param string|null $scopeType
     *
     * @return self
     */
    public function setScopeType(?string $scopeType) : self
    {
        $this->initialized['scopeType'] = true;
        $this->scopeType = $scopeType;
        return $this;
    }
}