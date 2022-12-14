<?php

namespace Kiboko\Magento\V2_2\Model;

class QuoteDataAddressInterface
{
    /**
     * City name
     *
     * @var string|null
     */
    protected $city;
    /**
     * Company
     *
     * @var string|null
     */
    protected $company;
    /**
     * Country id
     *
     * @var string|null
     */
    protected $countryId;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Customer address id
     *
     * @var int|null
     */
    protected $customerAddressId;
    /**
     * Customer id
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * Billing/shipping email
     *
     * @var string|null
     */
    protected $email;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @var QuoteDataAddressExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Fax number
     *
     * @var string|null
     */
    protected $fax;
    /**
     * First name
     *
     * @var string|null
     */
    protected $firstname;
    /**
     * Id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Last name
     *
     * @var string|null
     */
    protected $lastname;
    /**
     * Middle name
     *
     * @var string|null
     */
    protected $middlename;
    /**
     * Postcode
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Prefix
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * Region name
     *
     * @var string|null
     */
    protected $region;
    /**
     * Region code
     *
     * @var string|null
     */
    protected $regionCode;
    /**
     * Region id
     *
     * @var int|null
     */
    protected $regionId;
    /**
     * Same as billing flag
     *
     * @var int|null
     */
    protected $sameAsBilling;
    /**
     * Save in address book flag
     *
     * @var int|null
     */
    protected $saveInAddressBook;
    /**
     * Street
     *
     * @var string[]|null
     */
    protected $street;
    /**
     * Suffix
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * Telephone number
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * Vat id
     *
     * @var string|null
     */
    protected $vatId;
    /**
     * City name
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * City name
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
     * Company
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Company
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
     * Country id
     *
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Country id
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
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[]|null $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(?array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
    /**
     * Customer address id
     *
     * @return int|null
     */
    public function getCustomerAddressId(): ?int
    {
        return $this->customerAddressId;
    }
    /**
     * Customer address id
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
     * Customer id
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer id
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
     * Billing/shipping email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Billing/shipping email
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
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @return QuoteDataAddressExtensionInterface|null
     */
    public function getExtensionAttributes(): ?QuoteDataAddressExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @param QuoteDataAddressExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?QuoteDataAddressExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Fax number
     *
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Fax number
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
     * First name
     *
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    /**
     * First name
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
     * Id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Last name
     *
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    /**
     * Last name
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
     * Middle name
     *
     * @return string|null
     */
    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }
    /**
     * Middle name
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
     * Postcode
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Postcode
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
     * Prefix
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * Prefix
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
     * Region name
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     * Region name
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
     * Region code
     *
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }
    /**
     * Region code
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
     * Region id
     *
     * @return int|null
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }
    /**
     * Region id
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
     * Same as billing flag
     *
     * @return int|null
     */
    public function getSameAsBilling(): ?int
    {
        return $this->sameAsBilling;
    }
    /**
     * Same as billing flag
     *
     * @param int|null $sameAsBilling
     *
     * @return self
     */
    public function setSameAsBilling(?int $sameAsBilling): self
    {
        $this->sameAsBilling = $sameAsBilling;
        return $this;
    }
    /**
     * Save in address book flag
     *
     * @return int|null
     */
    public function getSaveInAddressBook(): ?int
    {
        return $this->saveInAddressBook;
    }
    /**
     * Save in address book flag
     *
     * @param int|null $saveInAddressBook
     *
     * @return self
     */
    public function setSaveInAddressBook(?int $saveInAddressBook): self
    {
        $this->saveInAddressBook = $saveInAddressBook;
        return $this;
    }
    /**
     * Street
     *
     * @return string[]|null
     */
    public function getStreet(): ?array
    {
        return $this->street;
    }
    /**
     * Street
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
     * Suffix
     *
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }
    /**
     * Suffix
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
     * Telephone number
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Telephone number
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
     * Vat id
     *
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Vat id
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
}
