<?php

namespace Kiboko\Magento\V2_2\Model;

class CatalogDataProductCustomOptionExtensionInterface
{
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
    public function getVertexFlexField(): ?string
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
    public function setVertexFlexField(?string $vertexFlexField): self
    {
        $this->vertexFlexField = $vertexFlexField;
        return $this;
    }
}
