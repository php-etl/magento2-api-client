<?php

namespace Kiboko\Magento\v2_3\Model;

class QuoteDataAddressExtensionInterface
{
    /**
     *
     *
     * @var SalesRuleDataRuleDiscountInterface[]
     */
    protected $discounts;
    /**
     *
     *
     * @var int
     */
    protected $giftRegistryId;
    /**
     *
     *
     * @return SalesRuleDataRuleDiscountInterface[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }
    /**
     *
     *
     * @param SalesRuleDataRuleDiscountInterface[] $discounts
     *
     * @return self
     */
    public function setDiscounts(array $discounts): self
    {
        $this->discounts = $discounts;
        return $this;
    }
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
