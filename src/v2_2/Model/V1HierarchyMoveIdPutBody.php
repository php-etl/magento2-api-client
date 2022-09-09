<?php

namespace Kiboko\Magento\V2_2\Model;

class V1HierarchyMoveIdPutBody
{
    /**
     *
     *
     * @var int|null
     */
    protected $newParentId;
    /**
     *
     *
     * @return int|null
     */
    public function getNewParentId(): ?int
    {
        return $this->newParentId;
    }
    /**
     *
     *
     * @param int|null $newParentId
     *
     * @return self
     */
    public function setNewParentId(?int $newParentId): self
    {
        $this->newParentId = $newParentId;
        return $this;
    }
}
