<?php

namespace Kiboko\Magento\Model;

class QuoteDataCartExtensionInterface
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
     * @var QuoteDataShippingAssignmentInterface[]|null
     */
    protected $shippingAssignments;
    /**
     * 
     *
     * @var string|null
     */
    protected $amazonOrderReferenceId;
    /**
     * 
     *
     * @return QuoteDataShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments() : ?array
    {
        return $this->shippingAssignments;
    }
    /**
     * 
     *
     * @param QuoteDataShippingAssignmentInterface[]|null $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(?array $shippingAssignments) : self
    {
        $this->initialized['shippingAssignments'] = true;
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmazonOrderReferenceId() : ?string
    {
        return $this->amazonOrderReferenceId;
    }
    /**
     * 
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
}