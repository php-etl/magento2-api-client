<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataTotalsAdditionalDataInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @var QuoteDataTotalsAdditionalDataExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @return QuoteDataTotalsAdditionalDataExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataTotalsAdditionalDataExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @param QuoteDataTotalsAdditionalDataExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataTotalsAdditionalDataExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
