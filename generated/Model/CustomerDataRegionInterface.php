<?php

namespace Kiboko\Magento\Model;

class CustomerDataRegionInterface
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
     * Region code
     *
     * @var string|null
     */
    protected $regionCode;
    /**
     * Region
     *
     * @var string|null
     */
    protected $region;
    /**
     * Region id
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\RegionInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Region code
     *
     * @return string|null
     */
    public function getRegionCode() : ?string
    {
        return $this->regionCode;
    }
    /**
     * Region code
     *
     * @param string|null $regionCode
     *
     * @return self
     */
    public function setRegionCode(?string $regionCode) : self
    {
        $this->initialized['regionCode'] = true;
        $this->regionCode = $regionCode;
        return $this;
    }
    /**
     * Region
     *
     * @return string|null
     */
    public function getRegion() : ?string
    {
        return $this->region;
    }
    /**
     * Region
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region) : self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * Region id
     *
     * @return int|null
     */
    public function getRegionId() : ?int
    {
        return $this->regionId;
    }
    /**
     * Region id
     *
     * @param int|null $regionId
     *
     * @return self
     */
    public function setRegionId(?int $regionId) : self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\RegionInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\RegionInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}