<?php

namespace Kiboko\Magento\V2_3\Model;

class TemandoShippingDataOrderShippingExperienceInterface
{
    /**
     *
     *
     * @var string|null
     */
    protected $code;
    /**
     *
     *
     * @var float|null
     */
    protected $cost;
    /**
     *
     *
     * @var string|null
     */
    protected $label;
    /**
     *
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     *
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }
    /**
     *
     *
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }
    /**
     *
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }
}
