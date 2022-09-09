<?php

namespace Kiboko\Magento\V2_4\Model;

class CompanyDataCompanyExtensionInterface
{
    /**
     *
     *
     * @var int|null
     */
    protected $applicablePaymentMethod;
    /**
     *
     *
     * @var string|null
     */
    protected $availablePaymentMethods;
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @var NegotiableQuoteDataCompanyQuoteConfigInterface|null
     */
    protected $quoteConfig;
    /**
     *
     *
     * @var int|null
     */
    protected $useConfigSettings;
    /**
     *
     *
     * @return int|null
     */
    public function getApplicablePaymentMethod(): ?int
    {
        return $this->applicablePaymentMethod;
    }
    /**
     *
     *
     * @param int|null $applicablePaymentMethod
     *
     * @return self
     */
    public function setApplicablePaymentMethod(?int $applicablePaymentMethod): self
    {
        $this->applicablePaymentMethod = $applicablePaymentMethod;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAvailablePaymentMethods(): ?string
    {
        return $this->availablePaymentMethods;
    }
    /**
     *
     *
     * @param string|null $availablePaymentMethods
     *
     * @return self
     */
    public function setAvailablePaymentMethods(?string $availablePaymentMethods): self
    {
        $this->availablePaymentMethods = $availablePaymentMethods;
        return $this;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @return NegotiableQuoteDataCompanyQuoteConfigInterface|null
     */
    public function getQuoteConfig(): ?NegotiableQuoteDataCompanyQuoteConfigInterface
    {
        return $this->quoteConfig;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @param NegotiableQuoteDataCompanyQuoteConfigInterface|null $quoteConfig
     *
     * @return self
     */
    public function setQuoteConfig(?NegotiableQuoteDataCompanyQuoteConfigInterface $quoteConfig): self
    {
        $this->quoteConfig = $quoteConfig;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getUseConfigSettings(): ?int
    {
        return $this->useConfigSettings;
    }
    /**
     *
     *
     * @param int|null $useConfigSettings
     *
     * @return self
     */
    public function setUseConfigSettings(?int $useConfigSettings): self
    {
        $this->useConfigSettings = $useConfigSettings;
        return $this;
    }
}
