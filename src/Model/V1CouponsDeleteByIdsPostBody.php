<?php

namespace Kiboko\Magento\Model;

class V1CouponsDeleteByIdsPostBody
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
    public function getIds() : ?array
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
    public function setIds(?array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIgnoreInvalidCoupons() : ?bool
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
    public function setIgnoreInvalidCoupons(?bool $ignoreInvalidCoupons) : self
    {
        $this->initialized['ignoreInvalidCoupons'] = true;
        $this->ignoreInvalidCoupons = $ignoreInvalidCoupons;
        return $this;
    }
}