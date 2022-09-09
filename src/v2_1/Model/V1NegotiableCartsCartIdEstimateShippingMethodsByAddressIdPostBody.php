<?php

namespace Kiboko\Magento\V2_1\Model;

class V1NegotiableCartsCartIdEstimateShippingMethodsByAddressIdPostBody
{
    /**
     * The estimate address id
     *
     * @var int|null
     */
    protected $addressId;
    /**
     * The estimate address id
     *
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * The estimate address id
     *
     * @param int|null $addressId
     *
     * @return self
     */
    public function setAddressId(?int $addressId): self
    {
        $this->addressId = $addressId;
        return $this;
    }
}
