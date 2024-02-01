<?php

namespace Kiboko\Magento\Model;

class V1InventoryBulkProductSourceTransferPostBody
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
    protected $skus;
    /**
     * 
     *
     * @var string|null
     */
    protected $originSource;
    /**
     * 
     *
     * @var string|null
     */
    protected $destinationSource;
    /**
     * 
     *
     * @var bool|null
     */
    protected $unassignFromOrigin;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSkus() : ?array
    {
        return $this->skus;
    }
    /**
     * 
     *
     * @param string[]|null $skus
     *
     * @return self
     */
    public function setSkus(?array $skus) : self
    {
        $this->initialized['skus'] = true;
        $this->skus = $skus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOriginSource() : ?string
    {
        return $this->originSource;
    }
    /**
     * 
     *
     * @param string|null $originSource
     *
     * @return self
     */
    public function setOriginSource(?string $originSource) : self
    {
        $this->initialized['originSource'] = true;
        $this->originSource = $originSource;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestinationSource() : ?string
    {
        return $this->destinationSource;
    }
    /**
     * 
     *
     * @param string|null $destinationSource
     *
     * @return self
     */
    public function setDestinationSource(?string $destinationSource) : self
    {
        $this->initialized['destinationSource'] = true;
        $this->destinationSource = $destinationSource;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUnassignFromOrigin() : ?bool
    {
        return $this->unassignFromOrigin;
    }
    /**
     * 
     *
     * @param bool|null $unassignFromOrigin
     *
     * @return self
     */
    public function setUnassignFromOrigin(?bool $unassignFromOrigin) : self
    {
        $this->initialized['unassignFromOrigin'] = true;
        $this->unassignFromOrigin = $unassignFromOrigin;
        return $this;
    }
}