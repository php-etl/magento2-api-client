<?php

namespace Kiboko\Magento\v2_3\Exception;

class SharedCatalogSharedCatalogRepositoryV1SavePutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
