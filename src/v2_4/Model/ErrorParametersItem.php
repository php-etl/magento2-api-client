<?php

namespace Kiboko\Magento\V2_4\Model;

class ErrorParametersItem
{
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
     * @var string|null
     */
    protected $resources;
    /**
     * Missing or invalid field name
     *
     * @return string|null
     */
    public function getFieldName(): ?string
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
    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * Incorrect field value
     *
     * @return string|null
     */
    public function getFieldValue(): ?string
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
    public function setFieldValue(?string $fieldValue): self
    {
        $this->fieldValue = $fieldValue;
        return $this;
    }
    /**
     * ACL resource
     *
     * @return string|null
     */
    public function getResources(): ?string
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
    public function setResources(?string $resources): self
    {
        $this->resources = $resources;
        return $this;
    }
}
