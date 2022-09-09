<?php

namespace Kiboko\Magento\V2_4\Model;

class CustomerDataCustomerInterface
{
    /**
     * Customer addresses.
     *
     * @var CustomerDataAddressInterface[]|null
     */
    protected $addresses;
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
     * Created in area
     *
     * @var string|null
     */
    protected $createdIn;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
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
     * Disable auto group change flag.
     *
     * @var int|null
     */
    protected $disableAutoGroupChange;
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
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @var CustomerDataCustomerExtensionInterface|null
     */
    protected $extensionAttributes;
    /**
     * First name
     *
     * @var string|null
     */
    protected $firstname;
    /**
     * Gender
     *
     * @var int|null
     */
    protected $gender;
    /**
     * Group id
     *
     * @var int|null
     */
    protected $groupId;
    /**
     * Customer id
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
     * Prefix
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * Store id
     *
     * @var int|null
     */
    protected $storeId;
    /**
     * Suffix
     *
     * @var string|null
     */
    protected $suffix;
    /**
     * Tax Vat
     *
     * @var string|null
     */
    protected $taxvat;
    /**
     * Updated at time
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Website id
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * Customer addresses.
     *
     * @return CustomerDataAddressInterface[]|null
     */
    public function getAddresses(): ?array
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
    public function setAddresses(?array $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * Confirmation
     *
     * @return string|null
     */
    public function getConfirmation(): ?string
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
    public function setConfirmation(?string $confirmation): self
    {
        $this->confirmation = $confirmation;
        return $this;
    }
    /**
     * Created at time
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
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
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Created in area
     *
     * @return string|null
     */
    public function getCreatedIn(): ?string
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
    public function setCreatedIn(?string $createdIn): self
    {
        $this->createdIn = $createdIn;
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
     * Default billing address id
     *
     * @return string|null
     */
    public function getDefaultBilling(): ?string
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
    public function setDefaultBilling(?string $defaultBilling): self
    {
        $this->defaultBilling = $defaultBilling;
        return $this;
    }
    /**
     * Default shipping address id
     *
     * @return string|null
     */
    public function getDefaultShipping(): ?string
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
    public function setDefaultShipping(?string $defaultShipping): self
    {
        $this->defaultShipping = $defaultShipping;
        return $this;
    }
    /**
     * Disable auto group change flag.
     *
     * @return int|null
     */
    public function getDisableAutoGroupChange(): ?int
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
    public function setDisableAutoGroupChange(?int $disableAutoGroupChange): self
    {
        $this->disableAutoGroupChange = $disableAutoGroupChange;
        return $this;
    }
    /**
     * Date of birth
     *
     * @return string|null
     */
    public function getDob(): ?string
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
    public function setDob(?string $dob): self
    {
        $this->dob = $dob;
        return $this;
    }
    /**
     * Email address
     *
     * @return string|null
     */
    public function getEmail(): ?string
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
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
     *
     * @return CustomerDataCustomerExtensionInterface|null
     */
    public function getExtensionAttributes(): ?CustomerDataCustomerExtensionInterface
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
    public function setExtensionAttributes(?CustomerDataCustomerExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
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
     * Gender
     *
     * @return int|null
     */
    public function getGender(): ?int
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
    public function setGender(?int $gender): self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * Group id
     *
     * @return int|null
     */
    public function getGroupId(): ?int
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
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Customer id
     *
     * @return int|null
     */
    public function getId(): ?int
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
     * Store id
     *
     * @return int|null
     */
    public function getStoreId(): ?int
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
    public function setStoreId(?int $storeId): self
    {
        $this->storeId = $storeId;
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
     * Tax Vat
     *
     * @return string|null
     */
    public function getTaxvat(): ?string
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
    public function setTaxvat(?string $taxvat): self
    {
        $this->taxvat = $taxvat;
        return $this;
    }
    /**
     * Updated at time
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
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
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Website id
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
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
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
