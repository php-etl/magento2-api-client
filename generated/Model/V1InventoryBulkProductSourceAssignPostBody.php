<?php

namespace Kiboko\Magento\Model;

class V1InventoryBulkProductSourceAssignPostBody
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
     * @var string[]|null
     */
    protected $sourceCodes;
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
     * @return string[]|null
     */
    public function getSourceCodes() : ?array
    {
        return $this->sourceCodes;
    }
    /**
     * 
     *
     * @param string[]|null $sourceCodes
     *
     * @return self
     */
    public function setSourceCodes(?array $sourceCodes) : self
    {
        $this->initialized['sourceCodes'] = true;
        $this->sourceCodes = $sourceCodes;
        return $this;
    }
}