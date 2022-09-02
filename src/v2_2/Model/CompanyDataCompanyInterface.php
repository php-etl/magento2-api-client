<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyDataCompanyInterface
{
    /**
     * City.
     *
     * @var string
     */
    protected $city;
    /**
     * Comment.
     *
     * @var string
     */
    protected $comment;
    /**
     * Company email.
     *
     * @var string
     */
    protected $companyEmail;
    /**
     * Company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * Country.
     *
     * @var string
     */
    protected $countryId;
    /**
     * Customer Group Id.
     *
     * @var int
     */
    protected $customerGroupId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @var CompanyDataCompanyExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Legal name.
     *
     * @var string
     */
    protected $legalName;
    /**
     * Postcode.
     *
     * @var string
     */
    protected $postcode;
    /**
     * Region.
     *
     * @var string
     */
    protected $region;
    /**
     * Region Id.
     *
     * @var string
     */
    protected $regionId;
    /**
     * Reject Reason.
     *
     * @var string
     */
    protected $rejectReason;
    /**
     * Rejected at time.
     *
     * @var string
     */
    protected $rejectedAt;
    /**
     * Reseller Id.
     *
     * @var string
     */
    protected $resellerId;
    /**
     * Sales Representative Id.
     *
     * @var int
     */
    protected $salesRepresentativeId;
    /**
     * Status.
     *
     * @var int
     */
    protected $status;
    /**
     * Street.
     *
     * @var string[]
     */
    protected $street;
    /**
     * Company admin customer id.
     *
     * @var int
     */
    protected $superUserId;
    /**
     * Telephone.
     *
     * @var string
     */
    protected $telephone;
    /**
     * Vat tax id.
     *
     * @var string
     */
    protected $vatTaxId;
    /**
     * City.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Comment.
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Company email.
     *
     * @return string
     */
    public function getCompanyEmail(): string
    {
        return $this->companyEmail;
    }
    /**
     * Company email.
     *
     * @param string $companyEmail
     *
     * @return self
     */
    public function setCompanyEmail(string $companyEmail): self
    {
        $this->companyEmail = $companyEmail;
        return $this;
    }
    /**
     * Company name.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Company name.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Country.
     *
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }
    /**
     * Country.
     *
     * @param string $countryId
     *
     * @return self
     */
    public function setCountryId(string $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * Customer Group Id.
     *
     * @return int
     */
    public function getCustomerGroupId(): int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer Group Id.
     *
     * @param int $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @return CompanyDataCompanyExtensionInterface
     */
    public function getExtensionAttributes(): CompanyDataCompanyExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @param CompanyDataCompanyExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CompanyDataCompanyExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Legal name.
     *
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }
    /**
     * Legal name.
     *
     * @param string $legalName
     *
     * @return self
     */
    public function setLegalName(string $legalName): self
    {
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Postcode.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Postcode.
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Region.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region Id.
     *
     * @return string
     */
    public function getRegionId(): string
    {
        return $this->regionId;
    }
    /**
     * Region Id.
     *
     * @param string $regionId
     *
     * @return self
     */
    public function setRegionId(string $regionId): self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Reject Reason.
     *
     * @return string
     */
    public function getRejectReason(): string
    {
        return $this->rejectReason;
    }
    /**
     * Reject Reason.
     *
     * @param string $rejectReason
     *
     * @return self
     */
    public function setRejectReason(string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }
    /**
     * Rejected at time.
     *
     * @return string
     */
    public function getRejectedAt(): string
    {
        return $this->rejectedAt;
    }
    /**
     * Rejected at time.
     *
     * @param string $rejectedAt
     *
     * @return self
     */
    public function setRejectedAt(string $rejectedAt): self
    {
        $this->rejectedAt = $rejectedAt;
        return $this;
    }
    /**
     * Reseller Id.
     *
     * @return string
     */
    public function getResellerId(): string
    {
        return $this->resellerId;
    }
    /**
     * Reseller Id.
     *
     * @param string $resellerId
     *
     * @return self
     */
    public function setResellerId(string $resellerId): self
    {
        $this->resellerId = $resellerId;
        return $this;
    }
    /**
     * Sales Representative Id.
     *
     * @return int
     */
    public function getSalesRepresentativeId(): int
    {
        return $this->salesRepresentativeId;
    }
    /**
     * Sales Representative Id.
     *
     * @param int $salesRepresentativeId
     *
     * @return self
     */
    public function setSalesRepresentativeId(int $salesRepresentativeId): self
    {
        $this->salesRepresentativeId = $salesRepresentativeId;
        return $this;
    }
    /**
     * Status.
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * Status.
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
     * Street.
     *
     * @return string[]
     */
    public function getStreet(): array
    {
        return $this->street;
    }
    /**
     * Street.
     *
     * @param string[] $street
     *
     * @return self
     */
    public function setStreet(array $street): self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * Company admin customer id.
     *
     * @return int
     */
    public function getSuperUserId(): int
    {
        return $this->superUserId;
    }
    /**
     * Company admin customer id.
     *
     * @param int $superUserId
     *
     * @return self
     */
    public function setSuperUserId(int $superUserId): self
    {
        $this->superUserId = $superUserId;
        return $this;
    }
    /**
     * Telephone.
     *
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    /**
     * Telephone.
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
     * Vat tax id.
     *
     * @return string
     */
    public function getVatTaxId(): string
    {
        return $this->vatTaxId;
    }
    /**
     * Vat tax id.
     *
     * @param string $vatTaxId
     *
     * @return self
     */
    public function setVatTaxId(string $vatTaxId): self
    {
        $this->vatTaxId = $vatTaxId;
        return $this;
    }
}
