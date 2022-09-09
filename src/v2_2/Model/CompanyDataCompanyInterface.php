<?php

namespace Kiboko\Magento\V2_2\Model;

class CompanyDataCompanyInterface
{
    /**
     * City.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Company email.
     *
     * @var string|null
     */
    protected $companyEmail;
    /**
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * Country.
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * Customer Group Id.
     *
     * @var int|null
     */
    protected $customerGroupId;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @var CompanyDataCompanyExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Id.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Legal name.
     *
     * @var string|null
     */
    protected $legalName;
    /**
     * Postcode.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Region.
     *
     * @var string|null
     */
    protected $region;
    /**
     * Region Id.
     *
     * @var string|null
     */
    protected $regionId;
    /**
     * Reject Reason.
     *
     * @var string|null
     */
    protected $rejectReason;
    /**
     * Rejected at time.
     *
     * @var string|null
     */
    protected $rejectedAt;
    /**
     * Reseller Id.
     *
     * @var string|null
     */
    protected $resellerId;
    /**
     * Sales Representative Id.
     *
     * @var int|null
     */
    protected $salesRepresentativeId;
    /**
     * Status.
     *
     * @var int|null
     */
    protected $status;
    /**
     * Street.
     *
     * @var string[]|null
     */
    protected $street;
    /**
     * Company admin customer id.
     *
     * @var int|null
     */
    protected $superUserId;
    /**
     * Telephone.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * Vat tax id.
     *
     * @var string|null
     */
    protected $vatTaxId;
    /**
     * City.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * City.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Comment.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Company email.
     *
     * @return string|null
     */
    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }
    /**
     * Company email.
     *
     * @param string|null $companyEmail
     *
     * @return self
     */
    public function setCompanyEmail(?string $companyEmail): self
    {
        $this->companyEmail = $companyEmail;
        return $this;
    }
    /**
     * Company name.
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Company name.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Country.
     *
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Country.
     *
     * @param string|null $countryId
     *
     * @return self
     */
    public function setCountryId(?string $countryId): self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * Customer Group Id.
     *
     * @return int|null
     */
    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }
    /**
     * Customer Group Id.
     *
     * @param int|null $customerGroupId
     *
     * @return self
     */
    public function setCustomerGroupId(?int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @return CompanyDataCompanyExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CompanyDataCompanyExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyInterface
     *
     * @param CompanyDataCompanyExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CompanyDataCompanyExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Id.
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Legal name.
     *
     * @return string|null
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }
    /**
     * Legal name.
     *
     * @param string|null $legalName
     *
     * @return self
     */
    public function setLegalName(?string $legalName): self
    {
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Postcode.
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Postcode.
     *
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Region.
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     * Region.
     *
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region Id.
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->regionId;
    }
    /**
     * Region Id.
     *
     * @param string|null $regionId
     *
     * @return self
     */
    public function setRegionId(?string $regionId): self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Reject Reason.
     *
     * @return string|null
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }
    /**
     * Reject Reason.
     *
     * @param string|null $rejectReason
     *
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }
    /**
     * Rejected at time.
     *
     * @return string|null
     */
    public function getRejectedAt(): ?string
    {
        return $this->rejectedAt;
    }
    /**
     * Rejected at time.
     *
     * @param string|null $rejectedAt
     *
     * @return self
     */
    public function setRejectedAt(?string $rejectedAt): self
    {
        $this->rejectedAt = $rejectedAt;
        return $this;
    }
    /**
     * Reseller Id.
     *
     * @return string|null
     */
    public function getResellerId(): ?string
    {
        return $this->resellerId;
    }
    /**
     * Reseller Id.
     *
     * @param string|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?string $resellerId): self
    {
        $this->resellerId = $resellerId;
        return $this;
    }
    /**
     * Sales Representative Id.
     *
     * @return int|null
     */
    public function getSalesRepresentativeId(): ?int
    {
        return $this->salesRepresentativeId;
    }
    /**
     * Sales Representative Id.
     *
     * @param int|null $salesRepresentativeId
     *
     * @return self
     */
    public function setSalesRepresentativeId(?int $salesRepresentativeId): self
    {
        $this->salesRepresentativeId = $salesRepresentativeId;
        return $this;
    }
    /**
     * Status.
     *
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Status.
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
     * Street.
     *
     * @return string[]|null
     */
    public function getStreet(): ?array
    {
        return $this->street;
    }
    /**
     * Street.
     *
     * @param string[]|null $street
     *
     * @return self
     */
    public function setStreet(?array $street): self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * Company admin customer id.
     *
     * @return int|null
     */
    public function getSuperUserId(): ?int
    {
        return $this->superUserId;
    }
    /**
     * Company admin customer id.
     *
     * @param int|null $superUserId
     *
     * @return self
     */
    public function setSuperUserId(?int $superUserId): self
    {
        $this->superUserId = $superUserId;
        return $this;
    }
    /**
     * Telephone.
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Telephone.
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
    /**
     * Vat tax id.
     *
     * @return string|null
     */
    public function getVatTaxId(): ?string
    {
        return $this->vatTaxId;
    }
    /**
     * Vat tax id.
     *
     * @param string|null $vatTaxId
     *
     * @return self
     */
    public function setVatTaxId(?string $vatTaxId): self
    {
        $this->vatTaxId = $vatTaxId;
        return $this;
    }
}
