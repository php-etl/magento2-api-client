<?php

namespace Kiboko\Magento\V2_3\Model;

class V1TemandoRmaRmaIdShipmentsPutBody
{
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
    public function getReturnShipmentIds(): ?array
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
    public function setReturnShipmentIds(?array $returnShipmentIds): self
    {
        $this->returnShipmentIds = $returnShipmentIds;
        return $this;
    }
}
