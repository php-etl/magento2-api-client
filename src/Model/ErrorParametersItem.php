<?php

namespace Kiboko\Magento\V2\Model;

class ErrorParametersItem
{
    /**
     * Missing or invalid field name
     *
     * @var string
     */
    protected $fieldName;
    /**
     * Incorrect field value
     *
     * @var string
     */
    protected $fieldValue;
    /**
     * ACL resource
     *
     * @var string
     */
    protected $resources;
    /**
     * Missing or invalid field name
     *
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }
    /**
     * Missing or invalid field name
     *
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName(string $fieldName) : self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * Incorrect field value
     *
     * @return string
     */
    public function getFieldValue() : string
    {
        return $this->fieldValue;
    }
    /**
     * Incorrect field value
     *
     * @param string $fieldValue
     *
     * @return self
     */
    public function setFieldValue(string $fieldValue) : self
    {
        $this->fieldValue = $fieldValue;
        return $this;
    }
    /**
     * ACL resource
     *
     * @return string
     */
    public function getResources() : string
    {
        return $this->resources;
    }
    /**
     * ACL resource
     *
     * @param string $resources
     *
     * @return self
     */
    public function setResources(string $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
}