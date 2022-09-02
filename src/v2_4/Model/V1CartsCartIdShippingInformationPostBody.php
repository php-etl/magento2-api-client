<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CartsCartIdShippingInformationPostBody
{
    /**
     * Interface ShippingInformationInterface
     *
     * @var CheckoutDataShippingInformationInterface
     */
    protected $addressInformation;
    /**
     * Interface ShippingInformationInterface
     *
     * @return CheckoutDataShippingInformationInterface
     */
    public function getAddressInformation(): CheckoutDataShippingInformationInterface
    {
        return $this->addressInformation;
    }
    /**
     * Interface ShippingInformationInterface
     *
     * @param CheckoutDataShippingInformationInterface $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(CheckoutDataShippingInformationInterface $addressInformation): self
    {
        $this->addressInformation = $addressInformation;
        return $this;
    }
}
