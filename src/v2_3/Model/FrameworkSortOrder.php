<?php

namespace Kiboko\Magento\v2_3\Model;

class FrameworkSortOrder
{
    /**
     * Sorting field.
     *
     * @var string
     */
    protected $field;
    /**
     * Sorting direction.
     *
     * @var string
     */
    protected $direction;
    /**
     * Sorting field.
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * Sorting field.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Sorting direction.
     *
     * @return string
     */
    public function getDirection() : string
    {
        return $this->direction;
    }
    /**
     * Sorting direction.
     *
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction) : self
    {
        $this->direction = $direction;
        return $this;
    }
}