<?php

namespace Kiboko\Magento\Model;

class FrameworkSortOrder
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
     * Sorting field.
     *
     * @var string|null
     */
    protected $field;
    /**
     * Sorting direction.
     *
     * @var string|null
     */
    protected $direction;
    /**
     * Sorting field.
     *
     * @return string|null
     */
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * Sorting field.
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * Sorting direction.
     *
     * @return string|null
     */
    public function getDirection() : ?string
    {
        return $this->direction;
    }
    /**
     * Sorting direction.
     *
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction) : self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
}