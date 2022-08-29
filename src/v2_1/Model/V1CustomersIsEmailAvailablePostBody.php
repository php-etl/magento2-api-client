<?php

namespace Kiboko\Magento\v2_1\Model;

class V1CustomersIsEmailAvailablePostBody
{
    /**
     *
     *
     * @var string
     */
    protected $customerEmail;
    /**
     * If not set, will use the current websiteId
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }
    /**
     *
     *
     * @param string $customerEmail
     *
     * @return self
     */
    public function setCustomerEmail(string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * If not set, will use the current websiteId
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     * If not set, will use the current websiteId
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
