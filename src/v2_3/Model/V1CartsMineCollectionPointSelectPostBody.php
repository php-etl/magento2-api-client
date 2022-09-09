<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CartsMineCollectionPointSelectPostBody
{
    /**
     *
     *
     * @var int|null
     */
    protected $entityId;
    /**
     *
     *
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->entityId;
    }
    /**
     *
     *
     * @param int|null $entityId
     *
     * @return self
     */
    public function setEntityId(?int $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }
}
