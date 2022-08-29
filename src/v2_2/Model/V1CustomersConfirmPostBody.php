<?php

namespace Kiboko\Magento\v2_2\Model;

class V1CustomersConfirmPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $email;
    /**
     *
     *
     * @var string
     */
    protected $redirectUrl;
    /**
     *
     *
     * @var int
     */
    protected $websiteId;
    /**
     *
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
    /**
     *
     *
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getWebsiteId(): int
    {
        return $this->websiteId;
    }
    /**
     *
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
