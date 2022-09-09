<?php

namespace Kiboko\Magento\V2_2\Model;

class CmsDataPageInterface
{
    /**
     * Active
     *
     * @var bool|null
     */
    protected $active;
    /**
     * Content
     *
     * @var string|null
     */
    protected $content;
    /**
     * Content heading
     *
     * @var string|null
     */
    protected $contentHeading;
    /**
     * Creation time
     *
     * @var string|null
     */
    protected $creationTime;
    /**
     * Custom layout update xml
     *
     * @var string|null
     */
    protected $customLayoutUpdateXml;
    /**
     * Custom root template
     *
     * @var string|null
     */
    protected $customRootTemplate;
    /**
     * Custom theme
     *
     * @var string|null
     */
    protected $customTheme;
    /**
     * Custom theme from
     *
     * @var string|null
     */
    protected $customThemeFrom;
    /**
     * Custom theme to
     *
     * @var string|null
     */
    protected $customThemeTo;
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
     * Layout update xml
     *
     * @var string|null
     */
    protected $layoutUpdateXml;
    /**
     * Meta description
     *
     * @var string|null
     */
    protected $metaDescription;
    /**
     * Meta keywords
     *
     * @var string|null
     */
    protected $metaKeywords;
    /**
     * Meta title
     *
     * @var string|null
     */
    protected $metaTitle;
    /**
     * Page layout
     *
     * @var string|null
     */
    protected $pageLayout;
    /**
     * Sort order
     *
     * @var string|null
     */
    protected $sortOrder;
    /**
     * Title
     *
     * @var string|null
     */
    protected $title;
    /**
     * Update time
     *
     * @var string|null
     */
    protected $updateTime;
    /**
     * Active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
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
    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }
    /**
     * Content
     *
     * @return string|null
     */
    public function getContent(): ?string
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
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * Content heading
     *
     * @return string|null
     */
    public function getContentHeading(): ?string
    {
        return $this->contentHeading;
    }
    /**
     * Content heading
     *
     * @param string|null $contentHeading
     *
     * @return self
     */
    public function setContentHeading(?string $contentHeading): self
    {
        $this->contentHeading = $contentHeading;
        return $this;
    }
    /**
     * Creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
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
    public function setCreationTime(?string $creationTime): self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Custom layout update xml
     *
     * @return string|null
     */
    public function getCustomLayoutUpdateXml(): ?string
    {
        return $this->customLayoutUpdateXml;
    }
    /**
     * Custom layout update xml
     *
     * @param string|null $customLayoutUpdateXml
     *
     * @return self
     */
    public function setCustomLayoutUpdateXml(?string $customLayoutUpdateXml): self
    {
        $this->customLayoutUpdateXml = $customLayoutUpdateXml;
        return $this;
    }
    /**
     * Custom root template
     *
     * @return string|null
     */
    public function getCustomRootTemplate(): ?string
    {
        return $this->customRootTemplate;
    }
    /**
     * Custom root template
     *
     * @param string|null $customRootTemplate
     *
     * @return self
     */
    public function setCustomRootTemplate(?string $customRootTemplate): self
    {
        $this->customRootTemplate = $customRootTemplate;
        return $this;
    }
    /**
     * Custom theme
     *
     * @return string|null
     */
    public function getCustomTheme(): ?string
    {
        return $this->customTheme;
    }
    /**
     * Custom theme
     *
     * @param string|null $customTheme
     *
     * @return self
     */
    public function setCustomTheme(?string $customTheme): self
    {
        $this->customTheme = $customTheme;
        return $this;
    }
    /**
     * Custom theme from
     *
     * @return string|null
     */
    public function getCustomThemeFrom(): ?string
    {
        return $this->customThemeFrom;
    }
    /**
     * Custom theme from
     *
     * @param string|null $customThemeFrom
     *
     * @return self
     */
    public function setCustomThemeFrom(?string $customThemeFrom): self
    {
        $this->customThemeFrom = $customThemeFrom;
        return $this;
    }
    /**
     * Custom theme to
     *
     * @return string|null
     */
    public function getCustomThemeTo(): ?string
    {
        return $this->customThemeTo;
    }
    /**
     * Custom theme to
     *
     * @param string|null $customThemeTo
     *
     * @return self
     */
    public function setCustomThemeTo(?string $customThemeTo): self
    {
        $this->customThemeTo = $customThemeTo;
        return $this;
    }
    /**
     * ID
     *
     * @return int|null
     */
    public function getId(): ?int
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
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
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
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Layout update xml
     *
     * @return string|null
     */
    public function getLayoutUpdateXml(): ?string
    {
        return $this->layoutUpdateXml;
    }
    /**
     * Layout update xml
     *
     * @param string|null $layoutUpdateXml
     *
     * @return self
     */
    public function setLayoutUpdateXml(?string $layoutUpdateXml): self
    {
        $this->layoutUpdateXml = $layoutUpdateXml;
        return $this;
    }
    /**
     * Meta description
     *
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }
    /**
     * Meta description
     *
     * @param string|null $metaDescription
     *
     * @return self
     */
    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }
    /**
     * Meta keywords
     *
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }
    /**
     * Meta keywords
     *
     * @param string|null $metaKeywords
     *
     * @return self
     */
    public function setMetaKeywords(?string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }
    /**
     * Meta title
     *
     * @return string|null
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }
    /**
     * Meta title
     *
     * @param string|null $metaTitle
     *
     * @return self
     */
    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }
    /**
     * Page layout
     *
     * @return string|null
     */
    public function getPageLayout(): ?string
    {
        return $this->pageLayout;
    }
    /**
     * Page layout
     *
     * @param string|null $pageLayout
     *
     * @return self
     */
    public function setPageLayout(?string $pageLayout): self
    {
        $this->pageLayout = $pageLayout;
        return $this;
    }
    /**
     * Sort order
     *
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Sort order
     *
     * @param string|null $sortOrder
     *
     * @return self
     */
    public function setSortOrder(?string $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Title
     *
     * @return string|null
     */
    public function getTitle(): ?string
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
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
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
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
}
