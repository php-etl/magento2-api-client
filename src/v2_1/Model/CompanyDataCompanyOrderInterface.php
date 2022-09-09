<?php

namespace Kiboko\Magento\V2_1\Model;

class CompanyDataCompanyOrderInterface
{
    /**
     * Company ID.
     *
     * @var int|null
     */
    protected $companyId;
    /**
     * Company name.
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyOrderInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Order ID.
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * Company ID.
     *
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Company ID.
     *
     * @param int|null $companyId
     *
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Company name.
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Company name.
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyOrderInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyOrderInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
    /**
     * Order ID.
     *
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
}
