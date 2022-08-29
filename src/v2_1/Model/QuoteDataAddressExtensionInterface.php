<?php

namespace Kiboko\Magento\v2_1\Model;

class QuoteDataAddressExtensionInterface
{
    /**
     *
     *
     * @var int
     */
    protected $giftRegistryId;
    /**
     *
     *
     * @return int
     */
    public function getGiftRegistryId(): int
    {
        return $this->giftRegistryId;
    }
    /**
     *
     *
     * @param int $giftRegistryId
     *
     * @return self
     */
    public function setGiftRegistryId(int $giftRegistryId): self
    {
        $this->giftRegistryId = $giftRegistryId;
        return $this;
    }
}
