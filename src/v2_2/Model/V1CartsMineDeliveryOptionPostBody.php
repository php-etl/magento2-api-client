<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CartsMineDeliveryOptionPostBody
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
