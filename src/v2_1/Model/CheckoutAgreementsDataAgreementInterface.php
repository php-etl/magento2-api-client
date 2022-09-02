<?php

namespace Kiboko\Magento\V2_1\Model;

class CheckoutAgreementsDataAgreementInterface
{
    /**
     * Agreement ID.
     *
     * @var int
     */
    protected $agreementId;
    /**
     * Agreement checkbox text.
     *
     * @var string
     */
    protected $checkboxText;
    /**
     * Agreement content.
     *
     * @var string
     */
    protected $content;
    /**
     * Agreement content height. Otherwise, null.
     *
     * @var string
     */
    protected $contentHeight;
    /**
     * ExtensionInterface class for @see \Magento\CheckoutAgreements\Api\Data\AgreementInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Agreement status.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * * true - HTML. * false - plain text.
     *
     * @var bool
     */
    protected $isHtml;
    /**
     * The agreement applied mode.
     *
     * @var int
     */
    protected $mode;
    /**
     * Agreement name.
     *
     * @var string
     */
    protected $name;
    /**
     * Agreement ID.
     *
     * @return int
     */
    public function getAgreementId(): int
    {
        return $this->agreementId;
    }
    /**
     * Agreement ID.
     *
     * @param int $agreementId
     *
     * @return self
     */
    public function setAgreementId(int $agreementId): self
    {
        $this->agreementId = $agreementId;
        return $this;
    }
    /**
     * Agreement checkbox text.
     *
     * @return string
     */
    public function getCheckboxText(): string
    {
        return $this->checkboxText;
    }
    /**
     * Agreement checkbox text.
     *
     * @param string $checkboxText
     *
     * @return self
     */
    public function setCheckboxText(string $checkboxText): self
    {
        $this->checkboxText = $checkboxText;
        return $this;
    }
    /**
     * Agreement content.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Agreement content.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Agreement content height. Otherwise, null.
     *
     * @return string
     */
    public function getContentHeight(): string
    {
        return $this->contentHeight;
    }
    /**
     * Agreement content height. Otherwise, null.
     *
     * @param string $contentHeight
     *
     * @return self
     */
    public function setContentHeight(string $contentHeight): self
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
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }
    /**
     * Agreement status.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * * true - HTML. * false - plain text.
     *
     * @return bool
     */
    public function getIsHtml(): bool
    {
        return $this->isHtml;
    }
    /**
     * * true - HTML. * false - plain text.
     *
     * @param bool $isHtml
     *
     * @return self
     */
    public function setIsHtml(bool $isHtml): self
    {
        $this->isHtml = $isHtml;
        return $this;
    }
    /**
     * The agreement applied mode.
     *
     * @return int
     */
    public function getMode(): int
    {
        return $this->mode;
    }
    /**
     * The agreement applied mode.
     *
     * @param int $mode
     *
     * @return self
     */
    public function setMode(int $mode): self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * Agreement name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Agreement name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
