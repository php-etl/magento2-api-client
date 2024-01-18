<?php

namespace Kiboko\Magento\Model;

class V1CartsMineDeliveryOptionPostBody
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
     * 
     *
     * @var string|null
     */
    protected $selectedOption;
    /**
     * 
     *
     * @return string|null
     */
    public function getSelectedOption() : ?string
    {
        return $this->selectedOption;
    }
    /**
     * 
     *
     * @param string|null $selectedOption
     *
     * @return self
     */
    public function setSelectedOption(?string $selectedOption) : self
    {
        $this->initialized['selectedOption'] = true;
        $this->selectedOption = $selectedOption;
        return $this;
    }
}