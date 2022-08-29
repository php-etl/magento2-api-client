<?php

namespace Kiboko\Magento\v2_3\Model;

class AmazonPaymentDataQuoteLinkInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * Amazon order reference id
     *
     * @var string
     */
    protected $amazonOrderReferenceId;
    /**
     * Quote id
     *
     * @var int
     */
    protected $quoteId;
    /**
     * Sandbox simulation reference
     *
     * @var string
     */
    protected $sandboxSimulationReference;
    /**
     * Quote confirmed with amazon
     *
     * @var bool
     */
    protected $confirmed;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Amazon order reference id
     *
     * @return string
     */
    public function getAmazonOrderReferenceId() : string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * Amazon order reference id
     *
     * @param string $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(string $amazonOrderReferenceId) : self
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     * Quote id
     *
     * @return int
     */
    public function getQuoteId() : int
    {
        return $this->quoteId;
    }
    /**
     * Quote id
     *
     * @param int $quoteId
     *
     * @return self
     */
    public function setQuoteId(int $quoteId) : self
    {
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Sandbox simulation reference
     *
     * @return string
     */
    public function getSandboxSimulationReference() : string
    {
        return $this->sandboxSimulationReference;
    }
    /**
     * Sandbox simulation reference
     *
     * @param string $sandboxSimulationReference
     *
     * @return self
     */
    public function setSandboxSimulationReference(string $sandboxSimulationReference) : self
    {
        $this->sandboxSimulationReference = $sandboxSimulationReference;
        return $this;
    }
    /**
     * Quote confirmed with amazon
     *
     * @return bool
     */
    public function getConfirmed() : bool
    {
        return $this->confirmed;
    }
    /**
     * Quote confirmed with amazon
     *
     * @param bool $confirmed
     *
     * @return self
     */
    public function setConfirmed(bool $confirmed) : self
    {
        $this->confirmed = $confirmed;
        return $this;
    }
}