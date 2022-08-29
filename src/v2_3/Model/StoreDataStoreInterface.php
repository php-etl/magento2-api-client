<?php

namespace Kiboko\Magento\v2_3\Model;

class StoreDataStoreInterface
{
    /**
     *
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\StoreInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @var int
     */
    protected $id;
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
    protected $storeGroupId;
    /**
     *
     *
     * @var int
     */
    protected $websiteId;
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
}
