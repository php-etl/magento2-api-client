<?php

namespace Kiboko\Magento\v2_4\Exception;

class CatalogInventoryStockRegistryV1GetStockItemBySkuGetUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('401 Unauthorized');
    }
}
