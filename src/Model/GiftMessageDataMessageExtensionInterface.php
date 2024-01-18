<?php

namespace Kiboko\Magento\Model;

class GiftMessageDataMessageExtensionInterface
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
    protected $entityId;
    /**
     * 
     *
     * @var string|null
     */
    protected $entityType;
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityId() : ?string
    {
        return $this->entityId;
    }
    /**
     * 
     *
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId) : self
    {
        $this->initialized['entityId'] = true;
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEntityType() : ?string
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType) : self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
}