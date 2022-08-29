<?php

namespace Kiboko\Magento\v2_4\Model;

class InventoryApiDataSourceCarrierLinkInterface
{
    /**
     * Carrier code
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Position
     *
     * @var int
     */
    protected $position;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceCarrierLinkInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Carrier code
     *
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceCarrierLinkInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceCarrierLinkInterface
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
