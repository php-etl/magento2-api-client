<?php

namespace Kiboko\Magento\Model;

class CmsDataBlockInterface
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
     * ID
     *
     * @var int|null
     */
    protected $id;
    /**
     * Identifier
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Content
     *
     * @var string|null
     */
    protected $content;
    /**
     * Creation time
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * Update time
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * Active
     *
     * @var bool|null
     */
    protected $active;
    /**
     * ID
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * ID
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier
     *
     * @return string|null
     */
    public function getIdentifier() : ?string
    {
        return $this->identifier;
    }
    /**
     * Identifier
     *
     * @param string|null $identifier
     *
     * @return self
     */
    public function setIdentifier(?string $identifier) : self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Content
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
    /**
     * Content
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * Creation time
     *
     * @return string|null
     */
    public function getCreationTime() : ?string
    {
        return $this->creationTime;
    }
    /**
     * Creation time
     *
     * @param string|null $creationTime
     *
     * @return self
     */
    public function setCreationTime(?string $creationTime) : self
    {
        $this->initialized['creationTime'] = true;
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Update time
     *
     * @return string|null
     */
    public function getUpdateTime() : ?string
    {
        return $this->updateTime;
    }
    /**
     * Update time
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime) : self
    {
        $this->initialized['updateTime'] = true;
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * Active
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * Active
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}