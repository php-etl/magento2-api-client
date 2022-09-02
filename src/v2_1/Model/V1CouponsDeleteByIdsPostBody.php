<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CouponsDeleteByIdsPostBody
{
    /**
     *
     *
     * @var int[]
     */
    protected $ids;
    /**
     *
     *
     * @var bool
     */
    protected $ignoreInvalidCoupons;
    /**
     *
     *
     * @return int[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }
    /**
     *
     *
     * @param int[] $ids
     *
     * @return self
     */
    public function setIds(array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIgnoreInvalidCoupons(): bool
    {
        return $this->ignoreInvalidCoupons;
    }
    /**
     *
     *
     * @param bool $ignoreInvalidCoupons
     *
     * @return self
     */
    public function setIgnoreInvalidCoupons(bool $ignoreInvalidCoupons): self
    {
        $this->ignoreInvalidCoupons = $ignoreInvalidCoupons;
        return $this;
    }
}
