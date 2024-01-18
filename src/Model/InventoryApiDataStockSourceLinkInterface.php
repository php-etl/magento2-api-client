<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataStockSourceLinkInterface
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
     * Stock id
     *
     * @var int|null
     */
    protected $stockId;
    /**
     * Source code of the link
     *
     * @var string|null
     */
    protected $sourceCode;
    /**
     * Priority of the link
     *
     * @var int|null
     */
    protected $priority;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
     *
     * @var InventoryApiDataStockSourceLinkExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Stock id
     *
     * @return int|null
     */
    public function getStockId() : ?int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int|null $stockId
     *
     * @return self
     */
    public function setStockId(?int $stockId) : self
    {
        $this->initialized['stockId'] = true;
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Source code of the link
     *
     * @return string|null
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }
    /**
     * Source code of the link
     *
     * @param string|null $sourceCode
     *
     * @return self
     */
    public function setSourceCode(?string $sourceCode) : self
    {
        $this->initialized['sourceCode'] = true;
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Priority of the link
     *
     * @return int|null
     */
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    /**
     * Priority of the link
     *
     * @param int|null $priority
     *
     * @return self
     */
    public function setPriority(?int $priority) : self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
     *
     * @return InventoryApiDataStockSourceLinkExtensionInterface|null
     */
    public function getExtensionAttributes() : ?InventoryApiDataStockSourceLinkExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
     *
     * @param InventoryApiDataStockSourceLinkExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?InventoryApiDataStockSourceLinkExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}