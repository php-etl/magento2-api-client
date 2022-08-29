<?php

namespace Kiboko\Magento\v2_1\Exception;

class CatalogAttributeSetRepositoryV1DeleteByIdDeleteUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
