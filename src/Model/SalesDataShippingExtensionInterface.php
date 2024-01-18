<?php

namespace Kiboko\Magento\Model;

class SalesDataShippingExtensionInterface
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
    protected $extOrderId;
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @var TemandoShippingDataOrderShippingExperienceInterface|null
     */
    protected $shippingExperience;
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @var TemandoShippingDataCollectionPointOrderCollectionPointInterface|null
     */
    protected $collectionPoint;
    /**
     * 
     *
     * @return string|null
     */
    public function getExtOrderId() : ?string
    {
        return $this->extOrderId;
    }
    /**
     * 
     *
     * @param string|null $extOrderId
     *
     * @return self
     */
    public function setExtOrderId(?string $extOrderId) : self
    {
        $this->initialized['extOrderId'] = true;
        $this->extOrderId = $extOrderId;
        return $this;
    }
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @return TemandoShippingDataOrderShippingExperienceInterface|null
     */
    public function getShippingExperience() : ?TemandoShippingDataOrderShippingExperienceInterface
    {
        return $this->shippingExperience;
    }
    /**
     * Temando Shipping Experience Interface Local representation of a shipping rate in checkout. A set of shipping experiences is the result of creating an order at the Temando platform. (!) Needs to reside in Api namespace because selected shipping experience is exposed to public as a ShippingInterface extension attribute.
     *
     * @param TemandoShippingDataOrderShippingExperienceInterface|null $shippingExperience
     *
     * @return self
     */
    public function setShippingExperience(?TemandoShippingDataOrderShippingExperienceInterface $shippingExperience) : self
    {
        $this->initialized['shippingExperience'] = true;
        $this->shippingExperience = $shippingExperience;
        return $this;
    }
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @return TemandoShippingDataCollectionPointOrderCollectionPointInterface|null
     */
    public function getCollectionPoint() : ?TemandoShippingDataCollectionPointOrderCollectionPointInterface
    {
        return $this->collectionPoint;
    }
    /**
     * Temando Order Collection Point Interface – Order Details/Fulfillment
     *
     * @param TemandoShippingDataCollectionPointOrderCollectionPointInterface|null $collectionPoint
     *
     * @return self
     */
    public function setCollectionPoint(?TemandoShippingDataCollectionPointOrderCollectionPointInterface $collectionPoint) : self
    {
        $this->initialized['collectionPoint'] = true;
        $this->collectionPoint = $collectionPoint;
        return $this;
    }
}