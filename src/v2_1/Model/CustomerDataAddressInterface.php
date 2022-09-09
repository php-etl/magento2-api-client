<?php

namespace Kiboko\Magento\V2_1\Model;

class CustomerDataAddressInterface
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
     * Country code in ISO_3166-2 format
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
     * Customer ID
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * If this address is default billing address
     *
     * @var bool|null
     */
    protected $defaultBilling;
    /**
     * If this address is default shipping address.
     *
     * @var bool|null
     */
    protected $defaultShipping;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
     *
     * @var mixed|null
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
     * ID
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
     * Customer address region interface.
     *
     * @var CustomerDataRegionInterface|null
     */
    protected $region;
    /**
     * Region ID
     *
     * @var int|null
     */
    protected $regionId;
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
     * Country code in ISO_3166-2 format
     *
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Country code in ISO_3166-2 format
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
     * Customer ID
     *
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Customer ID
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
     * If this address is default billing address
     *
     * @return bool|null
     */
    public function getDefaultBilling(): ?bool
    {
        return $this->defaultBilling;
    }
    /**
     * If this address is default billing address
     *
     * @param bool|null $defaultBilling
     *
     * @return self
     */
    public function setDefaultBilling(?bool $defaultBilling): self
    {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }
    /**
     * If this address is default shipping address.
     *
     * @return bool|null
     */
    public function getDefaultShipping(): ?bool
    {
        return $this->defaultShipping;
    }
    /**
     * If this address is default shipping address.
     *
     * @param bool|null $defaultShipping
     *
     * @return self
     */
    public function setDefaultShipping(?bool $defaultShipping): self
    {
        $this->defaultShipping = $defaultShipping;
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
     * ID
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * ID
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
     * Customer address region interface.
     *
     * @return CustomerDataRegionInterface|null
     */
    public function getRegion(): ?CustomerDataRegionInterface
    {
        return $this->region;
    }
    /**
     * Customer address region interface.
     *
     * @param CustomerDataRegionInterface|null $region
     *
     * @return self
     */
    public function setRegion(?CustomerDataRegionInterface $region): self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region ID
     *
     * @return int|null
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }
    /**
     * Region ID
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
