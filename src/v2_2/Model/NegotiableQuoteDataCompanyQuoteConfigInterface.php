<?php

namespace Kiboko\Magento\v2_2\Model;

class NegotiableQuoteDataCompanyQuoteConfigInterface
{
    /**
     * Company id
     *
     * @var string
     */
    protected $companyId;
    /**
     * Quote enabled for company
     *
     * @var bool
     */
    protected $isQuoteEnabled;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\CompanyQuoteConfigInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Company id
     *
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }
    /**
     * Company id
     *
     * @param string $companyId
     *
     * @return self
     */
    public function setCompanyId(string $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Quote enabled for company
     *
     * @return bool
     */
    public function getIsQuoteEnabled(): bool
    {
        return $this->isQuoteEnabled;
    }
    /**
     * Quote enabled for company
     *
     * @param bool $isQuoteEnabled
     *
     * @return self
     */
    public function setIsQuoteEnabled(bool $isQuoteEnabled): self
    {
        $this->isQuoteEnabled = $isQuoteEnabled;
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
}
