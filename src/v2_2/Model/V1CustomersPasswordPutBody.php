<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CustomersPasswordPutBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @var string|null
     */
    protected $template;
    /**
     *
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     *
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }
    /**
     *
     *
     * @param string|null $template
     *
     * @return self
     */
    public function setTemplate(?string $template): self
    {
        $this->template = $template;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        return $this->websiteId;
    }
    /**
     *
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
