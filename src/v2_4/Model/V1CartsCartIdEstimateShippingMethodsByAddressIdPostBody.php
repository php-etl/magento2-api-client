<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CartsCartIdEstimateShippingMethodsByAddressIdPostBody
{
    /**
     * The estimate address id
     *
     * @var int
     */
    protected $addressId;
    /**
     * The estimate address id
     *
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }
    /**
     * The estimate address id
     *
     * @param int $addressId
     *
     * @return self
     */
    public function setAddressId(int $addressId): self
    {
        $this->addressId = $addressId;
        return $this;
    }
}
