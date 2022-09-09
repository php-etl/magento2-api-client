<?php

namespace Kiboko\Magento\V2_4\Model;

class QuoteDataProductOptionInterface
{
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
    public function getExtensionAttributes(): ?QuoteDataProductOptionExtensionInterface
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
    public function setExtensionAttributes(?QuoteDataProductOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
