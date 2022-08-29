<?php

namespace Kiboko\Magento\v2_1\Model;

class CompanyDataCompanyOrderInterface
{
    /**
     * Company ID.
     *
     * @var int
     */
    protected $companyId;
    /**
     * Company name.
     *
     * @var string
     */
    protected $companyName;
    /**
     * ExtensionInterface class for @see \Magento\Company\Api\Data\CompanyOrderInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Order ID.
     *
     * @var int
     */
    protected $orderId;
    /**
     * Company ID.
     *
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }
    /**
     * Company ID.
     *
     * @param int $companyId
     *
     * @return self
     */
    public function setCompanyId(int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * Company name.
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Company name.
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
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
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Order ID.
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }
}
