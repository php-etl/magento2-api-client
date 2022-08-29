<?php

namespace Kiboko\Magento\v2_3\Model;

class CustomerDataAttributeMetadataInterface
{
    /**
     * HTML for input element.
     *
     * @var string
     */
    protected $frontendInput;
    /**
     * Template used for input (e.g. "date")
     *
     * @var string
     */
    protected $inputFilter;
    /**
     * Label of the store.
     *
     * @var string
     */
    protected $storeLabel;
    /**
     * Validation rules.
     *
     * @var CustomerDataValidationRuleInterface[]
     */
    protected $validationRules;
    /**
     * Of lines of the attribute value.
     *
     * @var int
     */
    protected $multilineCount;
    /**
     * Attribute is visible on frontend.
     *
     * @var bool
     */
    protected $visible;
    /**
     * Attribute is required.
     *
     * @var bool
     */
    protected $required;
    /**
     * Data model for attribute.
     *
     * @var string
     */
    protected $dataModel;
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @var CustomerDataOptionInterface[]
     */
    protected $options;
    /**
     * Class which is used to display the attribute on frontend.
     *
     * @var string
     */
    protected $frontendClass;
    /**
     * Current attribute has been defined by a user.
     *
     * @var bool
     */
    protected $userDefined;
    /**
     * Attributes sort order.
     *
     * @var int
     */
    protected $sortOrder;
    /**
     * Label which supposed to be displayed on frontend.
     *
     * @var string
     */
    protected $frontendLabel;
    /**
     * The note attribute for the element.
     *
     * @var string
     */
    protected $note;
    /**
     * This is a system attribute.
     *
     * @var bool
     */
    protected $system;
    /**
     * Backend type.
     *
     * @var string
     */
    protected $backendType;
    /**
     * It is used in customer grid
     *
     * @var bool
     */
    protected $isUsedInGrid;
    /**
     * It is visible in customer grid
     *
     * @var bool
     */
    protected $isVisibleInGrid;
    /**
     * It is filterable in customer grid
     *
     * @var bool
     */
    protected $isFilterableInGrid;
    /**
     * It is searchable in customer grid
     *
     * @var bool
     */
    protected $isSearchableInGrid;
    /**
     * Code of the attribute.
     *
     * @var string
     */
    protected $attributeCode;
    /**
     * HTML for input element.
     *
     * @return string
     */
    public function getFrontendInput() : string
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
    public function setFrontendInput(string $frontendInput) : self
    {
        $this->frontendInput = $frontendInput;
        return $this;
    }
    /**
     * Template used for input (e.g. "date")
     *
     * @return string
     */
    public function getInputFilter() : string
    {
        return $this->inputFilter;
    }
    /**
     * Template used for input (e.g. "date")
     *
     * @param string $inputFilter
     *
     * @return self
     */
    public function setInputFilter(string $inputFilter) : self
    {
        $this->inputFilter = $inputFilter;
        return $this;
    }
    /**
     * Label of the store.
     *
     * @return string
     */
    public function getStoreLabel() : string
    {
        return $this->storeLabel;
    }
    /**
     * Label of the store.
     *
     * @param string $storeLabel
     *
     * @return self
     */
    public function setStoreLabel(string $storeLabel) : self
    {
        $this->storeLabel = $storeLabel;
        return $this;
    }
    /**
     * Validation rules.
     *
     * @return CustomerDataValidationRuleInterface[]
     */
    public function getValidationRules() : array
    {
        return $this->validationRules;
    }
    /**
     * Validation rules.
     *
     * @param CustomerDataValidationRuleInterface[] $validationRules
     *
     * @return self
     */
    public function setValidationRules(array $validationRules) : self
    {
        $this->validationRules = $validationRules;
        return $this;
    }
    /**
     * Of lines of the attribute value.
     *
     * @return int
     */
    public function getMultilineCount() : int
    {
        return $this->multilineCount;
    }
    /**
     * Of lines of the attribute value.
     *
     * @param int $multilineCount
     *
     * @return self
     */
    public function setMultilineCount(int $multilineCount) : self
    {
        $this->multilineCount = $multilineCount;
        return $this;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @return bool
     */
    public function getVisible() : bool
    {
        return $this->visible;
    }
    /**
     * Attribute is visible on frontend.
     *
     * @param bool $visible
     *
     * @return self
     */
    public function setVisible(bool $visible) : self
    {
        $this->visible = $visible;
        return $this;
    }
    /**
     * Attribute is required.
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * Attribute is required.
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Data model for attribute.
     *
     * @return string
     */
    public function getDataModel() : string
    {
        return $this->dataModel;
    }
    /**
     * Data model for attribute.
     *
     * @param string $dataModel
     *
     * @return self
     */
    public function setDataModel(string $dataModel) : self
    {
        $this->dataModel = $dataModel;
        return $this;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @return CustomerDataOptionInterface[]
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * Options of the attribute (key => value pairs for select)
     *
     * @param CustomerDataOptionInterface[] $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Class which is used to display the attribute on frontend.
     *
     * @return string
     */
    public function getFrontendClass() : string
    {
        return $this->frontendClass;
    }
    /**
     * Class which is used to display the attribute on frontend.
     *
     * @param string $frontendClass
     *
     * @return self
     */
    public function setFrontendClass(string $frontendClass) : self
    {
        $this->frontendClass = $frontendClass;
        return $this;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @return bool
     */
    public function getUserDefined() : bool
    {
        return $this->userDefined;
    }
    /**
     * Current attribute has been defined by a user.
     *
     * @param bool $userDefined
     *
     * @return self
     */
    public function setUserDefined(bool $userDefined) : self
    {
        $this->userDefined = $userDefined;
        return $this;
    }
    /**
     * Attributes sort order.
     *
     * @return int
     */
    public function getSortOrder() : int
    {
        return $this->sortOrder;
    }
    /**
     * Attributes sort order.
     *
     * @param int $sortOrder
     *
     * @return self
     */
    public function setSortOrder(int $sortOrder) : self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Label which supposed to be displayed on frontend.
     *
     * @return string
     */
    public function getFrontendLabel() : string
    {
        return $this->frontendLabel;
    }
    /**
     * Label which supposed to be displayed on frontend.
     *
     * @param string $frontendLabel
     *
     * @return self
     */
    public function setFrontendLabel(string $frontendLabel) : self
    {
        $this->frontendLabel = $frontendLabel;
        return $this;
    }
    /**
     * The note attribute for the element.
     *
     * @return string
     */
    public function getNote() : string
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
    public function setNote(string $note) : self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * This is a system attribute.
     *
     * @return bool
     */
    public function getSystem() : bool
    {
        return $this->system;
    }
    /**
     * This is a system attribute.
     *
     * @param bool $system
     *
     * @return self
     */
    public function setSystem(bool $system) : self
    {
        $this->system = $system;
        return $this;
    }
    /**
     * Backend type.
     *
     * @return string
     */
    public function getBackendType() : string
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
    public function setBackendType(string $backendType) : self
    {
        $this->backendType = $backendType;
        return $this;
    }
    /**
     * It is used in customer grid
     *
     * @return bool
     */
    public function getIsUsedInGrid() : bool
    {
        return $this->isUsedInGrid;
    }
    /**
     * It is used in customer grid
     *
     * @param bool $isUsedInGrid
     *
     * @return self
     */
    public function setIsUsedInGrid(bool $isUsedInGrid) : self
    {
        $this->isUsedInGrid = $isUsedInGrid;
        return $this;
    }
    /**
     * It is visible in customer grid
     *
     * @return bool
     */
    public function getIsVisibleInGrid() : bool
    {
        return $this->isVisibleInGrid;
    }
    /**
     * It is visible in customer grid
     *
     * @param bool $isVisibleInGrid
     *
     * @return self
     */
    public function setIsVisibleInGrid(bool $isVisibleInGrid) : self
    {
        $this->isVisibleInGrid = $isVisibleInGrid;
        return $this;
    }
    /**
     * It is filterable in customer grid
     *
     * @return bool
     */
    public function getIsFilterableInGrid() : bool
    {
        return $this->isFilterableInGrid;
    }
    /**
     * It is filterable in customer grid
     *
     * @param bool $isFilterableInGrid
     *
     * @return self
     */
    public function setIsFilterableInGrid(bool $isFilterableInGrid) : self
    {
        $this->isFilterableInGrid = $isFilterableInGrid;
        return $this;
    }
    /**
     * It is searchable in customer grid
     *
     * @return bool
     */
    public function getIsSearchableInGrid() : bool
    {
        return $this->isSearchableInGrid;
    }
    /**
     * It is searchable in customer grid
     *
     * @param bool $isSearchableInGrid
     *
     * @return self
     */
    public function setIsSearchableInGrid(bool $isSearchableInGrid) : self
    {
        $this->isSearchableInGrid = $isSearchableInGrid;
        return $this;
    }
    /**
     * Code of the attribute.
     *
     * @return string
     */
    public function getAttributeCode() : string
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
    public function setAttributeCode(string $attributeCode) : self
    {
        $this->attributeCode = $attributeCode;
        return $this;
    }
}