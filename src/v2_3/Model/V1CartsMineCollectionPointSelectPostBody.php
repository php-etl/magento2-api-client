<?php

namespace Kiboko\Magento\v2_3\Model;

class V1CartsMineCollectionPointSelectPostBody
{
    /**
     *
     *
     * @var int
     */
    protected $entityId;
    /**
     *
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }
    /**
     *
     *
     * @param int $entityId
     *
     * @return self
     */
    public function setEntityId(int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
}
