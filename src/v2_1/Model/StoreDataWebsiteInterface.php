<?php

namespace Kiboko\Magento\v2_1\Model;

class StoreDataWebsiteInterface
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
     * Website name
     *
     * @var string
     */
    protected $name;
    /**
     *
     *
     * @var int
     */
    protected $defaultGroupId;
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
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
     * Website name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Website name
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
    public function getDefaultGroupId(): int
    {
        return $this->defaultGroupId;
    }
    /**
     *
     *
     * @param int $defaultGroupId
     *
     * @return self
     */
    public function setDefaultGroupId(int $defaultGroupId): self
    {
        $this->defaultGroupId = $defaultGroupId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Store\Api\Data\WebsiteInterface
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
