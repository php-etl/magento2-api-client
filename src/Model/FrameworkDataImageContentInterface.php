<?php

namespace Kiboko\Magento\Model;

class FrameworkDataImageContentInterface
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Media data (base64 encoded content)
     *
     * @var string|null
     */
    protected $base64EncodedData;
    /**
     * MIME type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Image name
     *
     * @var string|null
     */
    protected $name;
    /**
     * Media data (base64 encoded content)
     *
     * @return string|null
     */
    public function getBase64EncodedData() : ?string
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
    public function setBase64EncodedData(?string $base64EncodedData) : self
    {
        $this->initialized['base64EncodedData'] = true;
        $this->base64EncodedData = $base64EncodedData;
        return $this;
    }
    /**
     * MIME type
     *
     * @return string|null
     */
    public function getType() : ?string
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
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Image name
     *
     * @return string|null
     */
    public function getName() : ?string
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
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}