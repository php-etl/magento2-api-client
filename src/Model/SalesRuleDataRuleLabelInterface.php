<?php

namespace Kiboko\Magento\Model;

class SalesRuleDataRuleLabelInterface
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
     * StoreId
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * The label for the store
     *
     * @var string|null
     */
    protected $storeLabel;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleLabelInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * StoreId
     *
     * @return int|null
     */
    public function getStoreId() : ?int
    {
        return $this->storeId;
    }
    /**
     * StoreId
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * The label for the store
     *
     * @return string|null
     */
    public function getStoreLabel() : ?string
    {
        return $this->storeLabel;
    }
    /**
     * The label for the store
     *
     * @param string|null $storeLabel
     *
     * @return self
     */
    public function setStoreLabel(?string $storeLabel) : self
    {
        $this->initialized['storeLabel'] = true;
        $this->storeLabel = $storeLabel;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleLabelInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleLabelInterface
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