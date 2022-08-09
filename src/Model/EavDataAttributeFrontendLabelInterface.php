<?php

namespace Kiboko\Magento\V2\Model;

class EavDataAttributeFrontendLabelInterface
{
    /**
     * Option label
     *
     * @var string
     */
    protected $label;
    /**
     * Store id
     *
     * @var int
     */
    protected $storeId;
    /**
     * Option label
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * Option label
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Store id
     *
     * @return int
     */
    public function getStoreId() : int
    {
        return $this->storeId;
    }
    /**
     * Store id
     *
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId) : self
    {
        $this->storeId = $storeId;
        return $this;
    }
}