<?php

namespace Kiboko\Magento\Model;

class InventoryApiDataSourceCarrierLinkInterface
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
     * Carrier code
     *
     * @var string|null
     */
    protected $carrierCode;
    /**
     * Position
     *
     * @var int|null
     */
    protected $position;
    /**
     * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceCarrierLinkInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Carrier code
     *
     * @return string|null
     */
    public function getCarrierCode() : ?string
    {
        return $this->carrierCode;
    }
    /**
     * Carrier code
     *
     * @param string|null $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Position
     *
     * @return int|null
     */
    public function getPosition() : ?int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position) : self
    {
        $this->initialized['position'] = true;
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}