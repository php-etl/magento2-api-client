<?php

namespace Kiboko\Magento\Model;

class AmazonPaymentDataQuoteLinkInterface
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
     * @var string|null
     */
    protected $id;
    /**
     * Amazon order reference id
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     * Quote id
     *
     * @var int|null
     */
    protected $quoteId;
    /**
     * Sandbox simulation reference
     *
     * @var string|null
     */
    protected $sandboxSimulationReference;
    /**
     * Quote confirmed with amazon
     *
     * @var bool|null
     */
    protected $confirmed;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Amazon order reference id
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId() : ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * Amazon order reference id
     *
     * @param string|null $amazonOrderReferenceId
     *
     * @return self
     */
    public function setAmazonOrderReferenceId(?string $amazonOrderReferenceId) : self
    {
        $this->initialized['amazonOrderReferenceId'] = true;
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        return $this;
    }
    /**
     * Quote id
     *
     * @return int|null
     */
    public function getQuoteId() : ?int
    {
        return $this->quoteId;
    }
    /**
     * Quote id
     *
     * @param int|null $quoteId
     *
     * @return self
     */
    public function setQuoteId(?int $quoteId) : self
    {
        $this->initialized['quoteId'] = true;
        $this->quoteId = $quoteId;
        return $this;
    }
    /**
     * Sandbox simulation reference
     *
     * @return string|null
     */
    public function getSandboxSimulationReference() : ?string
    {
        return $this->sandboxSimulationReference;
    }
    /**
     * Sandbox simulation reference
     *
     * @param string|null $sandboxSimulationReference
     *
     * @return self
     */
    public function setSandboxSimulationReference(?string $sandboxSimulationReference) : self
    {
        $this->initialized['sandboxSimulationReference'] = true;
        $this->sandboxSimulationReference = $sandboxSimulationReference;
        return $this;
    }
    /**
     * Quote confirmed with amazon
     *
     * @return bool|null
     */
    public function getConfirmed() : ?bool
    {
        return $this->confirmed;
    }
    /**
     * Quote confirmed with amazon
     *
     * @param bool|null $confirmed
     *
     * @return self
     */
    public function setConfirmed(?bool $confirmed) : self
    {
        $this->initialized['confirmed'] = true;
        $this->confirmed = $confirmed;
        return $this;
    }
}