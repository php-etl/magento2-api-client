<?php

namespace Kiboko\Magento\v2_1\Exception;

class CatalogProductAttributeOptionManagementV1DeleteDeleteBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('400 Bad Request');
    }
}
