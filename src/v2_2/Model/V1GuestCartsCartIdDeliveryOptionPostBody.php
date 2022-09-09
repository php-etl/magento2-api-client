<?php

namespace Kiboko\Magento\V2_2\Model;

class V1GuestCartsCartIdDeliveryOptionPostBody
{
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
    public function getSelectedOption(): ?string
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
    public function setSelectedOption(?string $selectedOption): self
    {
        $this->selectedOption = $selectedOption;
        return $this;
    }
}
