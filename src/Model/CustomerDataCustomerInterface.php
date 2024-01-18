<?php

namespace Kiboko\Magento\Model;

class CustomerDataCustomerInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Customer id
     *
     * @var int|null
     */
    protected $id;
    /**
     * Group id
     *
     * @var int|null
     */
    protected $groupId;
    /**
     * Default billing address id
     *
     * @var string|null
     */
    protected $defaultBilling;
    /**
     * Default shipping address id
     *
     * @var string|null
     */
    protected $defaultShipping;
    /**
     * Confirmation
     *
     * @var string|null
     */
    protected $confirmation;
    /**
     * Created at time
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Updated at time
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Created in area
     *
     * @var string|null
     */
    protected $createdIn;
    /**
     * Date of birth
     *
     * @var string|null
     */
    protected $dob;
    /**
     * Email address
     *
     * @var string|null
     */
    protected $email;
    /**
     * First name
     *
     * @var string|null
     */
    protected $firstname;
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
     * Prefix
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * Suffix
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * Gender
     *
     * @var int|null
     */
    protected $gender;
    /**
     * Store id
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Tax Vat
     *
     * @var string|null
     */
    protected $taxvat;
    /**
     * Website id
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * Customer addresses.
     *
     * @var CustomerDataAddressInterface[]|null
     */
    protected $addresses;
    /**
     * Disable auto group change flag.
     *
     * @var int|null
     */
    protected $disableAutoGroupChange;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @var CustomerDataCustomerExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Customer id
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Customer id
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Group id
     *
     * @return int|null
     */
    public function getGroupId() : ?int
    {
        return $this->groupId;
    }
    /**
     * Group id
     *
     * @param int|null $groupId
     *
     * @return self
     */
    public function setGroupId(?int $groupId) : self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Default billing address id
     *
     * @return string|null
     */
    public function getDefaultBilling() : ?string
    {
        return $this->defaultBilling;
    }
    /**
     * Default billing address id
     *
     * @param string|null $defaultBilling
     *
     * @return self
     */
    public function setDefaultBilling(?string $defaultBilling) : self
    {
        $this->initialized['defaultBilling'] = true;
        $this->defaultBilling = $defaultBilling;
        return $this;
    }
    /**
     * Default shipping address id
     *
     * @return string|null
     */
    public function getDefaultShipping() : ?string
    {
        return $this->defaultShipping;
    }
    /**
     * Default shipping address id
     *
     * @param string|null $defaultShipping
     *
     * @return self
     */
    public function setDefaultShipping(?string $defaultShipping) : self
    {
        $this->initialized['defaultShipping'] = true;
        $this->defaultShipping = $defaultShipping;
        return $this;
    }
    /**
     * Confirmation
     *
     * @return string|null
     */
    public function getConfirmation() : ?string
    {
        return $this->confirmation;
    }
    /**
     * Confirmation
     *
     * @param string|null $confirmation
     *
     * @return self
     */
    public function setConfirmation(?string $confirmation) : self
    {
        $this->initialized['confirmation'] = true;
        $this->confirmation = $confirmation;
        return $this;
    }
    /**
     * Created at time
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * Created at time
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Updated at time
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * Updated at time
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Created in area
     *
     * @return string|null
     */
    public function getCreatedIn() : ?string
    {
        return $this->createdIn;
    }
    /**
     * Created in area
     *
     * @param string|null $createdIn
     *
     * @return self
     */
    public function setCreatedIn(?string $createdIn) : self
    {
        $this->initialized['createdIn'] = true;
        $this->createdIn = $createdIn;
        return $this;
    }
    /**
     * Date of birth
     *
     * @return string|null
     */
    public function getDob() : ?string
    {
        return $this->dob;
    }
    /**
     * Date of birth
     *
     * @param string|null $dob
     *
     * @return self
     */
    public function setDob(?string $dob) : self
    {
        $this->initialized['dob'] = true;
        $this->dob = $dob;
        return $this;
    }
    /**
     * Email address
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email address
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * First name
     *
     * @return string|null
     */
    public function getFirstname() : ?string
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
    public function setFirstname(?string $firstname) : self
    {
        $this->initialized['firstname'] = true;
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Last name
     *
     * @return string|null
     */
    public function getLastname() : ?string
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
    public function setLastname(?string $lastname) : self
    {
        $this->initialized['lastname'] = true;
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * Middle name
     *
     * @return string|null
     */
    public function getMiddlename() : ?string
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
    public function setMiddlename(?string $middlename) : self
    {
        $this->initialized['middlename'] = true;
        $this->middlename = $middlename;
        return $this;
    }
    /**
     * Prefix
     *
     * @return string|null
     */
    public function getPrefix() : ?string
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
    public function setPrefix(?string $prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * Suffix
     *
     * @return string|null
     */
    public function getSuffix() : ?string
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
    public function setSuffix(?string $suffix) : self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * Gender
     *
     * @return int|null
     */
    public function getGender() : ?int
    {
        return $this->gender;
    }
    /**
     * Gender
     *
     * @param int|null $gender
     *
     * @return self
     */
    public function setGender(?int $gender) : self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;
        return $this;
    }
    /**
     * Store id
     *
     * @return int|null
     */
    public function getStoreId() : ?int
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param int|null $storeId
     *
     * @return self
     */
    public function setStoreId(?int $storeId) : self
    {
        $this->initialized['storeId'] = true;
        $this->storeId = $storeId;
        return $this;
    }
    /**
     * Tax Vat
     *
     * @return string|null
     */
    public function getTaxvat() : ?string
    {
        return $this->taxvat;
    }
    /**
     * Tax Vat
     *
     * @param string|null $taxvat
     *
     * @return self
     */
    public function setTaxvat(?string $taxvat) : self
    {
        $this->initialized['taxvat'] = true;
        $this->taxvat = $taxvat;
        return $this;
    }
    /**
     * Website id
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
    {
        return $this->websiteId;
    }
    /**
     * Website id
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
    /**
     * Customer addresses.
     *
     * @return CustomerDataAddressInterface[]|null
     */
    public function getAddresses() : ?array
    {
        return $this->addresses;
    }
    /**
     * Customer addresses.
     *
     * @param CustomerDataAddressInterface[]|null $addresses
     *
     * @return self
     */
    public function setAddresses(?array $addresses) : self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Disable auto group change flag.
     *
     * @return int|null
     */
    public function getDisableAutoGroupChange() : ?int
    {
        return $this->disableAutoGroupChange;
    }
    /**
     * Disable auto group change flag.
     *
     * @param int|null $disableAutoGroupChange
     *
     * @return self
     */
    public function setDisableAutoGroupChange(?int $disableAutoGroupChange) : self
    {
        $this->initialized['disableAutoGroupChange'] = true;
        $this->disableAutoGroupChange = $disableAutoGroupChange;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @return CustomerDataCustomerExtensionInterface|null
     */
    public function getExtensionAttributes() : ?CustomerDataCustomerExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @param CustomerDataCustomerExtensionInterface|null $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(?CustomerDataCustomerExtensionInterface $extensionAttributes) : self
    {
        $this->initialized['extensionAttributes'] = true;
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Custom attributes values.
     *
     * @return FrameworkAttributeInterface[]|null
     */
    public function getCustomAttributes() : ?array
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
    public function setCustomAttributes(?array $customAttributes) : self
    {
        $this->initialized['customAttributes'] = true;
        $this->customAttributes = $customAttributes;
        return $this;
    }
}