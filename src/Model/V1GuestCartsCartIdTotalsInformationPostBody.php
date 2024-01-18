<?php

namespace Kiboko\Magento\Model;

class V1GuestCartsCartIdTotalsInformationPostBody
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
     * Interface TotalsInformationInterface
     *
     * @var CheckoutDataTotalsInformationInterface|null
     */
    protected $addressInformation;
    /**
     * Interface TotalsInformationInterface
     *
     * @return CheckoutDataTotalsInformationInterface|null
     */
    public function getAddressInformation() : ?CheckoutDataTotalsInformationInterface
    {
        return $this->addressInformation;
    }
    /**
     * Interface TotalsInformationInterface
     *
     * @param CheckoutDataTotalsInformationInterface|null $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(?CheckoutDataTotalsInformationInterface $addressInformation) : self
    {
        $this->initialized['addressInformation'] = true;
        $this->addressInformation = $addressInformation;
        return $this;
    }
}