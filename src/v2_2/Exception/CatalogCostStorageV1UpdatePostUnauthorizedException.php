<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogCostStorageV1UpdatePostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
