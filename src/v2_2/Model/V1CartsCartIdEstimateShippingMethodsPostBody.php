<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CartsCartIdEstimateShippingMethodsPostBody
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $address;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface|null
     */
    public function getAddress(): ?QuoteDataAddressInterface
    {
        return $this->address;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface|null $address
     *
     * @return self
     */
    public function setAddress(?QuoteDataAddressInterface $address): self
    {
        $this->address = $address;
        return $this;
    }
}
