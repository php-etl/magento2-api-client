<?php

namespace Kiboko\Magento\v2_2\Exception;

class CatalogSpecialPriceStorageV1DeletePostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
