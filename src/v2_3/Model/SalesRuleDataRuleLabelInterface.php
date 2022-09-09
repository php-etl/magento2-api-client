<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesRuleDataRuleLabelInterface
{
    /**
     * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\RuleLabelInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
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
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * StoreId
     *
     * @return int|null
     */
    public function getStoreId(): ?int
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
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * The label for the store
     *
     * @return string|null
     */
    public function getStoreLabel(): ?string
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
    public function setStoreLabel(?string $storeLabel): self
    {
        $this->storeLabel = $storeLabel;
        return $this;
    }
}
