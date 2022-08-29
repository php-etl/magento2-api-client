<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesDataOrderAddressInterface
{
    /**
     * Address type.
     *
     * @var string
     */
    protected $addressType;
    /**
     * City.
     *
     * @var string
     */
    protected $city;
    /**
     * Company.
     *
     * @var string
     */
    protected $company;
    /**
     * Country ID.
     *
     * @var string
     */
    protected $countryId;
    /**
     * Country address ID.
     *
     * @var int
     */
    protected $customerAddressId;
    /**
     * Customer ID.
     *
     * @var int
     */
    protected $customerId;
    /**
     * Email address.
     *
     * @var string
     */
    protected $email;
    /**
     * Order address ID.
     *
     * @var int
     */
    protected $entityId;
    /**
     * Fax number.
     *
     * @var string
     */
    protected $fax;
    /**
     * First name.
     *
     * @var string
     */
    protected $firstname;
    /**
     * Last name.
     *
     * @var string
     */
    protected $lastname;
    /**
     * Middle name.
     *
     * @var string
     */
    protected $middlename;
    /**
     * Parent ID.
     *
     * @var int
     */
    protected $parentId;
    /**
     * Postal code.
     *
     * @var string
     */
    protected $postcode;
    /**
     * Prefix.
     *
     * @var string
     */
    protected $prefix;
    /**
     * Region.
     *
     * @var string
     */
    protected $region;
    /**
     * Region code.
     *
     * @var string
     */
    protected $regionCode;
    /**
     * Region ID.
     *
     * @var int
     */
    protected $regionId;
    /**
     * Array of any street values. Otherwise, null.
     *
     * @var string[]
     */
    protected $street;
    /**
     * Suffix.
     *
     * @var string
     */
    protected $suffix;
    /**
     * Telephone number.
     *
     * @var string
     */
    protected $telephone;
    /**
     * VAT ID.
     *
     * @var string
     */
    protected $vatId;
    /**
     * VAT-is-valid flag value.
     *
     * @var int
     */
    protected $vatIsValid;
    /**
     * VAT request date.
     *
     * @var string
     */
    protected $vatRequestDate;
    /**
     * VAT request ID.
     *
     * @var string
     */
    protected $vatRequestId;
    /**
     * VAT-request-success flag value.
     *
     * @var int
     */
    protected $vatRequestSuccess;
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Address type.
     *
     * @return string
     */
    public function getAddressType() : string
    {
        return $this->addressType;
    }
    /**
     * Address type.
     *
     * @param string $addressType
     *
     * @return self
     */
    public function setAddressType(string $addressType) : self
    {
        $this->addressType = $addressType;
        return $this;
    }
    /**
     * City.
     *
     * @return string
     */
    public function getCity() : string
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
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Company.
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * Company.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * Country ID.
     *
     * @return string
     */
    public function getCountryId() : string
    {
        return $this->countryId;
    }
    /**
     * Country ID.
     *
     * @param string $countryId
     *
     * @return self
     */
    public function setCountryId(string $countryId) : self
    {
        $this->countryId = $countryId;
        return $this;
    }
    /**
     * Country address ID.
     *
     * @return int
     */
    public function getCustomerAddressId() : int
    {
        return $this->customerAddressId;
    }
    /**
     * Country address ID.
     *
     * @param int $customerAddressId
     *
     * @return self
     */
    public function setCustomerAddressId(int $customerAddressId) : self
    {
        $this->customerAddressId = $customerAddressId;
        return $this;
    }
    /**
     * Customer ID.
     *
     * @return int
     */
    public function getCustomerId() : int
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
    public function setCustomerId(int $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Email address.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * Email address.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Order address ID.
     *
     * @return int
     */
    public function getEntityId() : int
    {
        return $this->entityId;
    }
    /**
     * Order address ID.
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Fax number.
     *
     * @return string
     */
    public function getFax() : string
    {
        return $this->fax;
    }
    /**
     * Fax number.
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * First name.
     *
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }
    /**
     * First name.
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname) : self
    {
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Last name.
     *
     * @return string
     */
    public function getLastname() : string
    {
        return $this->lastname;
    }
    /**
     * Last name.
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname) : self
    {
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Middle name.
     *
     * @return string
     */
    public function getMiddlename() : string
    {
        return $this->middlename;
    }
    /**
     * Middle name.
     *
     * @param string $middlename
     *
     * @return self
     */
    public function setMiddlename(string $middlename) : self
    {
        $this->middlename = $middlename;
        return $this;
    }
    /**
     * Parent ID.
     *
     * @return int
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }
    /**
     * Parent ID.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Postal code.
     *
     * @return string
     */
    public function getPostcode() : string
    {
        return $this->postcode;
    }
    /**
     * Postal code.
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode) : self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Prefix.
     *
     * @return string
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }
    /**
     * Prefix.
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix) : self
    {
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Region.
     *
     * @return string
     */
    public function getRegion() : string
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
    public function setRegion(string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Region code.
     *
     * @return string
     */
    public function getRegionCode() : string
    {
        return $this->regionCode;
    }
    /**
     * Region code.
     *
     * @param string $regionCode
     *
     * @return self
     */
    public function setRegionCode(string $regionCode) : self
    {
        $this->regionCode = $regionCode;
        return $this;
    }
    /**
     * Region ID.
     *
     * @return int
     */
    public function getRegionId() : int
    {
        return $this->regionId;
    }
    /**
     * Region ID.
     *
     * @param int $regionId
     *
     * @return self
     */
    public function setRegionId(int $regionId) : self
    {
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * Array of any street values. Otherwise, null.
     *
     * @return string[]
     */
    public function getStreet() : array
    {
        return $this->street;
    }
    /**
     * Array of any street values. Otherwise, null.
     *
     * @param string[] $street
     *
     * @return self
     */
    public function setStreet(array $street) : self
    {
        $this->street = $street;
        return $this;
    }
    /**
     * Suffix.
     *
     * @return string
     */
    public function getSuffix() : string
    {
        return $this->suffix;
    }
    /**
     * Suffix.
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix(string $suffix) : self
    {
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * Telephone number.
     *
     * @return string
     */
    public function getTelephone() : string
    {
        return $this->telephone;
    }
    /**
     * Telephone number.
     *
     * @param string $telephone
     *
     * @return self
     */
    public function setTelephone(string $telephone) : self
    {
        $this->telephone = $telephone;
        return $this;
    }
    /**
     * VAT ID.
     *
     * @return string
     */
    public function getVatId() : string
    {
        return $this->vatId;
    }
    /**
     * VAT ID.
     *
     * @param string $vatId
     *
     * @return self
     */
    public function setVatId(string $vatId) : self
    {
        $this->vatId = $vatId;
        return $this;
    }
    /**
     * VAT-is-valid flag value.
     *
     * @return int
     */
    public function getVatIsValid() : int
    {
        return $this->vatIsValid;
    }
    /**
     * VAT-is-valid flag value.
     *
     * @param int $vatIsValid
     *
     * @return self
     */
    public function setVatIsValid(int $vatIsValid) : self
    {
        $this->vatIsValid = $vatIsValid;
        return $this;
    }
    /**
     * VAT request date.
     *
     * @return string
     */
    public function getVatRequestDate() : string
    {
        return $this->vatRequestDate;
    }
    /**
     * VAT request date.
     *
     * @param string $vatRequestDate
     *
     * @return self
     */
    public function setVatRequestDate(string $vatRequestDate) : self
    {
        $this->vatRequestDate = $vatRequestDate;
        return $this;
    }
    /**
     * VAT request ID.
     *
     * @return string
     */
    public function getVatRequestId() : string
    {
        return $this->vatRequestId;
    }
    /**
     * VAT request ID.
     *
     * @param string $vatRequestId
     *
     * @return self
     */
    public function setVatRequestId(string $vatRequestId) : self
    {
        $this->vatRequestId = $vatRequestId;
        return $this;
    }
    /**
     * VAT-request-success flag value.
     *
     * @return int
     */
    public function getVatRequestSuccess() : int
    {
        return $this->vatRequestSuccess;
    }
    /**
     * VAT-request-success flag value.
     *
     * @param int $vatRequestSuccess
     *
     * @return self
     */
    public function setVatRequestSuccess(int $vatRequestSuccess) : self
    {
        $this->vatRequestSuccess = $vatRequestSuccess;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderAddressInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes) : self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}