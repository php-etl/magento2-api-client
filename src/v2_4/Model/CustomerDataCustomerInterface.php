<?php

namespace Kiboko\Magento\V2_4\Model;

class CustomerDataCustomerInterface
{
    /**
     * Customer addresses.
     *
     * @var CustomerDataAddressInterface[]
     */
    protected $addresses;
    /**
     * Confirmation
     *
     * @var string
     */
    protected $confirmation;
    /**
     * Created at time
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Created in area
     *
     * @var string
     */
    protected $createdIn;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Default billing address id
     *
     * @var string
     */
    protected $defaultBilling;
    /**
     * Default shipping address id
     *
     * @var string
     */
    protected $defaultShipping;
    /**
     * Disable auto group change flag.
     *
     * @var int
     */
    protected $disableAutoGroupChange;
    /**
     * Date of birth
     *
     * @var string
     */
    protected $dob;
    /**
     * Email address
     *
     * @var string
     */
    protected $email;
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @var CustomerDataCustomerExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * First name
     *
     * @var string
     */
    protected $firstname;
    /**
     * Gender
     *
     * @var int
     */
    protected $gender;
    /**
     * Group id
     *
     * @var int
     */
    protected $groupId;
    /**
     * Customer id
     *
     * @var int
     */
    protected $id;
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
     * Store id
     *
     * @var int
     */
    protected $storeId;
    /**
     * Suffix
     *
     * @var string
     */
    protected $suffix;
    /**
     * Tax Vat
     *
     * @var string
     */
    protected $taxvat;
    /**
     * Updated at time
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * Website id
     *
     * @var int
     */
    protected $websiteId;
    /**
     * Customer addresses.
     *
     * @return CustomerDataAddressInterface[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * Customer addresses.
     *
     * @param CustomerDataAddressInterface[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Confirmation
     *
     * @return string
     */
    public function getConfirmation(): string
    {
        return $this->confirmation;
    }
    /**
     * Confirmation
     *
     * @param string $confirmation
     *
     * @return self
     */
    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;
        return $this;
    }
    /**
     * Created at time
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * Created at time
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Created in area
     *
     * @return string
     */
    public function getCreatedIn(): string
    {
        return $this->createdIn;
    }
    /**
     * Created in area
     *
     * @param string $createdIn
     *
     * @return self
     */
    public function setCreatedIn(string $createdIn): self
    {
        $this->createdIn = $createdIn;
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
    /**
     * Default billing address id
     *
     * @return string
     */
    public function getDefaultBilling(): string
    {
        return $this->defaultBilling;
    }
    /**
     * Default billing address id
     *
     * @param string $defaultBilling
     *
     * @return self
     */
    public function setDefaultBilling(string $defaultBilling): self
    {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }
    /**
     * Default shipping address id
     *
     * @return string
     */
    public function getDefaultShipping(): string
    {
        return $this->defaultShipping;
    }
    /**
     * Default shipping address id
     *
     * @param string $defaultShipping
     *
     * @return self
     */
    public function setDefaultShipping(string $defaultShipping): self
    {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }
    /**
     * Disable auto group change flag.
     *
     * @return int
     */
    public function getDisableAutoGroupChange(): int
    {
        return $this->disableAutoGroupChange;
    }
    /**
     * Disable auto group change flag.
     *
     * @param int $disableAutoGroupChange
     *
     * @return self
     */
    public function setDisableAutoGroupChange(int $disableAutoGroupChange): self
    {
        $this->disableAutoGroupChange = $disableAutoGroupChange;
        return $this;
    }
    /**
     * Date of birth
     *
     * @return string
     */
    public function getDob(): string
    {
        return $this->dob;
    }
    /**
     * Date of birth
     *
     * @param string $dob
     *
     * @return self
     */
    public function setDob(string $dob): self
    {
        $this->dob = $dob;
        return $this;
    }
    /**
     * Email address
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email address
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
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @return CustomerDataCustomerExtensionInterface
     */
    public function getExtensionAttributes(): CustomerDataCustomerExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @param CustomerDataCustomerExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(CustomerDataCustomerExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
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
     * Gender
     *
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }
    /**
     * Gender
     *
     * @param int $gender
     *
     * @return self
     */
    public function setGender(int $gender): self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * Group id
     *
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }
    /**
     * Group id
     *
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Customer id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Customer id
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
     * Store id
     *
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;
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
     * Tax Vat
     *
     * @return string
     */
    public function getTaxvat(): string
    {
        return $this->taxvat;
    }
    /**
     * Tax Vat
     *
     * @param string $taxvat
     *
     * @return self
     */
    public function setTaxvat(string $taxvat): self
    {
        $this->taxvat = $taxvat;
        return $this;
    }
    /**
     * Updated at time
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * Updated at time
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Website id
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     * Website id
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
