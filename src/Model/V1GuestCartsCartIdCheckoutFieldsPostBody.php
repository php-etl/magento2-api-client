<?php

namespace Kiboko\Magento\Model;

class V1GuestCartsCartIdCheckoutFieldsPostBody
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
    protected $serviceSelection;
    /**
     * 
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getServiceSelection() : ?array
    {
        return $this->serviceSelection;
    }
    /**
     * 
     *
     * @param FrameworkAttributeInterface[]|null $serviceSelection
     *
     * @return self
     */
    public function setServiceSelection(?array $serviceSelection) : self
    {
        $this->initialized['serviceSelection'] = true;
        $this->serviceSelection = $serviceSelection;
        return $this;
    }
}