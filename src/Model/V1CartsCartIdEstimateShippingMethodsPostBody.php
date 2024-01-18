<?php

namespace Kiboko\Magento\Model;

class V1CartsCartIdEstimateShippingMethodsPostBody
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
    public function getAddress() : ?QuoteDataAddressInterface
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
    public function setAddress(?QuoteDataAddressInterface $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
}