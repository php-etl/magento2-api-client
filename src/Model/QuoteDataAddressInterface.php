<?php

namespace Kiboko\Magento\V2\Model;

class QuoteDataAddressInterface
{
    /**
     * Id
     *
     * @var int
     */
    protected $id;
    /**
     * Region name
     *
     * @var string
     */
    protected $region;
    /**
     * Region id
     *
     * @var int
     */
    protected $regionId;
    /**
     * Region code
     *
     * @var string
     */
    protected $regionCode;
    /**
     * Country id
     *
     * @var string
     */
    protected $countryId;
    /**
     * Street
     *
     * @var string[]
     */
    protected $street;
    /**
     * Company
     *
     * @var string
     */
    protected $company;
    /**
     * Telephone number
     *
     * @var string
     */
    protected $telephone;
    /**
     * Fax number
     *
     * @var string
     */
    protected $fax;
    /**
     * Postcode
     *
     * @var string
     */
    protected $postcode;
    /**
     * City name
     *
     * @var string
     */
    protected $city;
    /**
     * First name
     *
     * @var string
     */
    protected $firstname;
    /**
     * Last name
     *
     * @var string
     */
    protected $lastname;
    /**
     * Middle name
     *
     * @var string
     */
    protected $middlename;
    /**
     * Prefix
     *
     * @var string
     */
    protected $prefix;
    /**
     * Suffix
     *
     * @var string
     */
    protected $suffix;
    /**
     * Vat id
     *
     * @var string
     */
    protected $vatId;
    /**
     * Customer id
     *
     * @var int
     */
    protected $customerId;
    /**
     * Billing/shipping email
     *
     * @var string
     */
    protected $email;
    /**
     * Same as billing flag
     *
     * @var int
     */
    protected $sameAsBilling;
    /**
     * Customer address id
     *
     * @var int
     */
    protected $customerAddressId;
    /**
     * Save in address book flag
     *
     * @var int
     */
    protected $saveInAddressBook;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @var QuoteDataAddressExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Id
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
     * Region name
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * Region name
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
     * Region id
     *
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->regionId;
    }
    /**
     * Region id
     *
     * @param int $regionId
     *
     * @return self
     */
    public function setRegionId(int $regionId): self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Region code
     *
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }
    /**
     * Region code
     *
     * @param string $regionCode
     *
     * @return self
     */
    public function setRegionCode(string $regionCode): self
    {
        $this->regionCode = $regionCode;
        return $this;
    }
    /**
     * Country id
     *
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }
    /**
     * Country id
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
     * Street
     *
     * @return string[]
     */
    public function getStreet(): array
    {
        return $this->street;
    }
    /**
     * Street
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
     * Company
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }
    /**
     * Company
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Telephone number
     *
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    /**
     * Telephone number
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
     * Fax number
     *
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }
    /**
     * Fax number
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * Postcode
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Postcode
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
     * City name
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City name
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
     * First name
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * First name
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Last name
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * Last name
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Middle name
     *
     * @return string
     */
    public function getMiddlename(): string
    {
        return $this->middlename;
    }
    /**
     * Middle name
     *
     * @param string $middlename
     *
     * @return self
     */
    public function setMiddlename(string $middlename): self
    {
        $this->middlename = $middlename;
        return $this;
    }
    /**
     * Prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * Prefix
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Suffix
     *
     * @return string
     */
    public function getSuffix(): string
    {
        return $this->suffix;
    }
    /**
     * Suffix
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix(string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * Vat id
     *
     * @return string
     */
    public function getVatId(): string
    {
        return $this->vatId;
    }
    /**
     * Vat id
     *
     * @param string $vatId
     *
     * @return self
     */
    public function setVatId(string $vatId): self
    {
        $this->vatId = $vatId;
        return $this;
    }
    /**
     * Customer id
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer id
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
     * Billing/shipping email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Billing/shipping email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Same as billing flag
     *
     * @return int
     */
    public function getSameAsBilling(): int
    {
        return $this->sameAsBilling;
    }
    /**
     * Same as billing flag
     *
     * @param int $sameAsBilling
     *
     * @return self
     */
    public function setSameAsBilling(int $sameAsBilling): self
    {
        $this->sameAsBilling = $sameAsBilling;
        return $this;
    }
    /**
     * Customer address id
     *
     * @return int
     */
    public function getCustomerAddressId(): int
    {
        return $this->customerAddressId;
    }
    /**
     * Customer address id
     *
     * @param int $customerAddressId
     *
     * @return self
     */
    public function setCustomerAddressId(int $customerAddressId): self
    {
        $this->customerAddressId = $customerAddressId;
        return $this;
    }
    /**
     * Save in address book flag
     *
     * @return int
     */
    public function getSaveInAddressBook(): int
    {
        return $this->saveInAddressBook;
    }
    /**
     * Save in address book flag
     *
     * @param int $saveInAddressBook
     *
     * @return self
     */
    public function setSaveInAddressBook(int $saveInAddressBook): self
    {
        $this->saveInAddressBook = $saveInAddressBook;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @return QuoteDataAddressExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataAddressExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
     *
     * @param QuoteDataAddressExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataAddressExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]
     */
    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }
    /**
     * Custom attributes values.
     *
     * @param FrameworkAttributeInterface[] $customAttributes
     *
     * @return self
     */
    public function setCustomAttributes(array $customAttributes): self
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
