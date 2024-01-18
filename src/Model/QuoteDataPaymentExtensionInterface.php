<?php

namespace Kiboko\Magento\Model;

class QuoteDataPaymentExtensionInterface
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
     * @var string[]|null
     */
    protected $agreementIds;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAgreementIds() : ?array
    {
        return $this->agreementIds;
    }
    /**
     * 
     *
     * @param string[]|null $agreementIds
     *
     * @return self
     */
    public function setAgreementIds(?array $agreementIds) : self
    {
        $this->initialized['agreementIds'] = true;
        $this->agreementIds = $agreementIds;
        return $this;
    }
}