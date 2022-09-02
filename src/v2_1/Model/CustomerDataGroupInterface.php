<?php

namespace Kiboko\Magento\V2_1\Model;

class CustomerDataGroupInterface
{
    /**
     * Code
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Tax class id
     *
     * @var int
     */
    protected $taxClassId;
    /**
     * Tax class name
     *
     * @var string
     */
    protected $taxClassName;
    /**
     * Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Code
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
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
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
     * Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Tax class id
     *
     * @return int
     */
    public function getTaxClassId(): int
    {
        return $this->taxClassId;
    }
    /**
     * Tax class id
     *
     * @param int $taxClassId
     *
     * @return self
     */
    public function setTaxClassId(int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;
        return $this;
    }
    /**
     * Tax class name
     *
     * @return string
     */
    public function getTaxClassName(): string
    {
        return $this->taxClassName;
    }
    /**
     * Tax class name
     *
     * @param string $taxClassName
     *
     * @return self
     */
    public function setTaxClassName(string $taxClassName): self
    {
        $this->taxClassName = $taxClassName;
        return $this;
    }
}
