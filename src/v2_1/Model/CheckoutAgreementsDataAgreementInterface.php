<?php

namespace Kiboko\Magento\V2_1\Model;

class CheckoutAgreementsDataAgreementInterface
{
    /**
     * Agreement ID.
     *
     * @var int|null
     */
    protected $agreementId;
    /**
     * Agreement checkbox text.
     *
     * @var string|null
     */
    protected $checkboxText;
    /**
     * Agreement content.
     *
     * @var string|null
     */
    protected $content;
    /**
     * Agreement content height. Otherwise, null.
     *
     * @var string|null
     */
    protected $contentHeight;
    /**
     * ExtensionInterface class for @see \Magento\CheckoutAgreements\Api\Data\AgreementInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * Agreement status.
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * * true - HTML. * false - plain text.
     *
     * @var bool|null
     */
    protected $isHtml;
    /**
     * The agreement applied mode.
     *
     * @var int|null
     */
    protected $mode;
    /**
     * Agreement name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Agreement ID.
     *
     * @return int|null
     */
    public function getAgreementId(): ?int
    {
        return $this->agreementId;
    }
    /**
     * Agreement ID.
     *
     * @param int|null $agreementId
     *
     * @return self
     */
    public function setAgreementId(?int $agreementId): self
    {
        $this->agreementId = $agreementId;
        return $this;
    }
    /**
     * Agreement checkbox text.
     *
     * @return string|null
     */
    public function getCheckboxText(): ?string
    {
        return $this->checkboxText;
    }
    /**
     * Agreement checkbox text.
     *
     * @param string|null $checkboxText
     *
     * @return self
     */
    public function setCheckboxText(?string $checkboxText): self
    {
        $this->checkboxText = $checkboxText;
        return $this;
    }
    /**
     * Agreement content.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }
    /**
     * Agreement content.
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Agreement content height. Otherwise, null.
     *
     * @return string|null
     */
    public function getContentHeight(): ?string
    {
        return $this->contentHeight;
    }
    /**
     * Agreement content height. Otherwise, null.
     *
     * @param string|null $contentHeight
     *
     * @return self
     */
    public function setContentHeight(?string $contentHeight): self
    {
        $this->contentHeight = $contentHeight;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\CheckoutAgreements\Api\Data\AgreementInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\CheckoutAgreements\Api\Data\AgreementInterface
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
     * Agreement status.
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Agreement status.
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * * true - HTML. * false - plain text.
     *
     * @return bool|null
     */
    public function getIsHtml(): ?bool
    {
        return $this->isHtml;
    }
    /**
     * * true - HTML. * false - plain text.
     *
     * @param bool|null $isHtml
     *
     * @return self
     */
    public function setIsHtml(?bool $isHtml): self
    {
        $this->isHtml = $isHtml;
        return $this;
    }
    /**
     * The agreement applied mode.
     *
     * @return int|null
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }
    /**
     * The agreement applied mode.
     *
     * @param int|null $mode
     *
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * Agreement name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Agreement name.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
