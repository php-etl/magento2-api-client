<?php

namespace Kiboko\Magento\v2_4\Model;

class V1GuestCartsCartIdDeliveryOptionPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $selectedOption;
    /**
     *
     *
     * @return string
     */
    public function getSelectedOption(): string
    {
        return $this->selectedOption;
    }
    /**
     *
     *
     * @param string $selectedOption
     *
     * @return self
     */
    public function setSelectedOption(string $selectedOption): self
    {
        $this->selectedOption = $selectedOption;
        return $this;
    }
}
