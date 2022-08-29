<?php

namespace Kiboko\Magento\v2_4\Model;

class CmsDataBlockInterface
{
    /**
     * Active
     *
     * @var bool
     */
    protected $active;
    /**
     * Content
     *
     * @var string
     */
    protected $content;
    /**
     * Creation time
     *
     * @var string
     */
    protected $creationTime;
    /**
     * ID
     *
     * @var int
     */
    protected $id;
    /**
     * Identifier
     *
     * @var string
     */
    protected $identifier;
    /**
     * Title
     *
     * @var string
     */
    protected $title;
    /**
     * Update time
     *
     * @var string
     */
    protected $updateTime;
    /**
     * Active
     *
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }
    /**
     * Active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * Content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Creation time
     *
     * @return string
     */
    public function getCreationTime(): string
    {
        return $this->creationTime;
    }
    /**
     * Creation time
     *
     * @param string $creationTime
     *
     * @return self
     */
    public function setCreationTime(string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }
    /**
     * Identifier
     *
     * @param string $identifier
     *
     * @return self
     */
    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * Title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Update time
     *
     * @return string
     */
    public function getUpdateTime(): string
    {
        return $this->updateTime;
    }
    /**
     * Update time
     *
     * @param string $updateTime
     *
     * @return self
     */
    public function setUpdateTime(string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}
