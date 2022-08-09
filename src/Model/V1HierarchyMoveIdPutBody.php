<?php

namespace Kiboko\Magento\V2\Model;

class V1HierarchyMoveIdPutBody
{
    /**
     * 
     *
     * @var int
     */
    protected $newParentId;
    /**
     * 
     *
     * @return int
     */
    public function getNewParentId() : int
    {
        return $this->newParentId;
    }
    /**
     * 
     *
     * @param int $newParentId
     *
     * @return self
     */
    public function setNewParentId(int $newParentId) : self
    {
        $this->newParentId = $newParentId;
        return $this;
    }
}