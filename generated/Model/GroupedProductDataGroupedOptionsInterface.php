<?php

namespace Kiboko\Magento\Model;

class GroupedProductDataGroupedOptionsInterface
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
     * Associated product id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Associated product qty
     *
     * @var int|null
     */
    protected $qty;
    /**
     * ExtensionInterface class for @see \Magento\GroupedProduct\Api\Data\GroupedOptionsInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Associated product id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Associated product id
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
     * Associated product qty
     *
     * @return int|null
     */
    public function getQty() : ?int
    {
        return $this->qty;
    }
    /**
     * Associated product qty
     *
     * @param int|null $qty
     *
     * @return self
     */
    public function setQty(?int $qty) : self
    {
        $this->initialized['qty'] = true;
        $this->qty = $qty;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\GroupedProduct\Api\Data\GroupedOptionsInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\GroupedProduct\Api\Data\GroupedOptionsInterface
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