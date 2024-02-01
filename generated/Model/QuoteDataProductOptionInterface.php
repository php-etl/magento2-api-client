<?php

namespace Kiboko\Magento\Model;

class QuoteDataProductOptionInterface
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @var QuoteDataProductOptionExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @return QuoteDataProductOptionExtensionInterface|null
     */
    public function getExtensionAttributes() : ?QuoteDataProductOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @param QuoteDataProductOptionExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataProductOptionExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}