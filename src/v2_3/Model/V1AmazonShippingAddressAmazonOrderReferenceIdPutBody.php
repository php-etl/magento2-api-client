<?php

namespace Kiboko\Magento\V2_3\Model;

class V1AmazonShippingAddressAmazonOrderReferenceIdPutBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $addressConsentToken;
    /**
     *
     *
     * @return string|null
     */
    public function getAddressConsentToken(): ?string
    {
        return $this->addressConsentToken;
    }
    /**
     *
     *
     * @param string|null $addressConsentToken
     *
     * @return self
     */
    public function setAddressConsentToken(?string $addressConsentToken): self
    {
        $this->addressConsentToken = $addressConsentToken;
        return $this;
    }
}
