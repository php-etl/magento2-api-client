<?php

namespace Kiboko\Magento\v2_4\Model;

class CompanyDataCompanyCustomerInterface
{
    /**
     * Customer ID.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Company ID.
     *
     * @var int
     */
    protected $companyId;
    /**
     * Get job title.
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * Customer status.
     *
     * @var int
     */
    protected $status;
    /**
     * Get telephone.
     *
     * @var string
     */
    protected $telephone;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyCustomerInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Customer ID.
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer ID.
     *
     * @param int $customerId
     *
     * @return self
     */
    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Company ID.
     *
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }
    /**
     * Company ID.
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Get job title.
     *
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }
    /**
     * Get job title.
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * Customer status.
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Customer status.
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    /**
     * Get telephone.
     *
     * @param string $telephone
     *
     * @return self
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
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
}
