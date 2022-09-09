<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductAttributeInterface
{
    /**
     * Apply to value for the element
     *
     * @var string[]|null
     */
    protected $applyTo;
    /**
     * Code of the attribute.
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * Id of the attribute.
     *
     * @var int|null
     */
    protected $attributeId;
    /**
     * Backend model
     *
     * @var string|null
     */
    protected $backendModel;
    /**
     * Backend type.
     *
     * @var string|null
     */
    protected $backendType;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]|null
     */
    protected $customAttributes;
    /**
     * Frontend label for default store
     *
     * @var string|null
     */
    protected $defaultFrontendLabel;
    /**
     * Default value for the element.
     *
     * @var string|null
     */
    protected $defaultValue;
    /**
     * Entity type id
     *
     * @var string|null
     */
    protected $entityTypeId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\EavAttributeInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Frontend class of attribute
     *
     * @var string|null
     */
    protected $frontendClass;
    /**
     * HTML for input element.
     *
     * @var string|null
     */
    protected $frontendInput;
    /**
     * Frontend label for each store
     *
     * @var EavDataAttributeFrontendLabelInterface[]|null
     */
    protected $frontendLabels;
    /**
     * The attribute can be compared on the frontend
     *
     * @var string|null
     */
    protected $isComparable;
    /**
     * It used in layered navigation
     *
     * @var bool|null
     */
    protected $isFilterable;
    /**
     * It is filterable in catalog product grid
     *
     * @var bool|null
     */
    protected $isFilterableInGrid;
    /**
     * It is used in search results layered navigation
     *
     * @var bool|null
     */
    protected $isFilterableInSearch;
    /**
     * The HTML tags are allowed on the frontend
     *
     * @var bool|null
     */
    protected $isHtmlAllowedOnFront;
    /**
     * Attribute is required.
     *
     * @var bool|null
     */
    protected $isRequired;
    /**
     * The attribute can be used in Quick Search
     *
     * @var string|null
     */
    protected $isSearchable;
    /**
     * This is a unique attribute
     *
     * @var string|null
     */
    protected $isUnique;
    /**
     * The attribute can be used for promo rules
     *
     * @var string|null
     */
    protected $isUsedForPromoRules;
    /**
     * It is used in catalog product grid
     *
     * @var bool|null
     */
    protected $isUsedInGrid;
    /**
     * Current attribute has been defined by a user.
     *
     * @var bool|null
     */
    protected $isUserDefined;
    /**
     * Attribute is visible on frontend.
     *
     * @var bool|null
     */
    protected $isVisible;
    /**
     * The attribute can be used in Advanced Search
     *
     * @var string|null
     */
    protected $isVisibleInAdvancedSearch;
    /**
     * It is visible in catalog product grid
     *
     * @var bool|null
     */
    protected $isVisibleInGrid;
    /**
     * The attribute is visible on the frontend
     *
     * @var string|null
     */
    protected $isVisibleOnFront;
    /**
     * WYSIWYG flag
     *
     * @var bool|null
     */
    protected $isWysiwygEnabled;
    /**
     * The note attribute for the element.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @var EavDataAttributeOptionInterface[]|null
     */
    protected $options;
    /**
     * Position
     *
     * @var int|null
     */
    protected $position;
    /**
     * Attribute scope
     *
     * @var string|null
     */
    protected $scope;
    /**
     * Source model
     *
     * @var string|null
     */
    protected $sourceModel;
    /**
     * It is used for sorting in product listing
     *
     * @var bool|null
     */
    protected $usedForSortBy;
    /**
     * The attribute can be used in product listing
     *
     * @var string|null
     */
    protected $usedInProductListing;
    /**
     * Validation rules.
     *
     * @var EavDataAttributeValidationRuleInterface[]|null
     */
    protected $validationRules;
    /**
     * Apply to value for the element
     *
     * @return string[]|null
     */
    public function getApplyTo(): ?array
    {
        return $this->applyTo;
    }
    /**
     * Apply to value for the element
     *
     * @param string[]|null $applyTo
     *
     * @return self
     */
    public function setApplyTo(?array $applyTo): self
    {
        $this->applyTo = $applyTo;
        return $this;
    }
    /**
     * Code of the attribute.
     *
     * @return string|null
     */
    public function getAttributeCode(): ?string
    {
        return $this->attributeCode;
    }
    /**
     * Code of the attribute.
     *
     * @param string|null $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(?string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * Id of the attribute.
     *
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Id of the attribute.
     *
     * @param int|null $attributeId
     *
     * @return self
     */
    public function setAttributeId(?int $attributeId): self
    {
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * Backend model
     *
     * @return string|null
     */
    public function getBackendModel(): ?string
    {
        return $this->backendModel;
    }
    /**
     * Backend model
     *
     * @param string|null $backendModel
     *
     * @return self
     */
    public function setBackendModel(?string $backendModel): self
    {
        $this->backendModel = $backendModel;
        return $this;
    }
    /**
     * Backend type.
     *
     * @return string|null
     */
    public function getBackendType(): ?string
    {
        return $this->backendType;
    }
    /**
     * Backend type.
     *
     * @param string|null $backendType
     *
     * @return self
     */
    public function setBackendType(?string $backendType): self
    {
        $this->backendType = $backendType;
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
     * Frontend label for default store
     *
     * @return string|null
     */
    public function getDefaultFrontendLabel(): ?string
    {
        return $this->defaultFrontendLabel;
    }
    /**
     * Frontend label for default store
     *
     * @param string|null $defaultFrontendLabel
     *
     * @return self
     */
    public function setDefaultFrontendLabel(?string $defaultFrontendLabel): self
    {
        $this->defaultFrontendLabel = $defaultFrontendLabel;
        return $this;
    }
    /**
     * Default value for the element.
     *
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Default value for the element.
     *
     * @param string|null $defaultValue
     *
     * @return self
     */
    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Entity type id
     *
     * @return string|null
     */
    public function getEntityTypeId(): ?string
    {
        return $this->entityTypeId;
    }
    /**
     * Entity type id
     *
     * @param string|null $entityTypeId
     *
     * @return self
     */
    public function setEntityTypeId(?string $entityTypeId): self
    {
        $this->entityTypeId = $entityTypeId;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\EavAttributeInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\EavAttributeInterface
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
     * Frontend class of attribute
     *
     * @return string|null
     */
    public function getFrontendClass(): ?string
    {
        return $this->frontendClass;
    }
    /**
     * Frontend class of attribute
     *
     * @param string|null $frontendClass
     *
     * @return self
     */
    public function setFrontendClass(?string $frontendClass): self
    {
        $this->frontendClass = $frontendClass;
        return $this;
    }
    /**
     * HTML for input element.
     *
     * @return string|null
     */
    public function getFrontendInput(): ?string
    {
        return $this->frontendInput;
    }
    /**
     * HTML for input element.
     *
     * @param string|null $frontendInput
     *
     * @return self
     */
    public function setFrontendInput(?string $frontendInput): self
    {
        $this->frontendInput = $frontendInput;
        return $this;
    }
    /**
     * Frontend label for each store
     *
     * @return EavDataAttributeFrontendLabelInterface[]|null
     */
    public function getFrontendLabels(): ?array
    {
        return $this->frontendLabels;
    }
    /**
     * Frontend label for each store
     *
     * @param EavDataAttributeFrontendLabelInterface[]|null $frontendLabels
     *
     * @return self
     */
    public function setFrontendLabels(?array $frontendLabels): self
    {
        $this->frontendLabels = $frontendLabels;
        return $this;
    }
    /**
     * The attribute can be compared on the frontend
     *
     * @return string|null
     */
    public function getIsComparable(): ?string
    {
        return $this->isComparable;
    }
    /**
     * The attribute can be compared on the frontend
     *
     * @param string|null $isComparable
     *
     * @return self
     */
    public function setIsComparable(?string $isComparable): self
    {
        $this->isComparable = $isComparable;
        return $this;
    }
    /**
     * It used in layered navigation
     *
     * @return bool|null
     */
    public function getIsFilterable(): ?bool
    {
        return $this->isFilterable;
    }
    /**
     * It used in layered navigation
     *
     * @param bool|null $isFilterable
     *
     * @return self
     */
    public function setIsFilterable(?bool $isFilterable): self
    {
        $this->isFilterable = $isFilterable;
        return $this;
    }
    /**
     * It is filterable in catalog product grid
     *
     * @return bool|null
     */
    public function getIsFilterableInGrid(): ?bool
    {
        return $this->isFilterableInGrid;
    }
    /**
     * It is filterable in catalog product grid
     *
     * @param bool|null $isFilterableInGrid
     *
     * @return self
     */
    public function setIsFilterableInGrid(?bool $isFilterableInGrid): self
    {
        $this->isFilterableInGrid = $isFilterableInGrid;
        return $this;
    }
    /**
     * It is used in search results layered navigation
     *
     * @return bool|null
     */
    public function getIsFilterableInSearch(): ?bool
    {
        return $this->isFilterableInSearch;
    }
    /**
     * It is used in search results layered navigation
     *
     * @param bool|null $isFilterableInSearch
     *
     * @return self
     */
    public function setIsFilterableInSearch(?bool $isFilterableInSearch): self
    {
        $this->isFilterableInSearch = $isFilterableInSearch;
        return $this;
    }
    /**
     * The HTML tags are allowed on the frontend
     *
     * @return bool|null
     */
    public function getIsHtmlAllowedOnFront(): ?bool
    {
        return $this->isHtmlAllowedOnFront;
    }
    /**
     * The HTML tags are allowed on the frontend
     *
     * @param bool|null $isHtmlAllowedOnFront
     *
     * @return self
     */
    public function setIsHtmlAllowedOnFront(?bool $isHtmlAllowedOnFront): self
    {
        $this->isHtmlAllowedOnFront = $isHtmlAllowedOnFront;
        return $this;
    }
    /**
     * Attribute is required.
     *
     * @return bool|null
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }
    /**
     * Attribute is required.
     *
     * @param bool|null $isRequired
     *
     * @return self
     */
    public function setIsRequired(?bool $isRequired): self
    {
        $this->isRequired = $isRequired;
        return $this;
    }
    /**
     * The attribute can be used in Quick Search
     *
     * @return string|null
     */
    public function getIsSearchable(): ?string
    {
        return $this->isSearchable;
    }
    /**
     * The attribute can be used in Quick Search
     *
     * @param string|null $isSearchable
     *
     * @return self
     */
    public function setIsSearchable(?string $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }
    /**
     * This is a unique attribute
     *
     * @return string|null
     */
    public function getIsUnique(): ?string
    {
        return $this->isUnique;
    }
    /**
     * This is a unique attribute
     *
     * @param string|null $isUnique
     *
     * @return self
     */
    public function setIsUnique(?string $isUnique): self
    {
        $this->isUnique = $isUnique;
        return $this;
    }
    /**
     * The attribute can be used for promo rules
     *
     * @return string|null
     */
    public function getIsUsedForPromoRules(): ?string
    {
        return $this->isUsedForPromoRules;
    }
    /**
     * The attribute can be used for promo rules
     *
     * @param string|null $isUsedForPromoRules
     *
     * @return self
     */
    public function setIsUsedForPromoRules(?string $isUsedForPromoRules): self
    {
        $this->isUsedForPromoRules = $isUsedForPromoRules;
        return $this;
    }
    /**
     * It is used in catalog product grid
     *
     * @return bool|null
     */
    public function getIsUsedInGrid(): ?bool
    {
        return $this->isUsedInGrid;
    }
    /**
     * It is used in catalog product grid
     *
     * @param bool|null $isUsedInGrid
     *
     * @return self
     */
    public function setIsUsedInGrid(?bool $isUsedInGrid): self
    {
        $this->isUsedInGrid = $isUsedInGrid;
        return $this;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @return bool|null
     */
    public function getIsUserDefined(): ?bool
    {
        return $this->isUserDefined;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @param bool|null $isUserDefined
     *
     * @return self
     */
    public function setIsUserDefined(?bool $isUserDefined): self
    {
        $this->isUserDefined = $isUserDefined;
        return $this;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @param bool|null $isVisible
     *
     * @return self
     */
    public function setIsVisible(?bool $isVisible): self
    {
        $this->isVisible = $isVisible;
        return $this;
    }
    /**
     * The attribute can be used in Advanced Search
     *
     * @return string|null
     */
    public function getIsVisibleInAdvancedSearch(): ?string
    {
        return $this->isVisibleInAdvancedSearch;
    }
    /**
     * The attribute can be used in Advanced Search
     *
     * @param string|null $isVisibleInAdvancedSearch
     *
     * @return self
     */
    public function setIsVisibleInAdvancedSearch(?string $isVisibleInAdvancedSearch): self
    {
        $this->isVisibleInAdvancedSearch = $isVisibleInAdvancedSearch;
        return $this;
    }
    /**
     * It is visible in catalog product grid
     *
     * @return bool|null
     */
    public function getIsVisibleInGrid(): ?bool
    {
        return $this->isVisibleInGrid;
    }
    /**
     * It is visible in catalog product grid
     *
     * @param bool|null $isVisibleInGrid
     *
     * @return self
     */
    public function setIsVisibleInGrid(?bool $isVisibleInGrid): self
    {
        $this->isVisibleInGrid = $isVisibleInGrid;
        return $this;
    }
    /**
     * The attribute is visible on the frontend
     *
     * @return string|null
     */
    public function getIsVisibleOnFront(): ?string
    {
        return $this->isVisibleOnFront;
    }
    /**
     * The attribute is visible on the frontend
     *
     * @param string|null $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(?string $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
    /**
     * WYSIWYG flag
     *
     * @return bool|null
     */
    public function getIsWysiwygEnabled(): ?bool
    {
        return $this->isWysiwygEnabled;
    }
    /**
     * WYSIWYG flag
     *
     * @param bool|null $isWysiwygEnabled
     *
     * @return self
     */
    public function setIsWysiwygEnabled(?bool $isWysiwygEnabled): self
    {
        $this->isWysiwygEnabled = $isWysiwygEnabled;
        return $this;
    }
    /**
     * The note attribute for the element.
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
    /**
     * The note attribute for the element.
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @return EavDataAttributeOptionInterface[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @param EavDataAttributeOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Position
     *
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Attribute scope
     *
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }
    /**
     * Attribute scope
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * Source model
     *
     * @return string|null
     */
    public function getSourceModel(): ?string
    {
        return $this->sourceModel;
    }
    /**
     * Source model
     *
     * @param string|null $sourceModel
     *
     * @return self
     */
    public function setSourceModel(?string $sourceModel): self
    {
        $this->sourceModel = $sourceModel;
        return $this;
    }
    /**
     * It is used for sorting in product listing
     *
     * @return bool|null
     */
    public function getUsedForSortBy(): ?bool
    {
        return $this->usedForSortBy;
    }
    /**
     * It is used for sorting in product listing
     *
     * @param bool|null $usedForSortBy
     *
     * @return self
     */
    public function setUsedForSortBy(?bool $usedForSortBy): self
    {
        $this->usedForSortBy = $usedForSortBy;
        return $this;
    }
    /**
     * The attribute can be used in product listing
     *
     * @return string|null
     */
    public function getUsedInProductListing(): ?string
    {
        return $this->usedInProductListing;
    }
    /**
     * The attribute can be used in product listing
     *
     * @param string|null $usedInProductListing
     *
     * @return self
     */
    public function setUsedInProductListing(?string $usedInProductListing): self
    {
        $this->usedInProductListing = $usedInProductListing;
        return $this;
    }
    /**
     * Validation rules.
     *
     * @return EavDataAttributeValidationRuleInterface[]|null
     */
    public function getValidationRules(): ?array
    {
        return $this->validationRules;
    }
    /**
     * Validation rules.
     *
     * @param EavDataAttributeValidationRuleInterface[]|null $validationRules
     *
     * @return self
     */
    public function setValidationRules(?array $validationRules): self
    {
        $this->validationRules = $validationRules;
        return $this;
    }
}
