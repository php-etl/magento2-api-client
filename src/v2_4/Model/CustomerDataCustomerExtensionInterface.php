<?php

namespace Kiboko\Magento\v2_4\Model;

class CustomerDataCustomerExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $amazonId;
    /**
     * Extended customer custom attributes interface.
     *
     * @var CompanyDataCompanyCustomerInterface
     */
    protected $companyAttributes;
    /**
     *
     *
     * @var bool
     */
    protected $isSubscribed;
    /**
     *
     *
     * @var string
     */
    protected $vertexCustomerCode;
    /**
     *
     *
     * @return string
     */
    public function getAmazonId(): string
    {
        return $this->amazonId;
    }
    /**
     *
     *
     * @param string $amazonId
     *
     * @return self
     */
    public function setAmazonId(string $amazonId): self
    {
        $this->amazonId = $amazonId;
        return $this;
    }
    /**
     * Extended customer custom attributes interface.
     *
     * @return CompanyDataCompanyCustomerInterface
     */
    public function getCompanyAttributes(): CompanyDataCompanyCustomerInterface
    {
        return $this->companyAttributes;
    }
    /**
     * Extended customer custom attributes interface.
     *
     * @param CompanyDataCompanyCustomerInterface $companyAttributes
     *
     * @return self
     */
    public function setCompanyAttributes(CompanyDataCompanyCustomerInterface $companyAttributes): self
    {
        $this->companyAttributes = $companyAttributes;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsSubscribed(): bool
    {
        return $this->isSubscribed;
    }
    /**
     *
     *
     * @param bool $isSubscribed
     *
     * @return self
     */
    public function setIsSubscribed(bool $isSubscribed): self
    {
        $this->isSubscribed = $isSubscribed;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getVertexCustomerCode(): string
    {
        return $this->vertexCustomerCode;
    }
    /**
     *
     *
     * @param string $vertexCustomerCode
     *
     * @return self
     */
    public function setVertexCustomerCode(string $vertexCustomerCode): self
    {
        $this->vertexCustomerCode = $vertexCustomerCode;
        return $this;
    }
}
