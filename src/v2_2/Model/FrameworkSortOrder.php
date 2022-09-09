<?php

namespace Kiboko\Magento\V2_2\Model;

class FrameworkSortOrder
{
    /**
     * Sorting direction.
     *
     * @var string|null
     */
    protected $direction;
    /**
     * Sorting field.
     *
     * @var string|null
     */
    protected $field;
    /**
     * Sorting direction.
     *
     * @return string|null
     */
    public function getDirection(): ?string
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
    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }
    /**
     * Sorting field.
     *
     * @return string|null
     */
    public function getField(): ?string
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
    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }
}
