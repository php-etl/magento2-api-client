<?php

namespace Kiboko\Magento\V2_3\Model;

class V1NegotiableCartsCartIdShippingInformationPostBody
{
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
    public function getAddressInformation(): ?CheckoutDataShippingInformationInterface
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
    public function setAddressInformation(?CheckoutDataShippingInformationInterface $addressInformation): self
    {
        $this->addressInformation = $addressInformation;
        return $this;
    }
}
