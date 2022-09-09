<?php

namespace Kiboko\Magento\V2_1\Model;

class CompanyDataCompanyCustomerInterface
{
    /**
     * Company ID.
     *
     * @var int|null
     */
    protected $companyId;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyCustomerInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Get job title.
     *
     * @var string|null
     */
    protected $jobTitle;
    /**
     * Customer status.
     *
     * @var int|null
     */
    protected $status;
    /**
     * Get telephone.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * Company ID.
     *
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Company ID.
     *
     * @param int|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyCustomerInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyCustomerInterface
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
     * Get job title.
     *
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }
    /**
     * Get job title.
     *
     * @param string|null $jobTitle
     *
     * @return self
     */
    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * Customer status.
     *
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Customer status.
     *
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get telephone.
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Get telephone.
     *
     * @param string|null $telephone
     *
     * @return self
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }
}
