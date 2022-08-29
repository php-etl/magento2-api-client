<?php

namespace Kiboko\Magento\v2_1\Model;

class CustomerDataCustomerExtensionInterface
{
    /**
     *
     *
     * @var bool
     */
    protected $isSubscribed;
    /**
     *
     *
     * @return bool
     */
    public function getIsSubscribed(): bool
    {
        return $this->isSubscribed;
    }
    /**
     *
     *
     * @param bool $isSubscribed
     *
     * @return self
     */
    public function setIsSubscribed(bool $isSubscribed): self
    {
        $this->isSubscribed = $isSubscribed;
        return $this;
    }
}
