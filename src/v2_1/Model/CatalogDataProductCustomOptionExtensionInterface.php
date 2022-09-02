<?php

namespace Kiboko\Magento\V2_1\Model;

class CatalogDataProductCustomOptionExtensionInterface
{
    /**
     *
     *
     * @var string
     */
    protected $vertexFlexField;
    /**
     *
     *
     * @return string
     */
    public function getVertexFlexField(): string
    {
        return $this->vertexFlexField;
    }
    /**
     *
     *
     * @param string $vertexFlexField
     *
     * @return self
     */
    public function setVertexFlexField(string $vertexFlexField): self
    {
        $this->vertexFlexField = $vertexFlexField;
        return $this;
    }
}
