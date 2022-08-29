<?php

namespace Kiboko\Magento\v2_2\Exception;

class ConfigurableProductLinkManagementV1GetChildrenGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
