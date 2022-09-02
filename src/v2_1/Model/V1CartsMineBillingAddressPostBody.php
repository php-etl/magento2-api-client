<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CartsMineBillingAddressPostBody
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface
     */
    protected $address;
    /**
     *
     *
     * @var bool
     */
    protected $useForShipping;
    /**
     * Interface AddressInterface
     *
     * @return QuoteDataAddressInterface
     */
    public function getAddress(): QuoteDataAddressInterface
    {
        return $this->address;
    }
    /**
     * Interface AddressInterface
     *
     * @param QuoteDataAddressInterface $address
     *
     * @return self
     */
    public function setAddress(QuoteDataAddressInterface $address): self
    {
        $this->address = $address;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getUseForShipping(): bool
    {
        return $this->useForShipping;
    }
    /**
     *
     *
     * @param bool $useForShipping
     *
     * @return self
     */
    public function setUseForShipping(bool $useForShipping): self
    {
        $this->useForShipping = $useForShipping;
        return $this;
    }
}
