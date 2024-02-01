<?php

namespace Kiboko\Magento\Model;

class V1CategoriesCategoryIdMovePutBody
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
     * 
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * 
     *
     * @var int|null
     */
    protected $afterId;
    /**
     * 
     *
     * @return int|null
     */
    public function getParentId() : ?int
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
    public function setParentId(?int $parentId) : self
    {
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAfterId() : ?int
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
    public function setAfterId(?int $afterId) : self
    {
        $this->initialized['afterId'] = true;
        $this->afterId = $afterId;
        return $this;
    }
}