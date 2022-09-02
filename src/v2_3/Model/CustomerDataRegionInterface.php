<?php

namespace Kiboko\Magento\V2_3\Model;

class CustomerDataRegionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\RegionInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Region
     *
     * @var string
     */
    protected $region;
    /**
     * Region code
     *
     * @var string
     */
    protected $regionCode;
    /**
     * Region id
     *
     * @var int
     */
    protected $regionId;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Region
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region code
     *
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }
    /**
     * Region code
     *
     * @param string $regionCode
     *
     * @return self
     */
    public function setRegionCode(string $regionCode): self
    {
        $this->regionCode = $regionCode;
        return $this;
    }
    /**
     * Region id
     *
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->regionId;
    }
    /**
     * Region id
     *
     * @param int $regionId
     *
     * @return self
     */
    public function setRegionId(int $regionId): self
    {
        $this->regionId = $regionId;
        return $this;
    }
}
