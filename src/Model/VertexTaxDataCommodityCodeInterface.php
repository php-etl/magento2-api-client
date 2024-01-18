<?php

namespace Kiboko\Magento\Model;

class VertexTaxDataCommodityCodeInterface
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
     * Commodity code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Commodity code type
     *
     * @var string|null
     */
    protected $type;
    /**
     * Commodity code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Commodity code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Commodity code type
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Commodity code type
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
}