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
}