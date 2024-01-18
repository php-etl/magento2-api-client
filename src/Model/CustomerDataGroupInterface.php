<?php

namespace Kiboko\Magento\Model;

class CustomerDataGroupInterface
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
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Tax class id
     *
     * @var int|null
     */
    protected $taxClassId;
    /**
     * Tax class name
     *
     * @var string|null
     */
    protected $taxClassName;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\GroupInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Tax class id
     *
     * @return int|null
     */
    public function getTaxClassId() : ?int
    {
        return $this->taxClassId;
    }
    /**
     * Tax class id
     *
     * @param int|null $taxClassId
     *
     * @return self
     */
    public function setTaxClassId(?int $taxClassId) : self
    {
        $this->initialized['taxClassId'] = true;
        $this->taxClassId = $taxClassId;
        return $this;
    }
    /**
     * Tax class name
     *
     * @return string|null
     */
    public function getTaxClassName() : ?string
    {
        return $this->taxClassName;
    }
    /**
     * Tax class name
     *
     * @param string|null $taxClassName
     *
     * @return self
     */
    public function setTaxClassName(?string $taxClassName) : self
    {
        $this->initialized['taxClassName'] = true;
        $this->taxClassName = $taxClassName;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}