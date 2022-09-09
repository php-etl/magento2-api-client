<?php

namespace Kiboko\Magento\V2_4\Model;

class V1CouponsDeleteByCodesPostBody
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $codes;
    /**
     *
     *
     * @var bool|null
     */
    protected $ignoreInvalidCoupons;
    /**
     *
     *
     * @return string[]|null
     */
    public function getCodes(): ?array
    {
        return $this->codes;
    }
    /**
     *
     *
     * @param string[]|null $codes
     *
     * @return self
     */
    public function setCodes(?array $codes): self
    {
        $this->codes = $codes;
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
