<?php

namespace Kiboko\Magento\V2_4\Model;

class SalesDataOrderAddressInterface
{
    /**
     * Address type.
     *
     * @var string|null
     */
    protected $addressType;
    /**
     * City.
     *
     * @var string|null
     */
    protected $city;
    /**
     * Company.
     *
     * @var string|null
     */
    protected $company;
    /**
     * Country ID.
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * Country address ID.
     *
     * @var int|null
     */
    protected $customerAddressId;
    /**
     * Customer ID.
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Email address.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Order address ID.
     *
     * @var int|null
     */
    protected $entityId;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @var SalesDataOrderAddressExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Fax number.
     *
     * @var string|null
     */
    protected $fax;
    /**
     * First name.
     *
     * @var string|null
     */
    protected $firstname;
    /**
     * Last name.
     *
     * @var string|null
     */
    protected $lastname;
    /**
     * Middle name.
     *
     * @var string|null
     */
    protected $middlename;
    /**
     * Parent ID.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Prefix.
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * Region.
     *
     * @var string|null
     */
    protected $region;
    /**
     * Region code.
     *
     * @var string|null
     */
    protected $regionCode;
    /**
     * Region ID.
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * Array of any street values. Otherwise, null.
     *
     * @var string[]|null
     */
    protected $street;
    /**
     * Suffix.
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * Telephone number.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * VAT ID.
     *
     * @var string|null
     */
    protected $vatId;
    /**
     * VAT-is-valid flag value.
     *
     * @var int|null
     */
    protected $vatIsValid;
    /**
     * VAT request date.
     *
     * @var string|null
     */
    protected $vatRequestDate;
    /**
     * VAT request ID.
     *
     * @var string|null
     */
    protected $vatRequestId;
    /**
     * VAT-request-success flag value.
     *
     * @var int|null
     */
    protected $vatRequestSuccess;
    /**
     * Address type.
     *
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }
    /**
     * Address type.
     *
     * @param string|null $addressType
     *
     * @return self
     */
    public function setAddressType(?string $addressType): self
    {
        $this->addressType = $addressType;
        return $this;
    }
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
     * Company.
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Company.
     *
     * @param string|null $company
     *
     * @return self
     */
    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Country ID.
     *
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Country ID.
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
     * Country address ID.
     *
     * @return int|null
     */
    public function getCustomerAddressId(): ?int
    {
        return $this->customerAddressId;
    }
    /**
     * Country address ID.
     *
     * @param int|null $customerAddressId
     *
     * @return self
     */
    public function setCustomerAddressId(?int $customerAddressId): self
    {
        $this->customerAddressId = $customerAddressId;
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
     * Email address.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Email address.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Order address ID.
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     * Order address ID.
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @return SalesDataOrderAddressExtensionInterface|null
     */
    public function getExtensionAttributes(): ?SalesDataOrderAddressExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @param SalesDataOrderAddressExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?SalesDataOrderAddressExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Fax number.
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Fax number.
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * First name.
     *
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    /**
     * First name.
     *
     * @param string|null $firstname
     *
     * @return self
     */
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Last name.
     *
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    /**
     * Last name.
     *
     * @param string|null $lastname
     *
     * @return self
     */
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Middle name.
     *
     * @return string|null
     */
    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }
    /**
     * Middle name.
     *
     * @param string|null $middlename
     *
     * @return self
     */
    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Postal code.
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Postal code.
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
     * Prefix.
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * Prefix.
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;
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
     * Region code.
     *
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }
    /**
     * Region code.
     *
     * @param string|null $regionCode
     *
     * @return self
     */
    public function setRegionCode(?string $regionCode): self
    {
        $this->regionCode = $regionCode;
        return $this;
    }
    /**
     * Region ID.
     *
     * @return int|null
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }
    /**
     * Region ID.
     *
     * @param int|null $regionId
     *
     * @return self
     */
    public function setRegionId(?int $regionId): self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Array of any street values. Otherwise, null.
     *
     * @return string[]|null
     */
    public function getStreet(): ?array
    {
        return $this->street;
    }
    /**
     * Array of any street values. Otherwise, null.
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
     * Suffix.
     *
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     * Suffix.
     *
     * @param string|null $suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * Telephone number.
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Telephone number.
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
     * VAT ID.
     *
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * VAT ID.
     *
     * @param string|null $vatId
     *
     * @return self
     */
    public function setVatId(?string $vatId): self
    {
        $this->vatId = $vatId;
        return $this;
    }
    /**
     * VAT-is-valid flag value.
     *
     * @return int|null
     */
    public function getVatIsValid(): ?int
    {
        return $this->vatIsValid;
    }
    /**
     * VAT-is-valid flag value.
     *
     * @param int|null $vatIsValid
     *
     * @return self
     */
    public function setVatIsValid(?int $vatIsValid): self
    {
        $this->vatIsValid = $vatIsValid;
        return $this;
    }
    /**
     * VAT request date.
     *
     * @return string|null
     */
    public function getVatRequestDate(): ?string
    {
        return $this->vatRequestDate;
    }
    /**
     * VAT request date.
     *
     * @param string|null $vatRequestDate
     *
     * @return self
     */
    public function setVatRequestDate(?string $vatRequestDate): self
    {
        $this->vatRequestDate = $vatRequestDate;
        return $this;
    }
    /**
     * VAT request ID.
     *
     * @return string|null
     */
    public function getVatRequestId(): ?string
    {
        return $this->vatRequestId;
    }
    /**
     * VAT request ID.
     *
     * @param string|null $vatRequestId
     *
     * @return self
     */
    public function setVatRequestId(?string $vatRequestId): self
    {
        $this->vatRequestId = $vatRequestId;
        return $this;
    }
    /**
     * VAT-request-success flag value.
     *
     * @return int|null
     */
    public function getVatRequestSuccess(): ?int
    {
        return $this->vatRequestSuccess;
    }
    /**
     * VAT-request-success flag value.
     *
     * @param int|null $vatRequestSuccess
     *
     * @return self
     */
    public function setVatRequestSuccess(?int $vatRequestSuccess): self
    {
        $this->vatRequestSuccess = $vatRequestSuccess;
        return $this;
    }
}
