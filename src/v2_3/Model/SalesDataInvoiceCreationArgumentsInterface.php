<?php

namespace Kiboko\Magento\V2_3\Model;

class SalesDataInvoiceCreationArgumentsInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCreationArgumentsInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCreationArgumentsInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\InvoiceCreationArgumentsInterface
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
