<?php

namespace Kiboko\Magento\V2_2\Model;

class NegotiableQuoteDataAttachmentContentInterface
{
    /**
     * Media data (base64 encoded content).
     *
     * @var string|null
     */
    protected $base64EncodedData;
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\AttachmentContentInterface
     *
     * @var mixed|null
     */
    protected $extensionAttributes;
    /**
     * File name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * MIME type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Media data (base64 encoded content).
     *
     * @return string|null
     */
    public function getBase64EncodedData(): ?string
    {
        return $this->base64EncodedData;
    }
    /**
     * Media data (base64 encoded content).
     *
     * @param string|null $base64EncodedData
     *
     * @return self
     */
    public function setBase64EncodedData(?string $base64EncodedData): self
    {
        $this->base64EncodedData = $base64EncodedData;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\AttachmentContentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\NegotiableQuote\Api\Data\AttachmentContentInterface
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
     * File name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * File name.
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
    /**
     * MIME type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * MIME type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
