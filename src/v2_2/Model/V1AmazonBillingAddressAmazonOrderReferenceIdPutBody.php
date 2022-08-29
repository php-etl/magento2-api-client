<?php

namespace Kiboko\Magento\v2_2\Model;

class V1AmazonBillingAddressAmazonOrderReferenceIdPutBody
{
    /**
     *
     *
     * @var string
     */
    protected $addressConsentToken;
    /**
     *
     *
     * @return string
     */
    public function getAddressConsentToken(): string
    {
        return $this->addressConsentToken;
    }
    /**
     *
     *
     * @param string $addressConsentToken
     *
     * @return self
     */
    public function setAddressConsentToken(string $addressConsentToken): self
    {
        $this->addressConsentToken = $addressConsentToken;
        return $this;
    }
}