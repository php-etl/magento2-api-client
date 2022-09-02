<?php

namespace Kiboko\Magento\V2_3\Model;

class V1CategoriesCategoryIdMovePutBody
{
    /**
     *
     *
     * @var int
     */
    protected $afterId;
    /**
     *
     *
     * @var int
     */
    protected $parentId;
    /**
     *
     *
     * @return int
     */
    public function getAfterId(): int
    {
        return $this->afterId;
    }
    /**
     *
     *
     * @param int $afterId
     *
     * @return self
     */
    public function setAfterId(int $afterId): self
    {
        $this->afterId = $afterId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }
    /**
     *
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }
}
