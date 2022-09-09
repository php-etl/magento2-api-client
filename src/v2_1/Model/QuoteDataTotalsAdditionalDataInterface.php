<?php

namespace Kiboko\Magento\V2_1\Model;

class QuoteDataTotalsAdditionalDataInterface
{
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @var QuoteDataTotalsAdditionalDataExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @return QuoteDataTotalsAdditionalDataExtensionInterface|null
     */
    public function getExtensionAttributes(): ?QuoteDataTotalsAdditionalDataExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsAdditionalDataInterface
     *
     * @param QuoteDataTotalsAdditionalDataExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataTotalsAdditionalDataExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
