<?php

namespace Kiboko\Magento\V2_1\Model;

class QuoteDataAddressExtensionInterface
{
    /**
     *
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $checkoutFields;
    /**
     *
     *
     * @var int|null
     */
    protected $giftRegistryId;
    /**
     *
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCheckoutFields(): ?array
    {
        return $this->checkoutFields;
    }
    /**
     *
     *
     * @param FrameworkAttributeInterface[]|null $checkoutFields
     *
     * @return self
     */
    public function setCheckoutFields(?array $checkoutFields): self
    {
        $this->checkoutFields = $checkoutFields;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getGiftRegistryId(): ?int
    {
        return $this->giftRegistryId;
    }
    /**
     *
     *
     * @param int|null $giftRegistryId
     *
     * @return self
     */
    public function setGiftRegistryId(?int $giftRegistryId): self
    {
        $this->giftRegistryId = $giftRegistryId;
        return $this;
    }
}
