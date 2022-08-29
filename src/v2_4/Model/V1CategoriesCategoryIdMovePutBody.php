<?php

namespace Kiboko\Magento\v2_4\Model;

class V1CategoriesCategoryIdMovePutBody
{
    /**
     *
     *
     * @var int
     */
    protected $parentId;
    /**
     *
     *
     * @var int
     */
    protected $afterId;
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
}
