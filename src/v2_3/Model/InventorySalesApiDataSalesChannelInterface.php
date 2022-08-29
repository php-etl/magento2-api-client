<?php

namespace Kiboko\Magento\v2_3\Model;

class InventorySalesApiDataSalesChannelInterface
{
    /**
     * Sales channel type
     *
     * @var string
     */
    protected $type;
    /**
     * Sales channel code
     *
     * @var string
     */
    protected $code;
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\SalesChannelInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Sales channel type
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Sales channel type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Sales channel code
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Sales channel code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\SalesChannelInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\SalesChannelInterface
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