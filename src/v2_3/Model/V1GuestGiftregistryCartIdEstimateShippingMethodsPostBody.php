<?php

namespace Kiboko\Magento\V2_3\Model;

class V1GuestGiftregistryCartIdEstimateShippingMethodsPostBody
{
    /**
     * The estimate registry id
     *
     * @var int|null
     */
    protected $registryId;
    /**
     * The estimate registry id
     *
     * @return int|null
     */
    public function getRegistryId(): ?int
    {
        return $this->registryId;
    }
    /**
     * The estimate registry id
     *
     * @param int|null $registryId
     *
     * @return self
     */
    public function setRegistryId(?int $registryId): self
    {
        $this->registryId = $registryId;
        return $this;
    }
}
