<?php

namespace Kiboko\Magento\v2_2\Model;

class CustomerDataAddressInterface
{
    /**
     * ID
     *
     * @var int
     */
    protected $id;
    /**
     * Customer ID
     *
     * @var int
     */
    protected $customerId;
    /**
     * Customer address region interface.
     *
     * @var CustomerDataRegionInterface
     */
    protected $region;
    /**
     * Region ID
     *
     * @var int
     */
    protected $regionId;
    /**
     * Country code in ISO_3166-2 format
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
     * If this address is default shipping address.
     *
     * @var bool
     */
    protected $defaultShipping;
    /**
     * If this address is default billing address
     *
     * @var bool
     */
    protected $defaultBilling;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID
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
     * Customer ID
     *
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }
    /**
     * Customer ID
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
     * Customer address region interface.
     *
     * @return CustomerDataRegionInterface
     */
    public function getRegion(): CustomerDataRegionInterface
    {
        return $this->region;
    }
    /**
     * Customer address region interface.
     *
     * @param CustomerDataRegionInterface $region
     *
     * @return self
     */
    public function setRegion(CustomerDataRegionInterface $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region ID
     *
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->regionId;
    }
    /**
     * Region ID
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
     * Country code in ISO_3166-2 format
     *
     * @return string
     */
    public function getCountryId(): string
    {
        return $this->countryId;
    }
    /**
     * Country code in ISO_3166-2 format
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
     * If this address is default shipping address.
     *
     * @return bool
     */
    public function getDefaultShipping(): bool
    {
        return $this->defaultShipping;
    }
    /**
     * If this address is default shipping address.
     *
     * @param bool $defaultShipping
     *
     * @return self
     */
    public function setDefaultShipping(bool $defaultShipping): self
    {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }
    /**
     * If this address is default billing address
     *
     * @return bool
     */
    public function getDefaultBilling(): bool
    {
        return $this->defaultBilling;
    }
    /**
     * If this address is default billing address
     *
     * @param bool $defaultBilling
     *
     * @return self
     */
    public function setDefaultBilling(bool $defaultBilling): self
    {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
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
