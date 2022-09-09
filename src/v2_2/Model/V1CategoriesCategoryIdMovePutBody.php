<?php

namespace Kiboko\Magento\V2_2\Model;

class V1CategoriesCategoryIdMovePutBody
{
    /**
     *
     *
     * @var int|null
     */
    protected $afterId;
    /**
     *
     *
     * @var int|null
     */
    protected $parentId;
    /**
     *
     *
     * @return int|null
     */
    public function getAfterId(): ?int
    {
        return $this->afterId;
    }
    /**
     *
     *
     * @param int|null $afterId
     *
     * @return self
     */
    public function setAfterId(?int $afterId): self
    {
        $this->afterId = $afterId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     *
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
}
