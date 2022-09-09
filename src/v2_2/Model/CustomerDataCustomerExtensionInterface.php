<?php

namespace Kiboko\Magento\V2_2\Model;

class CustomerDataCustomerExtensionInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $amazonId;
    /**
     * Extended customer custom attributes interface.
     *
     * @var CompanyDataCompanyCustomerInterface|null
     */
    protected $companyAttributes;
    /**
     *
     *
     * @var bool|null
     */
    protected $isSubscribed;
    /**
     *
     *
     * @var string|null
     */
    protected $vertexCustomerCode;
    /**
     *
     *
     * @return string|null
     */
    public function getAmazonId(): ?string
    {
        return $this->amazonId;
    }
    /**
     *
     *
     * @param string|null $amazonId
     *
     * @return self
     */
    public function setAmazonId(?string $amazonId): self
    {
        $this->amazonId = $amazonId;
        return $this;
    }
    /**
     * Extended customer custom attributes interface.
     *
     * @return CompanyDataCompanyCustomerInterface|null
     */
    public function getCompanyAttributes(): ?CompanyDataCompanyCustomerInterface
    {
        return $this->companyAttributes;
    }
    /**
     * Extended customer custom attributes interface.
     *
     * @param CompanyDataCompanyCustomerInterface|null $companyAttributes
     *
     * @return self
     */
    public function setCompanyAttributes(?CompanyDataCompanyCustomerInterface $companyAttributes): self
    {
        $this->companyAttributes = $companyAttributes;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsSubscribed(): ?bool
    {
        return $this->isSubscribed;
    }
    /**
     *
     *
     * @param bool|null $isSubscribed
     *
     * @return self
     */
    public function setIsSubscribed(?bool $isSubscribed): self
    {
        $this->isSubscribed = $isSubscribed;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVertexCustomerCode(): ?string
    {
        return $this->vertexCustomerCode;
    }
    /**
     *
     *
     * @param string|null $vertexCustomerCode
     *
     * @return self
     */
    public function setVertexCustomerCode(?string $vertexCustomerCode): self
    {
        $this->vertexCustomerCode = $vertexCustomerCode;
        return $this;
    }
}
