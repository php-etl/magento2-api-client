<?php

namespace Kiboko\Magento\Model;

class CatalogDataPriceUpdateResultInterface
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
     * Error message, that contains description of error occurred during price update.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Parameters, that could be displayed in error message placeholders.
     *
     * @var string[]|null
     */
    protected $parameters;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\PriceUpdateResultInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Error message, that contains description of error occurred during price update.
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Error message, that contains description of error occurred during price update.
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * Parameters, that could be displayed in error message placeholders.
     *
     * @return string[]|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * Parameters, that could be displayed in error message placeholders.
     *
     * @param string[]|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters) : self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
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
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}