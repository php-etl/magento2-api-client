<?php

namespace Kiboko\Magento\V2_1\Model;

class CompanyDataCompanyExtensionInterface
{
    /**
     *
     *
     * @var int
     */
    protected $applicablePaymentMethod;
    /**
     *
     *
     * @var string
     */
    protected $availablePaymentMethods;
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @var NegotiableQuoteDataCompanyQuoteConfigInterface
     */
    protected $quoteConfig;
    /**
     *
     *
     * @var int
     */
    protected $useConfigSettings;
    /**
     *
     *
     * @return int
     */
    public function getApplicablePaymentMethod(): int
    {
        return $this->applicablePaymentMethod;
    }
    /**
     *
     *
     * @param int $applicablePaymentMethod
     *
     * @return self
     */
    public function setApplicablePaymentMethod(int $applicablePaymentMethod): self
    {
        $this->applicablePaymentMethod = $applicablePaymentMethod;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getAvailablePaymentMethods(): string
    {
        return $this->availablePaymentMethods;
    }
    /**
     *
     *
     * @param string $availablePaymentMethods
     *
     * @return self
     */
    public function setAvailablePaymentMethods(string $availablePaymentMethods): self
    {
        $this->availablePaymentMethods = $availablePaymentMethods;
        return $this;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @return NegotiableQuoteDataCompanyQuoteConfigInterface
     */
    public function getQuoteConfig(): NegotiableQuoteDataCompanyQuoteConfigInterface
    {
        return $this->quoteConfig;
    }
    /**
     * Interface CompanyQuoteConfigInterface
     *
     * @param NegotiableQuoteDataCompanyQuoteConfigInterface $quoteConfig
     *
     * @return self
     */
    public function setQuoteConfig(NegotiableQuoteDataCompanyQuoteConfigInterface $quoteConfig): self
    {
        $this->quoteConfig = $quoteConfig;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getUseConfigSettings(): int
    {
        return $this->useConfigSettings;
    }
    /**
     *
     *
     * @param int $useConfigSettings
     *
     * @return self
     */
    public function setUseConfigSettings(int $useConfigSettings): self
    {
        $this->useConfigSettings = $useConfigSettings;
        return $this;
    }
}
