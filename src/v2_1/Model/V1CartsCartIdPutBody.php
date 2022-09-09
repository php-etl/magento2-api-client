<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CartsCartIdPutBody
{
    /**
     * The customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     *
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * The customer ID.
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * The customer ID.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }
    /**
     *
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
}
