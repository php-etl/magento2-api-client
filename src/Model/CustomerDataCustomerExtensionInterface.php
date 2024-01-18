<?php

namespace Kiboko\Magento\Model;

class CustomerDataCustomerExtensionInterface
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
     * @var bool|null
     */
    protected $isSubscribed;
    /**
     * 
     *
     * @var string|null
     */
    protected $amazonId;
    /**
     * 
     *
     * @var string|null
     */
    protected $vertexCustomerCode;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSubscribed() : ?bool
    {
        return $this->isSubscribed;
    }
    /**
     * 
     *
     * @param bool|null $isSubscribed
     *
     * @return self
     */
    public function setIsSubscribed(?bool $isSubscribed) : self
    {
        $this->initialized['isSubscribed'] = true;
        $this->isSubscribed = $isSubscribed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAmazonId() : ?string
    {
        return $this->amazonId;
    }
    /**
     * 
     *
     * @param string|null $amazonId
     *
     * @return self
     */
    public function setAmazonId(?string $amazonId) : self
    {
        $this->initialized['amazonId'] = true;
        $this->amazonId = $amazonId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVertexCustomerCode() : ?string
    {
        return $this->vertexCustomerCode;
    }
    /**
     * 
     *
     * @param string|null $vertexCustomerCode
     *
     * @return self
     */
    public function setVertexCustomerCode(?string $vertexCustomerCode) : self
    {
        $this->initialized['vertexCustomerCode'] = true;
        $this->vertexCustomerCode = $vertexCustomerCode;
        return $this;
    }
}