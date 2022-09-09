<?php

namespace Kiboko\Magento\V2_1\Model;

class NegotiableQuoteDataCompanyQuoteConfigInterface
{
    /**
     * Company id
     *
     * @var string|null
     */
    protected $companyId;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Quote enabled for company
     *
     * @var bool|null
     */
    protected $isQuoteEnabled;
    /**
     * Company id
     *
     * @return string|null
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }
    /**
     * Company id
     *
     * @param string|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?string $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface
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
     * Quote enabled for company
     *
     * @return bool|null
     */
    public function getIsQuoteEnabled(): ?bool
    {
        return $this->isQuoteEnabled;
    }
    /**
     * Quote enabled for company
     *
     * @param bool|null $isQuoteEnabled
     *
     * @return self
     */
    public function setIsQuoteEnabled(?bool $isQuoteEnabled): self
    {
        $this->isQuoteEnabled = $isQuoteEnabled;
        return $this;
    }
}
