<?php

namespace Kiboko\Magento\v2_3\Model;

class V1AmazonShippingAddressAmazonOrderReferenceIdPutBody
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