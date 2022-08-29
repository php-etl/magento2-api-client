<?php

namespace Kiboko\Magento\v2_1\Model;

class FrameworkDataImageContentInterface
{
    /**
     * Media data (base64 encoded content)
     *
     * @var string
     */
    protected $base64EncodedData;
    /**
     * MIME type
     *
     * @var string
     */
    protected $type;
    /**
     * Image name
     *
     * @var string
     */
    protected $name;
    /**
     * Media data (base64 encoded content)
     *
     * @return string
     */
    public function getBase64EncodedData(): string
    {
        return $this->base64EncodedData;
    }
    /**
     * Media data (base64 encoded content)
     *
     * @param string $base64EncodedData
     *
     * @return self
     */
    public function setBase64EncodedData(string $base64EncodedData): self
    {
        $this->base64EncodedData = $base64EncodedData;
        return $this;
    }
    /**
     * MIME type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * MIME type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Image name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Image name
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
