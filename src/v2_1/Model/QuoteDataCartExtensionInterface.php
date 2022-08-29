<?php

namespace Kiboko\Magento\v2_1\Model;

class QuoteDataCartExtensionInterface
{
    /**
     *
     *
     * @var QuoteDataShippingAssignmentInterface[]
     */
    protected $shippingAssignments;
    /**
     *
     *
     * @return QuoteDataShippingAssignmentInterface[]
     */
    public function getShippingAssignments(): array
    {
        return $this->shippingAssignments;
    }
    /**
     *
     *
     * @param QuoteDataShippingAssignmentInterface[] $shippingAssignments
     *
     * @return self
     */
    public function setShippingAssignments(array $shippingAssignments): self
    {
        $this->shippingAssignments = $shippingAssignments;
        return $this;
    }
}
