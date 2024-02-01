<?php

namespace Kiboko\Magento\Model;

class ErrorParametersItem
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
     * ACL resource
     *
     * @var string|null
     */
    protected $resources;
    /**
     * Missing or invalid field name
     *
     * @var string|null
     */
    protected $fieldName;
    /**
     * Incorrect field value
     *
     * @var string|null
     */
    protected $fieldValue;
    /**
     * ACL resource
     *
     * @return string|null
     */
    public function getResources() : ?string
    {
        return $this->resources;
    }
    /**
     * ACL resource
     *
     * @param string|null $resources
     *
     * @return self
     */
    public function setResources(?string $resources) : self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
     * Missing or invalid field name
     *
     * @return string|null
     */
    public function getFieldName() : ?string
    {
        return $this->fieldName;
    }
    /**
     * Missing or invalid field name
     *
     * @param string|null $fieldName
     *
     * @return self
     */
    public function setFieldName(?string $fieldName) : self
    {
        $this->initialized['fieldName'] = true;
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * Incorrect field value
     *
     * @return string|null
     */
    public function getFieldValue() : ?string
    {
        return $this->fieldValue;
    }
    /**
     * Incorrect field value
     *
     * @param string|null $fieldValue
     *
     * @return self
     */
    public function setFieldValue(?string $fieldValue) : self
    {
        $this->initialized['fieldValue'] = true;
        $this->fieldValue = $fieldValue;
        return $this;
    }
}