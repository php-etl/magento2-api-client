<?php

namespace Kiboko\Magento\v2_4\Model;

class InventoryApiDataStockSourceLinkInterface
{
    /**
     * Stock id
     *
     * @var int
     */
    protected $stockId;
    /**
     * Source code of the link
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * Priority of the link
     *
     * @var int
     */
    protected $priority;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Stock id
     *
     * @return int
     */
    public function getStockId(): int
    {
        return $this->stockId;
    }
    /**
     * Stock id
     *
     * @param int $stockId
     *
     * @return self
     */
    public function setStockId(int $stockId): self
    {
        $this->stockId = $stockId;
        return $this;
    }
    /**
     * Source code of the link
     *
     * @return string
     */
    public function getSourceCode(): string
    {
        return $this->sourceCode;
    }
    /**
     * Source code of the link
     *
     * @param string $sourceCode
     *
     * @return self
     */
    public function setSourceCode(string $sourceCode): self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
    /**
     * Priority of the link
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority of the link
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
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
