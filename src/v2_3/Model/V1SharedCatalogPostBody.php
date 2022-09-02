<?php

namespace Kiboko\Magento\V2_3\Model;

class V1SharedCatalogPostBody
{
    /**
     * SharedCatalogInterface interface.
     *
     * @var SharedCatalogDataSharedCatalogInterface
     */
    protected $sharedCatalog;
    /**
     * SharedCatalogInterface interface.
     *
     * @return SharedCatalogDataSharedCatalogInterface
     */
    public function getSharedCatalog(): SharedCatalogDataSharedCatalogInterface
    {
        return $this->sharedCatalog;
    }
    /**
     * SharedCatalogInterface interface.
     *
     * @param SharedCatalogDataSharedCatalogInterface $sharedCatalog
     *
     * @return self
     */
    public function setSharedCatalog(SharedCatalogDataSharedCatalogInterface $sharedCatalog): self
    {
        $this->sharedCatalog = $sharedCatalog;
        return $this;
    }
}
