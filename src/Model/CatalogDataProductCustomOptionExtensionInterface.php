<?php

namespace Kiboko\Magento\Model;

class CatalogDataProductCustomOptionExtensionInterface
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
     * 
     *
     * @var string|null
     */
    protected $vertexFlexField;
    /**
     * 
     *
     * @return string|null
     */
    public function getVertexFlexField() : ?string
    {
        return $this->vertexFlexField;
    }
    /**
     * 
     *
     * @param string|null $vertexFlexField
     *
     * @return self
     */
    public function setVertexFlexField(?string $vertexFlexField) : self
    {
        $this->initialized['vertexFlexField'] = true;
        $this->vertexFlexField = $vertexFlexField;
        return $this;
    }
}