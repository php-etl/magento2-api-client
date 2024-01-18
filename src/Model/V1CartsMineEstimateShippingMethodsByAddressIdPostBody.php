<?php

namespace Kiboko\Magento\Model;

class V1CartsMineEstimateShippingMethodsByAddressIdPostBody
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
    public function getAddressId() : ?int
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
    public function setAddressId(?int $addressId) : self
    {
        $this->initialized['addressId'] = true;
        $this->addressId = $addressId;
        return $this;
    }
}