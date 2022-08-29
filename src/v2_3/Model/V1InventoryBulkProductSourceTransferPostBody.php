<?php

namespace Kiboko\Magento\v2_3\Model;

class V1InventoryBulkProductSourceTransferPostBody
{
    /**
     * 
     *
     * @var string[]
     */
    protected $skus;
    /**
     * 
     *
     * @var string
     */
    protected $originSource;
    /**
     * 
     *
     * @var string
     */
    protected $destinationSource;
    /**
     * 
     *
     * @var bool
     */
    protected $unassignFromOrigin;
    /**
     * 
     *
     * @return string[]
     */
    public function getSkus() : array
    {
        return $this->skus;
    }
    /**
     * 
     *
     * @param string[] $skus
     *
     * @return self
     */
    public function setSkus(array $skus) : self
    {
        $this->skus = $skus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginSource() : string
    {
        return $this->originSource;
    }
    /**
     * 
     *
     * @param string $originSource
     *
     * @return self
     */
    public function setOriginSource(string $originSource) : self
    {
        $this->originSource = $originSource;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestinationSource() : string
    {
        return $this->destinationSource;
    }
    /**
     * 
     *
     * @param string $destinationSource
     *
     * @return self
     */
    public function setDestinationSource(string $destinationSource) : self
    {
        $this->destinationSource = $destinationSource;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUnassignFromOrigin() : bool
    {
        return $this->unassignFromOrigin;
    }
    /**
     * 
     *
     * @param bool $unassignFromOrigin
     *
     * @return self
     */
    public function setUnassignFromOrigin(bool $unassignFromOrigin) : self
    {
        $this->unassignFromOrigin = $unassignFromOrigin;
        return $this;
    }
}