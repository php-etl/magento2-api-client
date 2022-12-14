<?php

namespace Kiboko\Magento\V2_4\Model;

class CustomerDataAttributeMetadataInterface
{
    /**
     * Code of the attribute.
     *
     * @var string|null
     */
    protected $attributeCode;
    /**
     * Backend type.
     *
     * @var string|null
     */
    protected $backendType;
    /**
     * Data model for attribute.
     *
     * @var string|null
     */
    protected $dataModel;
    /**
     * Class which is used to display the attribute on frontend.
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
     * Label which supposed to be displayed on frontend.
     *
     * @var string|null
     */
    protected $frontendLabel;
    /**
     * Template used for input (e.g. "date")
     *
     * @var string|null
     */
    protected $inputFilter;
    /**
     * It is filterable in customer grid
     *
     * @var bool|null
     */
    protected $isFilterableInGrid;
    /**
     * It is searchable in customer grid
     *
     * @var bool|null
     */
    protected $isSearchableInGrid;
    /**
     * It is used in customer grid
     *
     * @var bool|null
     */
    protected $isUsedInGrid;
    /**
     * It is visible in customer grid
     *
     * @var bool|null
     */
    protected $isVisibleInGrid;
    /**
     * Of lines of the attribute value.
     *
     * @var int|null
     */
    protected $multilineCount;
    /**
     * The note attribute for the element.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @var CustomerDataOptionInterface[]|null
     */
    protected $options;
    /**
     * Attribute is required.
     *
     * @var bool|null
     */
    protected $required;
    /**
     * Attributes sort order.
     *
     * @var int|null
     */
    protected $sortOrder;
    /**
     * Label of the store.
     *
     * @var string|null
     */
    protected $storeLabel;
    /**
     * This is a system attribute.
     *
     * @var bool|null
     */
    protected $system;
    /**
     * Current attribute has been defined by a user.
     *
     * @var bool|null
     */
    protected $userDefined;
    /**
     * Validation rules.
     *
     * @var CustomerDataValidationRuleInterface[]|null
     */
    protected $validationRules;
    /**
     * Attribute is visible on frontend.
     *
     * @var bool|null
     */
    protected $visible;
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
     * Data model for attribute.
     *
     * @return string|null
     */
    public function getDataModel(): ?string
    {
        return $this->dataModel;
    }
    /**
     * Data model for attribute.
     *
     * @param string|null $dataModel
     *
     * @return self
     */
    public function setDataModel(?string $dataModel): self
    {
        $this->dataModel = $dataModel;
        return $this;
    }
    /**
     * Class which is used to display the attribute on frontend.
     *
     * @return string|null
     */
    public function getFrontendClass(): ?string
    {
        return $this->frontendClass;
    }
    /**
     * Class which is used to display the attribute on frontend.
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
     * Label which supposed to be displayed on frontend.
     *
     * @return string|null
     */
    public function getFrontendLabel(): ?string
    {
        return $this->frontendLabel;
    }
    /**
     * Label which supposed to be displayed on frontend.
     *
     * @param string|null $frontendLabel
     *
     * @return self
     */
    public function setFrontendLabel(?string $frontendLabel): self
    {
        $this->frontendLabel = $frontendLabel;
        return $this;
    }
    /**
     * Template used for input (e.g. "date")
     *
     * @return string|null
     */
    public function getInputFilter(): ?string
    {
        return $this->inputFilter;
    }
    /**
     * Template used for input (e.g. "date")
     *
     * @param string|null $inputFilter
     *
     * @return self
     */
    public function setInputFilter(?string $inputFilter): self
    {
        $this->inputFilter = $inputFilter;
        return $this;
    }
    /**
     * It is filterable in customer grid
     *
     * @return bool|null
     */
    public function getIsFilterableInGrid(): ?bool
    {
        return $this->isFilterableInGrid;
    }
    /**
     * It is filterable in customer grid
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
     * It is searchable in customer grid
     *
     * @return bool|null
     */
    public function getIsSearchableInGrid(): ?bool
    {
        return $this->isSearchableInGrid;
    }
    /**
     * It is searchable in customer grid
     *
     * @param bool|null $isSearchableInGrid
     *
     * @return self
     */
    public function setIsSearchableInGrid(?bool $isSearchableInGrid): self
    {
        $this->isSearchableInGrid = $isSearchableInGrid;
        return $this;
    }
    /**
     * It is used in customer grid
     *
     * @return bool|null
     */
    public function getIsUsedInGrid(): ?bool
    {
        return $this->isUsedInGrid;
    }
    /**
     * It is used in customer grid
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
     * It is visible in customer grid
     *
     * @return bool|null
     */
    public function getIsVisibleInGrid(): ?bool
    {
        return $this->isVisibleInGrid;
    }
    /**
     * It is visible in customer grid
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
     * Of lines of the attribute value.
     *
     * @return int|null
     */
    public function getMultilineCount(): ?int
    {
        return $this->multilineCount;
    }
    /**
     * Of lines of the attribute value.
     *
     * @param int|null $multilineCount
     *
     * @return self
     */
    public function setMultilineCount(?int $multilineCount): self
    {
        $this->multilineCount = $multilineCount;
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
     * @return CustomerDataOptionInterface[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @param CustomerDataOptionInterface[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Attribute is required.
     *
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Attribute is required.
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Attributes sort order.
     *
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }
    /**
     * Attributes sort order.
     *
     * @param int|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Label of the store.
     *
     * @return string|null
     */
    public function getStoreLabel(): ?string
    {
        return $this->storeLabel;
    }
    /**
     * Label of the store.
     *
     * @param string|null $storeLabel
     *
     * @return self
     */
    public function setStoreLabel(?string $storeLabel): self
    {
        $this->storeLabel = $storeLabel;
        return $this;
    }
    /**
     * This is a system attribute.
     *
     * @return bool|null
     */
    public function getSystem(): ?bool
    {
        return $this->system;
    }
    /**
     * This is a system attribute.
     *
     * @param bool|null $system
     *
     * @return self
     */
    public function setSystem(?bool $system): self
    {
        $this->system = $system;
        return $this;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @return bool|null
     */
    public function getUserDefined(): ?bool
    {
        return $this->userDefined;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @param bool|null $userDefined
     *
     * @return self
     */
    public function setUserDefined(?bool $userDefined): self
    {
        $this->userDefined = $userDefined;
        return $this;
    }
    /**
     * Validation rules.
     *
     * @return CustomerDataValidationRuleInterface[]|null
     */
    public function getValidationRules(): ?array
    {
        return $this->validationRules;
    }
    /**
     * Validation rules.
     *
     * @param CustomerDataValidationRuleInterface[]|null $validationRules
     *
     * @return self
     */
    public function setValidationRules(?array $validationRules): self
    {
        $this->validationRules = $validationRules;
        return $this;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @param bool|null $visible
     *
     * @return self
     */
    public function setVisible(?bool $visible): self
    {
        $this->visible = $visible;
        return $this;
    }
}
