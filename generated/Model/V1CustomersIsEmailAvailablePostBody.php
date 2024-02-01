<?php

namespace Kiboko\Magento\Model;

class V1CustomersIsEmailAvailablePostBody
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
    protected $customerEmail;
    /**
     * If not set, will use the current websiteId
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerEmail() : ?string
    {
        return $this->customerEmail;
    }
    /**
     * 
     *
     * @param string|null $customerEmail
     *
     * @return self
     */
    public function setCustomerEmail(?string $customerEmail) : self
    {
        $this->initialized['customerEmail'] = true;
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * If not set, will use the current websiteId
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
    {
        return $this->websiteId;
    }
    /**
     * If not set, will use the current websiteId
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
}