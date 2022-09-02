<?php

namespace Kiboko\Magento\V2_2\Model;

class SalesDataShippingExtensionInterface
{
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @var TemandoShippingDataCollectionPointOrderCollectionPointInterface
     */
    protected $collectionPoint;
    /**
     *
     *
     * @var string
     */
    protected $extOrderId;
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @var TemandoShippingDataOrderShippingExperienceInterface
     */
    protected $shippingExperience;
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @return TemandoShippingDataCollectionPointOrderCollectionPointInterface
     */
    public function getCollectionPoint(): TemandoShippingDataCollectionPointOrderCollectionPointInterface
    {
        return $this->collectionPoint;
    }
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @param TemandoShippingDataCollectionPointOrderCollectionPointInterface $collectionPoint
     *
     * @return self
     */
    public function setCollectionPoint(TemandoShippingDataCollectionPointOrderCollectionPointInterface $collectionPoint): self
    {
        $this->collectionPoint = $collectionPoint;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getExtOrderId(): string
    {
        return $this->extOrderId;
    }
    /**
     *
     *
     * @param string $extOrderId
     *
     * @return self
     */
    public function setExtOrderId(string $extOrderId): self
    {
        $this->extOrderId = $extOrderId;
        return $this;
    }
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @return TemandoShippingDataOrderShippingExperienceInterface
     */
    public function getShippingExperience(): TemandoShippingDataOrderShippingExperienceInterface
    {
        return $this->shippingExperience;
    }
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @param TemandoShippingDataOrderShippingExperienceInterface $shippingExperience
     *
     * @return self
     */
    public function setShippingExperience(TemandoShippingDataOrderShippingExperienceInterface $shippingExperience): self
    {
        $this->shippingExperience = $shippingExperience;
        return $this;
    }
}
