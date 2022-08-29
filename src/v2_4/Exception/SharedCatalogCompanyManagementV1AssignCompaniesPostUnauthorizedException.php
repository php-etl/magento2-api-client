<?php

namespace Kiboko\Magento\v2_4\Exception;

class SharedCatalogCompanyManagementV1AssignCompaniesPostUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
