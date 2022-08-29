<?php

namespace Kiboko\Magento\v2_2\Model;

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
     * @var FrameworkAttributeInterface[]
     */
    protected $checkoutFields;
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
    /**
     *
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCheckoutFields(): array
    {
        return $this->checkoutFields;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[] $checkoutFields
     *
     * @return self
     */
    public function setCheckoutFields(array $checkoutFields): self
    {
        $this->checkoutFields = $checkoutFields;
        return $this;
    }
}