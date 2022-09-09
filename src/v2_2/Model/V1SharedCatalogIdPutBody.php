<?php

namespace Kiboko\Magento\V2_2\Model;

class V1SharedCatalogIdPutBody
{
    /**
     * SharedCatalogInterface interface.
     *
     * @var SharedCatalogDataSharedCatalogInterface|null
     */
    protected $sharedCatalog;
    /**
     * SharedCatalogInterface interface.
     *
     * @return SharedCatalogDataSharedCatalogInterface|null
     */
    public function getSharedCatalog(): ?SharedCatalogDataSharedCatalogInterface
    {
        return $this->sharedCatalog;
    }
    /**
     * SharedCatalogInterface interface.
     *
     * @param SharedCatalogDataSharedCatalogInterface|null $sharedCatalog
     *
     * @return self
     */
    public function setSharedCatalog(?SharedCatalogDataSharedCatalogInterface $sharedCatalog): self
    {
        $this->sharedCatalog = $sharedCatalog;
        return $this;
    }
}
