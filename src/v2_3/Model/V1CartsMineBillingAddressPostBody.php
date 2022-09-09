<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CartsMineBillingAddressPostBody
{
    /**
     * Interface AddressInterface
     *
     * @var QuoteDataAddressInterface|null
     */
    protected $address;
    /**
     *
     *
     * @var bool|null
     */
    protected $useForShipping;
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
    /**
     *
     *
     * @return bool|null
     */
    public function getUseForShipping(): ?bool
    {
        return $this->useForShipping;
    }
    /**
     *
     *
     * @param bool|null $useForShipping
     *
     * @return self
     */
    public function setUseForShipping(?bool $useForShipping): self
    {
        $this->useForShipping = $useForShipping;
        return $this;
    }
}
