<?php

namespace Kiboko\Magento\v2_4\Model;

class V1InventorySourcesSourceCodePutBody
{
    /**
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @var InventoryApiDataSourceInterface
     */
    protected $source;
    /**
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @return InventoryApiDataSourceInterface
     */
    public function getSource(): InventoryApiDataSourceInterface
    {
        return $this->source;
    }
    /**
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @param InventoryApiDataSourceInterface $source
     *
     * @return self
     */
    public function setSource(InventoryApiDataSourceInterface $source): self
    {
        $this->source = $source;
        return $this;
    }
}
