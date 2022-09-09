<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestCartsCartIdTotalsInformationPostBody
{
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
    public function getAddressInformation(): ?CheckoutDataTotalsInformationInterface
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
    public function setAddressInformation(?CheckoutDataTotalsInformationInterface $addressInformation): self
    {
        $this->addressInformation = $addressInformation;
        return $this;
    }
}
