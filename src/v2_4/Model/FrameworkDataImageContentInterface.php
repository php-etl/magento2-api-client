<?php

namespace Kiboko\Magento\V2_4\Model;

class FrameworkDataImageContentInterface
{
    /**
     * Media data (base64 encoded content)
     *
     * @var string|null
     */
    protected $base64EncodedData;
    /**
     * Image name
     *
     * @var string|null
     */
    protected $name;
    /**
     * MIME type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Media data (base64 encoded content)
     *
     * @return string|null
     */
    public function getBase64EncodedData(): ?string
    {
        return $this->base64EncodedData;
    }
    /**
     * Media data (base64 encoded content)
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
     * Image name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Image name
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
     * MIME type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * MIME type
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
