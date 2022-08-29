<?php

namespace Kiboko\Magento\v2_1\Model;

class CatalogDataPriceUpdateResultInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\PriceUpdateResultInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Error message, that contains description of error occurred during price update.
     *
     * @var string
     */
    protected $message;
    /**
     * Parameters, that could be displayed in error message placeholders.
     *
     * @var string[]
     */
    protected $parameters;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\PriceUpdateResultInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\PriceUpdateResultInterface
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
     * Error message, that contains description of error occurred during price update.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Error message, that contains description of error occurred during price update.
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
     * Parameters, that could be displayed in error message placeholders.
     *
     * @return string[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * Parameters, that could be displayed in error message placeholders.
     *
     * @param string[] $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }
}
