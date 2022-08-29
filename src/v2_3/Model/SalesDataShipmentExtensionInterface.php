<?php

namespace Kiboko\Magento\v2_3\Model;

class SalesDataShipmentExtensionInterface
{
    /**
     * 
     *
     * @var string
     */
    protected $sourceCode;
    /**
     * 
     *
     * @return string
     */
    public function getSourceCode() : string
    {
        return $this->sourceCode;
    }
    /**
     * 
     *
     * @param string $sourceCode
     *
     * @return self
     */
    public function setSourceCode(string $sourceCode) : self
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }
}