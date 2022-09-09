<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CustomersIsEmailAvailablePostBody
{
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
    public function getCustomerEmail(): ?string
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
    public function setCustomerEmail(?string $customerEmail): self
    {
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * If not set, will use the current websiteId
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
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
    public function setWebsiteId(?int $websiteId): self
    {
        $this->websiteId = $websiteId;
        return $this;
    }
}
