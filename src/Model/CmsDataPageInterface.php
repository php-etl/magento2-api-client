<?php

namespace Kiboko\Magento\Model;

class CmsDataPageInterface
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
     * Page layout
     *
     * @var string|null
     */
    protected $pageLayout;
    /**
     * Meta title
     *
     * @var string|null
     */
    protected $metaTitle;
    /**
     * Meta keywords
     *
     * @var string|null
     */
    protected $metaKeywords;
    /**
     * Meta description
     *
     * @var string|null
     */
    protected $metaDescription;
    /**
     * Content heading
     *
     * @var string|null
     */
    protected $contentHeading;
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
     * Sort order
     *
     * @var string|null
     */
    protected $sortOrder;
    /**
     * Layout update xml
     *
     * @var string|null
     */
    protected $layoutUpdateXml;
    /**
     * Custom theme
     *
     * @var string|null
     */
    protected $customTheme;
    /**
     * Custom root template
     *
     * @var string|null
     */
    protected $customRootTemplate;
    /**
     * Custom layout update xml
     *
     * @var string|null
     */
    protected $customLayoutUpdateXml;
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
     * Page layout
     *
     * @return string|null
     */
    public function getPageLayout() : ?string
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
    public function setPageLayout(?string $pageLayout) : self
    {
        $this->initialized['pageLayout'] = true;
        $this->pageLayout = $pageLayout;
        return $this;
    }
    /**
     * Meta title
     *
     * @return string|null
     */
    public function getMetaTitle() : ?string
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
    public function setMetaTitle(?string $metaTitle) : self
    {
        $this->initialized['metaTitle'] = true;
        $this->metaTitle = $metaTitle;
        return $this;
    }
    /**
     * Meta keywords
     *
     * @return string|null
     */
    public function getMetaKeywords() : ?string
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
    public function setMetaKeywords(?string $metaKeywords) : self
    {
        $this->initialized['metaKeywords'] = true;
        $this->metaKeywords = $metaKeywords;
        return $this;
    }
    /**
     * Meta description
     *
     * @return string|null
     */
    public function getMetaDescription() : ?string
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
    public function setMetaDescription(?string $metaDescription) : self
    {
        $this->initialized['metaDescription'] = true;
        $this->metaDescription = $metaDescription;
        return $this;
    }
    /**
     * Content heading
     *
     * @return string|null
     */
    public function getContentHeading() : ?string
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
    public function setContentHeading(?string $contentHeading) : self
    {
        $this->initialized['contentHeading'] = true;
        $this->contentHeading = $contentHeading;
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
     * Sort order
     *
     * @return string|null
     */
    public function getSortOrder() : ?string
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
    public function setSortOrder(?string $sortOrder) : self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Layout update xml
     *
     * @return string|null
     */
    public function getLayoutUpdateXml() : ?string
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
    public function setLayoutUpdateXml(?string $layoutUpdateXml) : self
    {
        $this->initialized['layoutUpdateXml'] = true;
        $this->layoutUpdateXml = $layoutUpdateXml;
        return $this;
    }
    /**
     * Custom theme
     *
     * @return string|null
     */
    public function getCustomTheme() : ?string
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
    public function setCustomTheme(?string $customTheme) : self
    {
        $this->initialized['customTheme'] = true;
        $this->customTheme = $customTheme;
        return $this;
    }
    /**
     * Custom root template
     *
     * @return string|null
     */
    public function getCustomRootTemplate() : ?string
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
    public function setCustomRootTemplate(?string $customRootTemplate) : self
    {
        $this->initialized['customRootTemplate'] = true;
        $this->customRootTemplate = $customRootTemplate;
        return $this;
    }
    /**
     * Custom layout update xml
     *
     * @return string|null
     */
    public function getCustomLayoutUpdateXml() : ?string
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
    public function setCustomLayoutUpdateXml(?string $customLayoutUpdateXml) : self
    {
        $this->initialized['customLayoutUpdateXml'] = true;
        $this->customLayoutUpdateXml = $customLayoutUpdateXml;
        return $this;
    }
    /**
     * Custom theme from
     *
     * @return string|null
     */
    public function getCustomThemeFrom() : ?string
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
    public function setCustomThemeFrom(?string $customThemeFrom) : self
    {
        $this->initialized['customThemeFrom'] = true;
        $this->customThemeFrom = $customThemeFrom;
        return $this;
    }
    /**
     * Custom theme to
     *
     * @return string|null
     */
    public function getCustomThemeTo() : ?string
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
    public function setCustomThemeTo(?string $customThemeTo) : self
    {
        $this->initialized['customThemeTo'] = true;
        $this->customThemeTo = $customThemeTo;
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