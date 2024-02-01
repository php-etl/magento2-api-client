<?php

namespace Kiboko\Magento\Model;

class V1InventorySourcesSourceCodePutBody
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
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @var InventoryApiDataSourceInterface|null
     */
    protected $source;
    /**
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @return InventoryApiDataSourceInterface|null
     */
    public function getSource() : ?InventoryApiDataSourceInterface
    {
        return $this->source;
    }
    /**
     * Represents physical storage, i.e. brick and mortar store or warehouse Used fully qualified namespaces in annotations for proper work of WebApi request parser
     *
     * @param InventoryApiDataSourceInterface|null $source
     *
     * @return self
     */
    public function setSource(?InventoryApiDataSourceInterface $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}