<?php

namespace Kiboko\Magento\Model;

class QuoteDataPaymentInterface
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
     * Purchase order number
     *
     * @var string|null
     */
    protected $poNumber;
    /**
     * Payment method code
     *
     * @var string|null
     */
    protected $method;
    /**
     * Payment additional details
     *
     * @var string[]|null
     */
    protected $additionalData;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @var QuoteDataPaymentExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Purchase order number
     *
     * @return string|null
     */
    public function getPoNumber() : ?string
    {
        return $this->poNumber;
    }
    /**
     * Purchase order number
     *
     * @param string|null $poNumber
     *
     * @return self
     */
    public function setPoNumber(?string $poNumber) : self
    {
        $this->initialized['poNumber'] = true;
        $this->poNumber = $poNumber;
        return $this;
    }
    /**
     * Payment method code
     *
     * @return string|null
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * Payment method code
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * Payment additional details
     *
     * @return string[]|null
     */
    public function getAdditionalData() : ?array
    {
        return $this->additionalData;
    }
    /**
     * Payment additional details
     *
     * @param string[]|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?array $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @return QuoteDataPaymentExtensionInterface|null
     */
    public function getExtensionAttributes() : ?QuoteDataPaymentExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
     *
     * @param QuoteDataPaymentExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataPaymentExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}