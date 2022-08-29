<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogCostStorageV1GetPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
