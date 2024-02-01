<?php

namespace Kiboko\Magento\Model;

class V1GuestCartsCartIdShippingInformationPostBody
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
     * Interface ShippingInformationInterface
     *
     * @var CheckoutDataShippingInformationInterface|null
     */
    protected $addressInformation;
    /**
     * Interface ShippingInformationInterface
     *
     * @return CheckoutDataShippingInformationInterface|null
     */
    public function getAddressInformation() : ?CheckoutDataShippingInformationInterface
    {
        return $this->addressInformation;
    }
    /**
     * Interface ShippingInformationInterface
     *
     * @param CheckoutDataShippingInformationInterface|null $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(?CheckoutDataShippingInformationInterface $addressInformation) : self
    {
        $this->initialized['addressInformation'] = true;
        $this->addressInformation = $addressInformation;
        return $this;
    }
}