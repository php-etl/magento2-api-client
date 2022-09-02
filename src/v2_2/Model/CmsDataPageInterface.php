<?php

namespace Kiboko\Magento\V2_2\Model;

class CmsDataPageInterface
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
     * Content heading
     *
     * @var string
     */
    protected $contentHeading;
    /**
     * Creation time
     *
     * @var string
     */
    protected $creationTime;
    /**
     * Custom layout update xml
     *
     * @var string
     */
    protected $customLayoutUpdateXml;
    /**
     * Custom root template
     *
     * @var string
     */
    protected $customRootTemplate;
    /**
     * Custom theme
     *
     * @var string
     */
    protected $customTheme;
    /**
     * Custom theme from
     *
     * @var string
     */
    protected $customThemeFrom;
    /**
     * Custom theme to
     *
     * @var string
     */
    protected $customThemeTo;
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
     * Layout update xml
     *
     * @var string
     */
    protected $layoutUpdateXml;
    /**
     * Meta description
     *
     * @var string
     */
    protected $metaDescription;
    /**
     * Meta keywords
     *
     * @var string
     */
    protected $metaKeywords;
    /**
     * Meta title
     *
     * @var string
     */
    protected $metaTitle;
    /**
     * Page layout
     *
     * @var string
     */
    protected $pageLayout;
    /**
     * Sort order
     *
     * @var string
     */
    protected $sortOrder;
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
     * Content heading
     *
     * @return string
     */
    public function getContentHeading(): string
    {
        return $this->contentHeading;
    }
    /**
     * Content heading
     *
     * @param string $contentHeading
     *
     * @return self
     */
    public function setContentHeading(string $contentHeading): self
    {
        $this->contentHeading = $contentHeading;
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
     * Custom layout update xml
     *
     * @return string
     */
    public function getCustomLayoutUpdateXml(): string
    {
        return $this->customLayoutUpdateXml;
    }
    /**
     * Custom layout update xml
     *
     * @param string $customLayoutUpdateXml
     *
     * @return self
     */
    public function setCustomLayoutUpdateXml(string $customLayoutUpdateXml): self
    {
        $this->customLayoutUpdateXml = $customLayoutUpdateXml;
        return $this;
    }
    /**
     * Custom root template
     *
     * @return string
     */
    public function getCustomRootTemplate(): string
    {
        return $this->customRootTemplate;
    }
    /**
     * Custom root template
     *
     * @param string $customRootTemplate
     *
     * @return self
     */
    public function setCustomRootTemplate(string $customRootTemplate): self
    {
        $this->customRootTemplate = $customRootTemplate;
        return $this;
    }
    /**
     * Custom theme
     *
     * @return string
     */
    public function getCustomTheme(): string
    {
        return $this->customTheme;
    }
    /**
     * Custom theme
     *
     * @param string $customTheme
     *
     * @return self
     */
    public function setCustomTheme(string $customTheme): self
    {
        $this->customTheme = $customTheme;
        return $this;
    }
    /**
     * Custom theme from
     *
     * @return string
     */
    public function getCustomThemeFrom(): string
    {
        return $this->customThemeFrom;
    }
    /**
     * Custom theme from
     *
     * @param string $customThemeFrom
     *
     * @return self
     */
    public function setCustomThemeFrom(string $customThemeFrom): self
    {
        $this->customThemeFrom = $customThemeFrom;
        return $this;
    }
    /**
     * Custom theme to
     *
     * @return string
     */
    public function getCustomThemeTo(): string
    {
        return $this->customThemeTo;
    }
    /**
     * Custom theme to
     *
     * @param string $customThemeTo
     *
     * @return self
     */
    public function setCustomThemeTo(string $customThemeTo): self
    {
        $this->customThemeTo = $customThemeTo;
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
     * Layout update xml
     *
     * @return string
     */
    public function getLayoutUpdateXml(): string
    {
        return $this->layoutUpdateXml;
    }
    /**
     * Layout update xml
     *
     * @param string $layoutUpdateXml
     *
     * @return self
     */
    public function setLayoutUpdateXml(string $layoutUpdateXml): self
    {
        $this->layoutUpdateXml = $layoutUpdateXml;
        return $this;
    }
    /**
     * Meta description
     *
     * @return string
     */
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }
    /**
     * Meta description
     *
     * @param string $metaDescription
     *
     * @return self
     */
    public function setMetaDescription(string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }
    /**
     * Meta keywords
     *
     * @return string
     */
    public function getMetaKeywords(): string
    {
        return $this->metaKeywords;
    }
    /**
     * Meta keywords
     *
     * @param string $metaKeywords
     *
     * @return self
     */
    public function setMetaKeywords(string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }
    /**
     * Meta title
     *
     * @return string
     */
    public function getMetaTitle(): string
    {
        return $this->metaTitle;
    }
    /**
     * Meta title
     *
     * @param string $metaTitle
     *
     * @return self
     */
    public function setMetaTitle(string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }
    /**
     * Page layout
     *
     * @return string
     */
    public function getPageLayout(): string
    {
        return $this->pageLayout;
    }
    /**
     * Page layout
     *
     * @param string $pageLayout
     *
     * @return self
     */
    public function setPageLayout(string $pageLayout): self
    {
        $this->pageLayout = $pageLayout;
        return $this;
    }
    /**
     * Sort order
     *
     * @return string
     */
    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param string $sortOrder
     *
     * @return self
     */
    public function setSortOrder(string $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
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
