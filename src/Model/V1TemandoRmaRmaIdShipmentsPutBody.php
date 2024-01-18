<?php

namespace Kiboko\Magento\Model;

class V1TemandoRmaRmaIdShipmentsPutBody
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
    protected $returnShipmentIds;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getReturnShipmentIds() : ?array
    {
        return $this->returnShipmentIds;
    }
    /**
     * 
     *
     * @param string[]|null $returnShipmentIds
     *
     * @return self
     */
    public function setReturnShipmentIds(?array $returnShipmentIds) : self
    {
        $this->initialized['returnShipmentIds'] = true;
        $this->returnShipmentIds = $returnShipmentIds;
        return $this;
    }
}