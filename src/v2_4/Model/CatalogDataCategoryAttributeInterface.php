<?php

namespace Kiboko\Magento\V2_4\Model;

class CatalogDataCategoryAttributeInterface
{
    /**
     * Apply to value for the element
     *
     * @var string[]
     */
    protected $applyTo;
    /**
     * Code of the attribute.
     *
     * @var string
     */
    protected $attributeCode;
    /**
     * Id of the attribute.
     *
     * @var int
     */
    protected $attributeId;
    /**
     * Backend model
     *
     * @var string
     */
    protected $backendModel;
    /**
     * Backend type.
     *
     * @var string
     */
    protected $backendType;
    /**
     * Custom attributes values.
     *
     * @var FrameworkAttributeInterface[]
     */
    protected $customAttributes;
    /**
     * Frontend label for default store
     *
     * @var string
     */
    protected $defaultFrontendLabel;
    /**
     * Default value for the element.
     *
     * @var string
     */
    protected $defaultValue;
    /**
     * Entity type id
     *
     * @var string
     */
    protected $entityTypeId;
    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\EavAttributeInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Frontend class of attribute
     *
     * @var string
     */
    protected $frontendClass;
    /**
     * HTML for input element.
     *
     * @var string
     */
    protected $frontendInput;
    /**
     * Frontend label for each store
     *
     * @var EavDataAttributeFrontendLabelInterface[]
     */
    protected $frontendLabels;
    /**
     * The attribute can be compared on the frontend
     *
     * @var string
     */
    protected $isComparable;
    /**
     * It used in layered navigation
     *
     * @var bool
     */
    protected $isFilterable;
    /**
     * It is filterable in catalog product grid
     *
     * @var bool
     */
    protected $isFilterableInGrid;
    /**
     * It is used in search results layered navigation
     *
     * @var bool
     */
    protected $isFilterableInSearch;
    /**
     * The HTML tags are allowed on the frontend
     *
     * @var bool
     */
    protected $isHtmlAllowedOnFront;
    /**
     * Attribute is required.
     *
     * @var bool
     */
    protected $isRequired;
    /**
     * The attribute can be used in Quick Search
     *
     * @var string
     */
    protected $isSearchable;
    /**
     * This is a unique attribute
     *
     * @var string
     */
    protected $isUnique;
    /**
     * The attribute can be used for promo rules
     *
     * @var string
     */
    protected $isUsedForPromoRules;
    /**
     * It is used in catalog product grid
     *
     * @var bool
     */
    protected $isUsedInGrid;
    /**
     * Current attribute has been defined by a user.
     *
     * @var bool
     */
    protected $isUserDefined;
    /**
     * Attribute is visible on frontend.
     *
     * @var bool
     */
    protected $isVisible;
    /**
     * The attribute can be used in Advanced Search
     *
     * @var string
     */
    protected $isVisibleInAdvancedSearch;
    /**
     * It is visible in catalog product grid
     *
     * @var bool
     */
    protected $isVisibleInGrid;
    /**
     * The attribute is visible on the frontend
     *
     * @var string
     */
    protected $isVisibleOnFront;
    /**
     * WYSIWYG flag
     *
     * @var bool
     */
    protected $isWysiwygEnabled;
    /**
     * The note attribute for the element.
     *
     * @var string
     */
    protected $note;
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @var EavDataAttributeOptionInterface[]
     */
    protected $options;
    /**
     * Position
     *
     * @var int
     */
    protected $position;
    /**
     * Attribute scope
     *
     * @var string
     */
    protected $scope;
    /**
     * Source model
     *
     * @var string
     */
    protected $sourceModel;
    /**
     * It is used for sorting in product listing
     *
     * @var bool
     */
    protected $usedForSortBy;
    /**
     * The attribute can be used in product listing
     *
     * @var string
     */
    protected $usedInProductListing;
    /**
     * Validation rules.
     *
     * @var EavDataAttributeValidationRuleInterface[]
     */
    protected $validationRules;
    /**
     * Apply to value for the element
     *
     * @return string[]
     */
    public function getApplyTo(): array
    {
        return $this->applyTo;
    }
    /**
     * Apply to value for the element
     *
     * @param string[] $applyTo
     *
     * @return self
     */
    public function setApplyTo(array $applyTo): self
    {
        $this->applyTo = $applyTo;
        return $this;
    }
    /**
     * Code of the attribute.
     *
     * @return string
     */
    public function getAttributeCode(): string
    {
        return $this->attributeCode;
    }
    /**
     * Code of the attribute.
     *
     * @param string $attributeCode
     *
     * @return self
     */
    public function setAttributeCode(string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
    /**
     * Id of the attribute.
     *
     * @return int
     */
    public function getAttributeId(): int
    {
        return $this->attributeId;
    }
    /**
     * Id of the attribute.
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(int $attributeId): self
    {
        $this->attributeId = $attributeId;
        return $this;
    }
    /**
     * Backend model
     *
     * @return string
     */
    public function getBackendModel(): string
    {
        return $this->backendModel;
    }
    /**
     * Backend model
     *
     * @param string $backendModel
     *
     * @return self
     */
    public function setBackendModel(string $backendModel): self
    {
        $this->backendModel = $backendModel;
        return $this;
    }
    /**
     * Backend type.
     *
     * @return string
     */
    public function getBackendType(): string
    {
        return $this->backendType;
    }
    /**
     * Backend type.
     *
     * @param string $backendType
     *
     * @return self
     */
    public function setBackendType(string $backendType): self
    {
        $this->backendType = $backendType;
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
     * Frontend label for default store
     *
     * @return string
     */
    public function getDefaultFrontendLabel(): string
    {
        return $this->defaultFrontendLabel;
    }
    /**
     * Frontend label for default store
     *
     * @param string $defaultFrontendLabel
     *
     * @return self
     */
    public function setDefaultFrontendLabel(string $defaultFrontendLabel): self
    {
        $this->defaultFrontendLabel = $defaultFrontendLabel;
        return $this;
    }
    /**
     * Default value for the element.
     *
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }
    /**
     * Default value for the element.
     *
     * @param string $defaultValue
     *
     * @return self
     */
    public function setDefaultValue(string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Entity type id
     *
     * @return string
     */
    public function getEntityTypeId(): string
    {
        return $this->entityTypeId;
    }
    /**
     * Entity type id
     *
     * @param string $entityTypeId
     *
     * @return self
     */
    public function setEntityTypeId(string $entityTypeId): self
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
     * @return string
     */
    public function getFrontendClass(): string
    {
        return $this->frontendClass;
    }
    /**
     * Frontend class of attribute
     *
     * @param string $frontendClass
     *
     * @return self
     */
    public function setFrontendClass(string $frontendClass): self
    {
        $this->frontendClass = $frontendClass;
        return $this;
    }
    /**
     * HTML for input element.
     *
     * @return string
     */
    public function getFrontendInput(): string
    {
        return $this->frontendInput;
    }
    /**
     * HTML for input element.
     *
     * @param string $frontendInput
     *
     * @return self
     */
    public function setFrontendInput(string $frontendInput): self
    {
        $this->frontendInput = $frontendInput;
        return $this;
    }
    /**
     * Frontend label for each store
     *
     * @return EavDataAttributeFrontendLabelInterface[]
     */
    public function getFrontendLabels(): array
    {
        return $this->frontendLabels;
    }
    /**
     * Frontend label for each store
     *
     * @param EavDataAttributeFrontendLabelInterface[] $frontendLabels
     *
     * @return self
     */
    public function setFrontendLabels(array $frontendLabels): self
    {
        $this->frontendLabels = $frontendLabels;
        return $this;
    }
    /**
     * The attribute can be compared on the frontend
     *
     * @return string
     */
    public function getIsComparable(): string
    {
        return $this->isComparable;
    }
    /**
     * The attribute can be compared on the frontend
     *
     * @param string $isComparable
     *
     * @return self
     */
    public function setIsComparable(string $isComparable): self
    {
        $this->isComparable = $isComparable;
        return $this;
    }
    /**
     * It used in layered navigation
     *
     * @return bool
     */
    public function getIsFilterable(): bool
    {
        return $this->isFilterable;
    }
    /**
     * It used in layered navigation
     *
     * @param bool $isFilterable
     *
     * @return self
     */
    public function setIsFilterable(bool $isFilterable): self
    {
        $this->isFilterable = $isFilterable;
        return $this;
    }
    /**
     * It is filterable in catalog product grid
     *
     * @return bool
     */
    public function getIsFilterableInGrid(): bool
    {
        return $this->isFilterableInGrid;
    }
    /**
     * It is filterable in catalog product grid
     *
     * @param bool $isFilterableInGrid
     *
     * @return self
     */
    public function setIsFilterableInGrid(bool $isFilterableInGrid): self
    {
        $this->isFilterableInGrid = $isFilterableInGrid;
        return $this;
    }
    /**
     * It is used in search results layered navigation
     *
     * @return bool
     */
    public function getIsFilterableInSearch(): bool
    {
        return $this->isFilterableInSearch;
    }
    /**
     * It is used in search results layered navigation
     *
     * @param bool $isFilterableInSearch
     *
     * @return self
     */
    public function setIsFilterableInSearch(bool $isFilterableInSearch): self
    {
        $this->isFilterableInSearch = $isFilterableInSearch;
        return $this;
    }
    /**
     * The HTML tags are allowed on the frontend
     *
     * @return bool
     */
    public function getIsHtmlAllowedOnFront(): bool
    {
        return $this->isHtmlAllowedOnFront;
    }
    /**
     * The HTML tags are allowed on the frontend
     *
     * @param bool $isHtmlAllowedOnFront
     *
     * @return self
     */
    public function setIsHtmlAllowedOnFront(bool $isHtmlAllowedOnFront): self
    {
        $this->isHtmlAllowedOnFront = $isHtmlAllowedOnFront;
        return $this;
    }
    /**
     * Attribute is required.
     *
     * @return bool
     */
    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }
    /**
     * Attribute is required.
     *
     * @param bool $isRequired
     *
     * @return self
     */
    public function setIsRequired(bool $isRequired): self
    {
        $this->isRequired = $isRequired;
        return $this;
    }
    /**
     * The attribute can be used in Quick Search
     *
     * @return string
     */
    public function getIsSearchable(): string
    {
        return $this->isSearchable;
    }
    /**
     * The attribute can be used in Quick Search
     *
     * @param string $isSearchable
     *
     * @return self
     */
    public function setIsSearchable(string $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }
    /**
     * This is a unique attribute
     *
     * @return string
     */
    public function getIsUnique(): string
    {
        return $this->isUnique;
    }
    /**
     * This is a unique attribute
     *
     * @param string $isUnique
     *
     * @return self
     */
    public function setIsUnique(string $isUnique): self
    {
        $this->isUnique = $isUnique;
        return $this;
    }
    /**
     * The attribute can be used for promo rules
     *
     * @return string
     */
    public function getIsUsedForPromoRules(): string
    {
        return $this->isUsedForPromoRules;
    }
    /**
     * The attribute can be used for promo rules
     *
     * @param string $isUsedForPromoRules
     *
     * @return self
     */
    public function setIsUsedForPromoRules(string $isUsedForPromoRules): self
    {
        $this->isUsedForPromoRules = $isUsedForPromoRules;
        return $this;
    }
    /**
     * It is used in catalog product grid
     *
     * @return bool
     */
    public function getIsUsedInGrid(): bool
    {
        return $this->isUsedInGrid;
    }
    /**
     * It is used in catalog product grid
     *
     * @param bool $isUsedInGrid
     *
     * @return self
     */
    public function setIsUsedInGrid(bool $isUsedInGrid): self
    {
        $this->isUsedInGrid = $isUsedInGrid;
        return $this;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @return bool
     */
    public function getIsUserDefined(): bool
    {
        return $this->isUserDefined;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @param bool $isUserDefined
     *
     * @return self
     */
    public function setIsUserDefined(bool $isUserDefined): self
    {
        $this->isUserDefined = $isUserDefined;
        return $this;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @return bool
     */
    public function getIsVisible(): bool
    {
        return $this->isVisible;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @param bool $isVisible
     *
     * @return self
     */
    public function setIsVisible(bool $isVisible): self
    {
        $this->isVisible = $isVisible;
        return $this;
    }
    /**
     * The attribute can be used in Advanced Search
     *
     * @return string
     */
    public function getIsVisibleInAdvancedSearch(): string
    {
        return $this->isVisibleInAdvancedSearch;
    }
    /**
     * The attribute can be used in Advanced Search
     *
     * @param string $isVisibleInAdvancedSearch
     *
     * @return self
     */
    public function setIsVisibleInAdvancedSearch(string $isVisibleInAdvancedSearch): self
    {
        $this->isVisibleInAdvancedSearch = $isVisibleInAdvancedSearch;
        return $this;
    }
    /**
     * It is visible in catalog product grid
     *
     * @return bool
     */
    public function getIsVisibleInGrid(): bool
    {
        return $this->isVisibleInGrid;
    }
    /**
     * It is visible in catalog product grid
     *
     * @param bool $isVisibleInGrid
     *
     * @return self
     */
    public function setIsVisibleInGrid(bool $isVisibleInGrid): self
    {
        $this->isVisibleInGrid = $isVisibleInGrid;
        return $this;
    }
    /**
     * The attribute is visible on the frontend
     *
     * @return string
     */
    public function getIsVisibleOnFront(): string
    {
        return $this->isVisibleOnFront;
    }
    /**
     * The attribute is visible on the frontend
     *
     * @param string $isVisibleOnFront
     *
     * @return self
     */
    public function setIsVisibleOnFront(string $isVisibleOnFront): self
    {
        $this->isVisibleOnFront = $isVisibleOnFront;
        return $this;
    }
    /**
     * WYSIWYG flag
     *
     * @return bool
     */
    public function getIsWysiwygEnabled(): bool
    {
        return $this->isWysiwygEnabled;
    }
    /**
     * WYSIWYG flag
     *
     * @param bool $isWysiwygEnabled
     *
     * @return self
     */
    public function setIsWysiwygEnabled(bool $isWysiwygEnabled): self
    {
        $this->isWysiwygEnabled = $isWysiwygEnabled;
        return $this;
    }
    /**
     * The note attribute for the element.
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }
    /**
     * The note attribute for the element.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note): self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @return EavDataAttributeOptionInterface[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @param EavDataAttributeOptionInterface[] $options
     *
     * @return self
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Position
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Attribute scope
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }
    /**
     * Attribute scope
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * Source model
     *
     * @return string
     */
    public function getSourceModel(): string
    {
        return $this->sourceModel;
    }
    /**
     * Source model
     *
     * @param string $sourceModel
     *
     * @return self
     */
    public function setSourceModel(string $sourceModel): self
    {
        $this->sourceModel = $sourceModel;
        return $this;
    }
    /**
     * It is used for sorting in product listing
     *
     * @return bool
     */
    public function getUsedForSortBy(): bool
    {
        return $this->usedForSortBy;
    }
    /**
     * It is used for sorting in product listing
     *
     * @param bool $usedForSortBy
     *
     * @return self
     */
    public function setUsedForSortBy(bool $usedForSortBy): self
    {
        $this->usedForSortBy = $usedForSortBy;
        return $this;
    }
    /**
     * The attribute can be used in product listing
     *
     * @return string
     */
    public function getUsedInProductListing(): string
    {
        return $this->usedInProductListing;
    }
    /**
     * The attribute can be used in product listing
     *
     * @param string $usedInProductListing
     *
     * @return self
     */
    public function setUsedInProductListing(string $usedInProductListing): self
    {
        $this->usedInProductListing = $usedInProductListing;
        return $this;
    }
    /**
     * Validation rules.
     *
     * @return EavDataAttributeValidationRuleInterface[]
     */
    public function getValidationRules(): array
    {
        return $this->validationRules;
    }
    /**
     * Validation rules.
     *
     * @param EavDataAttributeValidationRuleInterface[] $validationRules
     *
     * @return self
     */
    public function setValidationRules(array $validationRules): self
    {
        $this->validationRules = $validationRules;
        return $this;
    }
}
