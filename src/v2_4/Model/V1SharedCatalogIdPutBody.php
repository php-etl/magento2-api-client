<?php

namespace Kiboko\Magento\V2_4\Model;

class V1SharedCatalogIdPutBody
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
