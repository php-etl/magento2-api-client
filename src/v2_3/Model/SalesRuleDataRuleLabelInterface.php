<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesRuleDataRuleLabelInterface
{
    /**
     * StoreId
     *
     * @var int
     */
    protected $storeId;
    /**
     * The label for the store
     *
     * @var string
     */
    protected $storeLabel;
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleLabelInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * StoreId
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * StoreId
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * The label for the store
     *
     * @return string
     */
    public function getStoreLabel() : string
    {
        return $this->storeLabel;
    }
    /**
     * The label for the store
     *
     * @param string $storeLabel
     *
     * @return self
     */
    public function setStoreLabel(string $storeLabel) : self
    {
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
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}