<?php

namespace Kiboko\Magento\v2_2\Exception;

class CompanyCompanyHierarchyV1GetCompanyHierarchyGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
