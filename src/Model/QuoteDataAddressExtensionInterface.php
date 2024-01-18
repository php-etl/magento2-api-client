<?php

namespace Kiboko\Magento\Model;

class QuoteDataAddressExtensionInterface
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
     * @var FrameworkAttributeInterface[]|null
     */
    protected $checkoutFields;
    /**
     * 
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCheckoutFields() : ?array
    {
        return $this->checkoutFields;
    }
    /**
     * 
     *
     * @param FrameworkAttributeInterface[]|null $checkoutFields
     *
     * @return self
     */
    public function setCheckoutFields(?array $checkoutFields) : self
    {
        $this->initialized['checkoutFields'] = true;
        $this->checkoutFields = $checkoutFields;
        return $this;
    }
}