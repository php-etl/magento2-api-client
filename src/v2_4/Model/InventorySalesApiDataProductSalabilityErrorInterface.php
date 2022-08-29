<?php

namespace Kiboko\Magento\v2_4\Model;

class InventorySalesApiDataProductSalabilityErrorInterface
{
    /**
     *
     *
     * @var string
     */
    protected $code;
    /**
     *
     *
     * @var string
     */
    protected $message;
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalabilityErrorInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     *
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     *
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     *
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalabilityErrorInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\InventorySalesApi\Api\Data\ProductSalabilityErrorInterface
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
