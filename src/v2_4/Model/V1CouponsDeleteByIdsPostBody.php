<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CouponsDeleteByIdsPostBody
{
    /**
     *
     *
     * @var int[]|null
     */
    protected $ids;
    /**
     *
     *
     * @var bool|null
     */
    protected $ignoreInvalidCoupons;
    /**
     *
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }
    /**
     *
     *
     * @param int[]|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIgnoreInvalidCoupons(): ?bool
    {
        return $this->ignoreInvalidCoupons;
    }
    /**
     *
     *
     * @param bool|null $ignoreInvalidCoupons
     *
     * @return self
     */
    public function setIgnoreInvalidCoupons(?bool $ignoreInvalidCoupons): self
    {
        $this->ignoreInvalidCoupons = $ignoreInvalidCoupons;
        return $this;
    }
}
