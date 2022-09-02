<?php

namespace Kiboko\Magento\V2_1\Model;

class V1CustomersMeActivatePutBody
{
    /**
     *
     *
     * @var string
     */
    protected $confirmationKey;
    /**
     *
     *
     * @return string
     */
    public function getConfirmationKey(): string
    {
        return $this->confirmationKey;
    }
    /**
     *
     *
     * @param string $confirmationKey
     *
     * @return self
     */
    public function setConfirmationKey(string $confirmationKey): self
    {
        $this->confirmationKey = $confirmationKey;
        return $this;
    }
}
