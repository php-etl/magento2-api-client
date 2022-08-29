<?php

namespace Kiboko\Magento\v2_4\Model;

class StoreDataStoreInterface
{
    /**
     *
     *
     * @var int
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $code;
    /**
     * Store name
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @var int
     */
    protected $storeGroupId;
    /**
     *
     *
     * @var int
     */
    protected $isActive;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     *
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Store name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Store name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     *
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStoreGroupId(): int
    {
        return $this->storeGroupId;
    }
    /**
     *
     *
     * @param int $storeGroupId
     *
     * @return self
     */
    public function setStoreGroupId(int $storeGroupId): self
    {
        $this->storeGroupId = $storeGroupId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getIsActive(): int
    {
        return $this->isActive;
    }
    /**
     *
     *
     * @param int $isActive
     *
     * @return self
     */
    public function setIsActive(int $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
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
}
