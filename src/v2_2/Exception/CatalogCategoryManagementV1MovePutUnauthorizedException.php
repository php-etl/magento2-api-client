<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogCategoryManagementV1MovePutUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
